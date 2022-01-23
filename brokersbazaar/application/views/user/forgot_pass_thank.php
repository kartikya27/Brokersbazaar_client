

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>login_css/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>login_css/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>login_css/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>login_css/css/style.css">



<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>



    <title>Forgot Password</title>
    
    <style>
        .uk-navbar-dropdown{
            background:#01579b;
            color:;
        }
        .uk-navbar-dropdown-nav>li>a{
            color:#ffffff;
        }
        .uk-navbar-dropdown-nav>li>a:focus, .uk-navbar-dropdown-nav>li>a:hover{
            color:#b8e0fc;
        }
        p{
            color:#000;
        }
        
        
         .form-group input{
        font-size:14px !important;
        color:#515151 !important;
    }
    
        
   </style>
    
    
  </head>
  <body>
  

  
  <div class="content" style="padding-top:2rem;background-image: url(<?php echo base_url() ?>img/1globe.png); background-repeat:no-repeat;background-position:bottom;background-attachment:fixed;">
    <div class="container">
        
         
        
      <div class="row">
         <div class="col-md-3 contents">
         <p>
                    <a href="<?php echo base_url() ?>index" style="color:#0008ff;">
                    <span class="uk-margin-small-right" uk-icon="arrow-left"></span>Home</a></p>
                    </div>
                    
        <div class="col-md-7 contents" style="">
          <div class="row justify-content-center">
            <div class="col-md-12">
                
                  
              <div class="mb-4">
            <img style="margin:auto;display:block;" src="https://projects.letsgolive.in/brokersbazaar/img/logo.png" data-src="https://projects.letsgolive.in/brokersbazaar/img/logo.png" alt="logo" width="160" height="34" data-uk-img="">
            <h3 style="text-align:center;">Sign In</h3>
              <p class="mb-4" style="text-align:center;">Login on Brokers Bazaar using your email address</p>
            </div>
           
           
            <form action="forgotPass" method="post">
           
	            <p><?php $msg = $this->session->flashdata('msg');
	                if ($msg != ''){
	                    echo  '<h4 style="color:green;text-align:center">'.$msg.'</h4>';
	                }
	
	                ?>
	                        </p>     
                
                <a href="<?php echo base_url() ?>User/login" class="btn" style="display:block">OK</a>
            
             
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?php echo base_url();?>login_css/js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<script>
let pass="0";
let mobilenumber=0;
function sendOtp(){
    
    
   $(document).ready(function(){
        mobilenumber=$("#e_m").val();
     $.ajax({
        url:"otp_Process",
        method:"post",
        data:{mobilenumber:mobilenumber},
        success:function(result){
           if(result=='0')
           {
               alert('Error')
           }
           else{
               pass=result;
               alert(pass);
           }
        }
    });
   });
}
function match_otp(value){
    if(value==pass){
       // alert('loged in ');
     window.location.href="AuthloginOtp/"+mobilenumber;
    }
    // else 
   // alert('not logged in ');
}
</script>
