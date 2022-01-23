<?php
if(isset($_GET['continue'])){
    $_GET['continue'];
}else{
    $_GET['continue']= '';
}

?>

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



    <title>Login</title>
    
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
            <div class="col-md-8">
                
                  
              <div class="mb-4">
            <img style="margin:auto;display:block;" src="https://projects.letsgolive.in/brokersbazaar/img/logo.png" data-src="https://projects.letsgolive.in/brokersbazaar/img/logo.png" alt="logo" width="160" height="34" data-uk-img="">
            <h3 style="text-align:center;">Sign In</h3>
              <p class="mb-4">Login on Brokers Bazaar using your email address</p>
            </div>
           
           
            <form action="Authlogin?continue=<?php echo $_GET['continue'] ?>" method="post">
           
	            <p><?php $msg = $this->session->flashdata('msg');
	                if ($msg != ''){
	                    echo  '<span style="color:red">'.$msg.'</span>';
	                }
	
	                ?>
	                        </p>     
                
                
              <div class="form-group first">
                <label for="username"></label>
                <input type="text" class="form-control" name="email" placeholder="Email/Mobile number" id="e_m">
      <span style="color:red"><?php echo strip_tags(form_error('email')); ?> </span>
              </div>
              <div class="form-group last mb-4">
                <label for="password"></label>
                <input type="password" class="form-control" name="password" placeholder="Password/Otp" onfocusout="match_otp(this.value)">
                     <span style="color:red"><?php echo strip_tags(form_error('password')); ?> </span>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator" style="background:#29B6F6;"></div>
                </label>
                <span class="ml-auto"><a href="forgot_password" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary" style="background-color:#29B6F6;border-color:#01579b;">
      <input type="button" value="Log In with otp" class="btn text-white btn-block btn-primary" id="login_otp" onclick="sendOtp()" style="background-color:#29B6F6;border-color:#01579b;">
    
                <span class="d-block text-left my-4 text-muted">Don't have account Please<a href="register"> Register Here</a></span>
         
              <span class="d-block text-left my-4 text-muted"> or sign in with</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
               
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
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
