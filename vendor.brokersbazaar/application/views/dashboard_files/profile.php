<head>
    <!--<meta http-equiv="refresh" content="1">-->
  
      <title> Vendor - Dashboard | Brokers bazar  </title>
      
       <style>
        .uk-card-body{
            padding: 25px;
            background: #fff;
           
          
        }
        .uk-card-default{
            box-shadow:none;
        }
        .box-design{
             box-shadow: 0 0.5px 1px 0 rgb(5 47 95 / 4%), 0 3px 4px 0 rgb(52 105 203 / 12%);
            border: 1px solid #dddddd;
        }
       
        
        .uk-card-footer{
            padding:0px 5px;
        }
        
         .uk-card-body > p{
            font-size: 12px;
             text-align: left;
             margin-top: 0px;
        }
        
        
        .uk-card-title{
            margin:10px 0px;
            font-size: 14px;
            color:#01579B !important;
        }
      .nav-design{
          padding:0px 10px;
      }  
      .select-design  {
                width: 100%;
                padding: 15px;
                border: 1px solid #ddd;
      }
        .custom-header, .custom_nav>li>a, .uk-navbar-toggle{
            min-height: 40px !important;
            color:#000 !important;
            
        }
       .notice{
           align-items: center;
           padding: 10px 20px;
    color: red;
    background-color: #ffcc3b40;
       }
       
       .btn-top{
                   position: relative;
    right: -90;
    top: -20;
    font-size: 18px;
       }
       
    </style>
      
      
</head>
           
   <!-----=======HEADER FILE=============----------------> 
   <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container-fluid" data-uk-navbar style="border-bottom:1px solid #dddddd; margin-bottom:10px;">
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item custom-header">
                    
                     <ul class="uk-navbar-nav uk-visible@m custom_nav">   
                                 
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url() ?>#Fee-Structure" style="color:#29B6F6;  font-weight:500;" >Catalogue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Services" style="color:#29B6F6;  font-weight:500;" >Inventory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#FAQs" style="color:#29B6F6;  font-weight:500;" >Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Enquiry</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Advertising</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Growth</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Reports</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Performance</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Partner</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Network</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>#Contact" style="color:#29B6F6;  font-weight:500;">B2B</a>
        </li>
        
            
        
        
        </ul>
                           
                        </div>
                    </div>
                </div>
            </nav>
    <main>
        
        <!--------Nav only for Vendor------->
        <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-1@m uk-inline" style="background-color:;">
                         <div class="uk-child-width-1-6@m uk-child-width-1-2@s uk-grid-large uk-flex" data-uk-grid>
                          <div class="nav-design" >
                             
                              <select class="select-design">
                                  <option>New Enquiry 0</option>
                              </select>
                          </div>
                          <div class="nav-design">
                              <select class="select-design">
                                  <option>Confirm Enquiry 0</option>
                              </select>
                          </div>
                          <div class="nav-design">
                              <select class="select-design">
                                  <option>Rejected Enquiry 0</option>
                              </select>
                          </div>
                          <div class="nav-design">
                              <select class="select-design">
                                  <option>User Database 0</option>
                              </select>
                          </div>
                          <div class="nav-design">
                              <select class="select-design">
                                  <option>Sub Brokers 0</option>
                              </select>
                          </div>
                           <div class="nav-design">
                              <select class="select-design">
                                  <option>Brokers 0</option>
                              </select>
                          </div>
                         
                        </div>
                      
                        </div>
                        </div>
        </div>
     <!--------Nav only for Vendor------->   
        <div class="uk-container uk-margin" id="id01">
              
        <div class="uk-grid uk-flex notice uk-flex-center">
          
              <div class="uk-width-2-3@m uk-width-2-3@l">
               <h5>Action needed</h5>
               <p>Please Complete your profile for inhance your upcoming leads</p>
               

           </div> 
            <div class="uk-width-1-3@m uk-width-1-3@l">
              <a href="updateProfile" class="uk-button uk-button-default">Update Your Profile</a>
               
  <span onclick="document.getElementById('id01').style.display='none'" class="uk-button btn-top">&times;</span>
           </div> 
           </div> 
           </div> 
           
        <!---------NOTICE------->    
        
        
        
       
       
         <div class="uk-container uk-margin" >
        <div class="uk-grid uk-flex ">
           
             
              <div class="uk-width-1-1@m uk-width-2-3@l grid-match">
                <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-large uk-flex" data-uk-grid>
        
        
        
       <?php
       $x=1;
       while($x<=5){
           echo' 
       

        
        <div style="padding:10px; ">
        <div  class="box-design">
       <div class="uk-card uk-card-body uk-card-default">
          <h3 class="uk-card-title"> Tutorials and Training</h3>
          <p>Learn how to connect user</p>
          </div>
          <div>
          <img src="https://m.media-amazon.com/images/G/01/NSS/SMART/HP2.0/addaproduct-small._TTW_.png">
          </div>
           <div class="card-footer">Visit Brokers FAQs</div>
           
          
                      </div> 

           </div> 
       
      
     ';
       $x++;
       } ?>
     
      
       
      
       
       </div>
       
       </div>
       
         <div class="uk-width-1-1@m uk-width-1-3@l grid-match" style="padding:10px;">
             
             <div style="padding:10px;border:1px solid #dddddd;">
                 <h4 class="uk-card-title">Notification</h4>
                
               
                     <ul  class="uk-list uk-list-divider">
                         
                    <?php
                      foreach($vendorConnection as $vendor_connection){
                        // echo  $vendor_connection->userName; 
                     ?>   
                        <li><a href="<?php echo $vendor_connection->userEmail; ?>"><?php echo $vendor_connection->userName; ?></a> Want to Connection with you</li>
                        
                        
                       <?php 
                      }
                    ?>
                    
                    
                         </ul>
              
                 
             </div>
             
           
             </div>
       
       
       </div>
       
       
       
       </div>
     
       
       
       
       
       
       
       
       
        
        
        
        </main>
        
             
      

    
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/blockit.min.js"></script>
    <script src="js/config-theme.js"></script>
</body>

</html>
    
      
 