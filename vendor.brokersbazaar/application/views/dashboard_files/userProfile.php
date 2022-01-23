
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    
                         <div class="row" >
                            
                            <div class="col-md-1">
                                  
            <?php foreach($vendorDetails as $data){
        ?>                          
            <img src="<?php echo base_url();?>vendor_data/vendor_img/<?php echo $data->userImage; ?>">
          <?php }?> 
    
              
                       </div>
                       <div class="col-md-1">
                           <form action="editUserImage" method="post"
 enctype='multipart/form-data'>                     
 <label for="files" class="btn"><span uk-icon="icon: file-edit"></span></label>
  <input id="files" style="visibility:hidden;width:1px" type="file" onclick="document.querySelector('#change_btn').style.display='block';" name="imageFile" required> 
  <input type="submit" style="display:none" value="Save" id="change_btn" class="uk-button uk-button-primary uk-button-small">
  </form> 
                       </div>
                            </div>
                           
              </div>
              
              
              <hr>
              
              
             <div class="uk-container">
                  <ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Personal Details</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Address Verification</a></li>
    <li><a href="#">Licence details</a></li>
 <li><a href="#">About Vendor</a></li>
  
</ul>
<ul class="uk-switcher uk-margin">
    <li>
        <?php foreach($vendorDetails as $data){
        $emailid=$data->email;
        ?>
        <form action="editUserData" method="get" enctype='multipart/form-data'>
        <div class="uk-grid">
    <div class="uk-width-1-4@m uk-width-1-2@s">
        
         <label class="uk-form-label">Your Full Name</label>
    <input class="uk-input " type="text" value="<?php echo $data->name; ?>" name="name">
    </div>
      <div class="uk-width-1-4@m uk-width-1-2@s">
           <label class="uk-form-label">Your Phone</label>
      <input class="uk-input" readonly type="text" Value="<?php echo $data->phone; ?>" name="phone">
      </div>
      </div>
      
     <div class="uk-grid" style="margin-top:10px;">
    
      <div class="uk-width-1-2@m">
           <label class="uk-form-label">Your Email-ID</label>
      <input class="uk-input " readonly type="email" Value="<?php echo $data->email; ?>" name="email">
      </div>
      </div> 
      
        <div class="uk-grid" style="margin-top:10px;">
    <div class="uk-margin uk-width-1-4@m">
         <label class="uk-form-label">Account Type</label>
        
           <input class="uk-input" readonly type="text" Value="<?php echo $data->type; ?>" name="type">
   
    </div>
      <div class=" uk-width-1-4@m">
           <label class="uk-form-label">Company Name</label>
      <input class="uk-input"  type="text" Value="<?php echo $data->company_name; ?>" name="company_name">
      </div>
      </div>
      
      <div class="uk-grid" style="margin-top:10px;">
    <div class="uk-margin uk-width-1-4@m">
         <label class="uk-form-label">Address</label>
        
           <input class="uk-input" type="text" Value="<?php echo $data->Address; ?>" name="Address">
   
    </div>
      <div class=" uk-width-1-4@m">
           <label class="uk-form-label">City</label>
      <input class="uk-input"  type="text" Value="<?php echo $data->city; ?>" name="city">
      </div>
      </div>
      
      
      
      
     <input class="uk-button uk-button-default " type="submit" class="uk-button uk-button-default " value="save">
     </form>
     <?php }?>
    </li>
    
    <!-------Services Input--------->
    <li>
         
    
        <div class="uk-grid">
    <div class="uk-width-1-2@m uk-width-1-2@s">
        <form action="addServices" method="post" enctype='multipart/form-data'>
        <h6>Add New Service</h6>
         <?php foreach($services as $service){
             
        ?>   
       
        <input Type="checkbox" name="services[]" value="<?php echo $service->title;?>"><?php echo $service->title;?><br>
       
        
   
    <?php }?>
      
      <input type="text" name="services[]" value="" placeholder="Other Service" >
     <input class="uk-button uk-button-default" type="submit" value="save">
    </form>
     </div>
      <div class="uk-width-1-2@m uk-width-1-2@s">
          <h6>Old Services</h6>
          <form action="editOldService" method="post">
          <ul>
          <?php foreach($vendor_services as $vservice){
              if(strpos($vservice->services,',')>=0){
                
              $servicess=explode(",",$vservice->services);
            //   print_r(count($servicess));
              $x=0;
              while($x<count($servicess) ){
                  if(!empty($servicess[$x]) && $servicess[$x]!==' '){
                  
          ?>
          <input type="checkbox" name="services[]" checked value="<?php echo $servicess[$x];?>"><?php echo $servicess[$x];?><br/>
          <?php }
          $x++;
          }}
          else {
              ?>
               <input type="checkbox" name="services[]" checked value="<?php print_r($vservice->services);?>"><?php print_r($vservice->services);?><br/>
              <?php 
          }
          }
          
          ?></ul>
          <br>
          <button class="uk-button uk-button-default" type="submit" >Edit</button>
          </form>
    </div>
      </div>
      
    
    </li>
    
    
    
    <!--------address verify------------>
   <li>
       
       <?php foreach($vendorDetails as $data){
        
        ?>
   <span class="uk-disabled uk-label">Verification Status - <?php echo $data->addressVerificationStatus ?></span>
   <?php } ?>
    <form action="editAddressVerification" method="post" enctype='multipart/form-data'>
     
      
        <div class="uk-grid" style="margin-top:10px;">
    <div class="uk-margin uk-width-1-4@m">
         <label class="uk-form-label">Your Address Verification Document</label>
         
         <select class="uk-select" id="form-stacked-select" name="doc_type">
             
               <option role="option" data-value="1">Aadhar</option>
               <option role="option" data-value="2">Bill</option>
               <option role="option" data-value="3">Voter ID</option>
              
            </select>
         
   
    </div>
      <div class=" uk-width-1-4@m">
           <label class="uk-form-label">Select Document </label>
      <input class="uk-input"  type="file" name="filename">
      </div>
      </div>
     <input class="uk-button uk-button-default" type="submit">
    </form>
    </li>
  
<li>
    <div style="max-width:100%;overflow:auto;">
   <table class="uk-table" border="1">   
   <thead>
       <tr>
           <th>Id</th><th>Email</th><td>License</td><td>brokerage_commission</td><td>Equity_SEBI_Registration_No</td><td>gst</td><td>Exchange_Registration_Nos</td><td>NSE_TM_CODE</td><td>NSE_clr_no</td><td>BSE_Clearing_No</td><td>MSEI_TM_Code</td><td>Clearing_No</td><td>MCX_TM_No</td><td>MCX_TM_No</td><td>NCDEX_TM_No</td><td></td><td>ncdx_Clearing_No</td><td>ICEX_TM_ID</td><td>SEBI_Registration_for_DP</td><td>NSDL_DP_ID</td><td>CDSL_DP_ID</td><td>SEBI_Research_Analysts_No</td><td>SEBI_PMS_Registration_No</td><td>CMBPID_NCL_CM</td>
       </tr>
   </thead>
   <tbody>
       
    <?php foreach($liecenses as $liecense){
    echo "<tr>";
    foreach($liecense as $l){
        
    
    ?>
         
    <?php echo "<td>". $l."</td>";} echo"</tr>"; }?>
      </tbody>
      </table>
       
  </div>
  <br>
   <button class="uk-button uk-button-default">Edit</button>
  </li>
  <li>
      <h6>About Vendor</h6>
      <form action="editAboutVendor" method="post">
      <textarea name="aboutVendor"><?php foreach($vendor_services as $about){
      echo $about->aboutVendor;}
      ?></textarea>
      <br><br>
       <button class="uk-button uk-button-default" type="submit">Edit</button>
       </form>
  </li>
  
</ul>





                        
              </div> 
              
              
              
              
              
              
                <!-- /.container-fluid -->

            </div> 
           

        </div>
  

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


  