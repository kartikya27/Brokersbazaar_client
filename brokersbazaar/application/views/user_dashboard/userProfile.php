
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    
                         <div class="row" >
                            
                            <div class="col-md-1">
        <?php foreach($userdata as $data){
        ?>                          
            <img src="<?php echo base_url();?>img/userimage/<?php echo $data->userImage; ?>">
          <?php }?> 
          
          
          </div>
           <form action="editUserImage" method="post"
 enctype='multipart/form-data'>                     
  <label for="files" class="btn"><span uk-icon="icon: file-edit"></span></label>
  <input id="files" style="visibility:hidden;width:1px;" type="file" onclick="document.querySelector('#change_btn').style.display='block'" name="imageFile" required> 
  <input type="submit" style="display:none" value="Save" id="change_btn" class="uk-button uk-button-primary uk-button-small">
  </form>
          
                            </div>
                           
              </div>
              
              
              <hr>
              
              
             <div class="uk-container">
                  <ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Personal Details</a></li>
    <li><a href="#">Address Details</a></li>
    <li><a href="#">Address Verification</a></li>
    
  
   
</ul>
<ul class="uk-switcher uk-margin">
    <li>
        <?php foreach($userdata as $data){
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
         <label class="uk-form-label">Your Annual Income</label>
         
         <select class="uk-select" id="form-stacked-select" name="annualIncome">
             
             <?php if(!empty($data->annualIncome)){ ?>
             <option role="option" data-value="<?php echo $data->annualIncome; ?>" tabindex="0"><?php echo $data->annualIncome; ?></option>
             <?php }else{ ?>
             <option role="option" data-value="" tabindex="0">Select</option>
             <?php }?>
               
               <option role="option" data-value="1">upto 3 lakhs</option>
               <option role="option" data-value="2">3 - 5 lakhs</option>
               <option role="option" data-value="3">5 - 7 lakhs</option>
               <option role="option" data-value="4">7 - 10 lakhs</option>
               <option role="option" data-value="5">10 - 15 lakhs</option>
               <option role="option" data-value="6">15 lakhs +</option>
               <option role="option" data-value="10">less then  1lac</option>
            </select>
         
   
    </div>
      <div class=" uk-width-1-4@m">
           <label class="uk-form-label">Date of Birth</label>
      <input class="uk-input"  type="date" Value="<?php echo $data->dob; ?>" name="dob">
      </div>
      </div>
     <input class="uk-button uk-button-default " type="submit" class="uk-button uk-button-default " value="save">
     </form>
     <?php }?>
    </li>
    
    <!-------address Input--------->
    <li>
         <?php foreach($userdata as $data){
        ?>   
        <form action="editUserAddress" method="post" enctype='multipart/form-data'>
    
        <div class="uk-grid">
    <div class="uk-width-1-2@m uk-width-1-1@s">
        <input type="hidden" value="<?php echo $emailid;?>" name="email">
         <label class="uk-form-label">Your Address</label>
    <input class="uk-input " type="text" Value="<?php echo $data->Address ; ?>" name="address">
    </div>
      
      </div>
      
      <div class="uk-grid">
      <div class="uk-width-1-2@m uk-width-1-1@s">
           <label class="uk-form-label">Your City</label>
      <input class="uk-input"  type="text" Value="<?php echo $data->city; ?>" name="city">
      </div>
      </div>
      
     <input class="uk-button uk-button-default" type="submit" value="save">
    </form>
    <?php }?>
    </li>
    
    
    
    <!--------address verify------------>
   <li>
         <?php foreach($userdata as $data){
        
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


  