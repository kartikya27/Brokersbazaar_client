<html>

  <head>
      
      <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>



          <!-- Icon preload -->
    <link rel="stylesheet" href="https://projects.letsgolive.in/brokersbazaar/css/style.css">
    <!-- Font preload -->
    <link rel="preload" href="https://projects.letsgolive.in/brokersbazaar/fonts/inter-v2-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://projects.letsgolive.in/brokersbazaar/fonts/inter-v2-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://projects.letsgolive.in/brokersbazaar/fonts/inter-v2-latin-700.woff2" as="font" type="font/woff2" crossorigin>
     
      
      
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="js" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">


</head>



<style>

    body{
         scroll-behavior:smooth;
}


.uk-navbar-dropdown{
    background:#01579b !important;
  
}
.uk-navbar-dropdown-nav>li>a{
      color:#fff !important;
}


body:not(.loaded){
     overflow:inherit !important;
}
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    /*background:#f8f8f8;*/
    /*background-image: url("http://demoaanaxagorasr.net/broker/brokerwhite/img/in-liquid-5-bg.png");*/
    background-repeat: no-repeat;
    /*background-size: 100% 100%*/
    background-position:center;
   
}

.card {
    padding: 30px 40px;
/*    margin-top: 60px;*/
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 2px 8px;
    border-radius: 5px !important;
/*    margin: 5px 0px;*/
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff !important
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}
    .form-control{
        height:auto;
         padding: 2px 8px;
    }
    
    
   .navbar-light .navbar-nav .nav-link{
        color:#29B6F6 !important;
       
    }
    
    .uk-navbar-container:not(.uk-navbar-transparent){
        background:#fff !important;
    }
 



</style>









<header style="padding-top:0;" id="home">
  
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container-fluid" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                    
                            <a class="uk-logo" href="https://projects.letsgolive.in/brokersbazaar/index">
                                <img src="https://projects.letsgolive.in/brokersbazaar/img/logo.png" data-src="https://projects.letsgolive.in/brokersbazaar/img/logo.png" alt="logo" width="160" height="34" data-uk-img>
                            </a>
                     
                    
                           
                        </div>
                    </div>
                   
                   
                   
                   
                         <div class="uk-navbar-right" style="width:30%">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                              <ul class="uk-navbar-nav uk-visible@m">
                           
                   
                     
                   <?php 
                           if(!empty($vendor)){
                             
                             echo '
                   
              
                            
                           <li>
                            <a href="#" style="color:#29B6F6"><i class="fas fa-user-circle" style="font-size:25px;transform:none"> </i>&nbsp; Hello '.$vendor["name"].'</a>
                           
                            <div class="uk-navbar-dropdown">
                           
                           
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                           
                                            <li><a href="#" >My Account</a></li>
                                            
                                            
                                        </ul> </div></li>
                                        
                                        <li>
                    <a href=""> Setting </a>
                
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                       <li><a href="'.base_url().'Dashboard/index" >My Profile</a></li>
                       <li><a href="'.base_url().'Dashboard/EditProfile" >Edit Profile</a></li>
                             <li><a href="#" >My Leads</a></li>
                             <li><a href="#" >Support</a></li>
                             <li><a href="'.base_url().'Dashboard/notification" >Notification</a></li>
                             <li><a href="#" >Post Enquiry</a></li>
                             <li><a href="#" >Contact</a></li>
                             <li><a href="#" >Help</a></li>
                              <li><a href="'.base_url().'logout" >logout</a></li>
                   </ul> 
                  </div>
                
                </li>
                                   
                                        
                    
                    '; 
                    
                           }
                    else {
                    
                    echo ' 
                        
                 
                           <li>
                            <a href="#" style="color:#29B6F6"><i class="fas fa-user-circle" style="font-size:25px;transform:none"></i>Login to Existing Vendor</a>
                           
                            <div class="uk-navbar-dropdown">
                           
                           
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                           
                                            <li><a href="'.base_url().'Vendor/login" >Sign In</a></li>
                                           
                                            
                                        </ul> </div></li>
                        
                       '; 
                  
                    }
                    ?>
                    
                   
                                        </ul>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </nav>
        </div>
       
    </header>





