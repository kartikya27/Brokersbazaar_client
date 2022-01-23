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

    <title>Register</title>
    
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
    </style>
    
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
<style>
    
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
            <h3 style="text-align:center;">Sign Up</h3>
              <p class="mb-4">Register on Brokers Bazaar using your email address</p>
              
              
               <?php
            $msg = $this->session->flashdata('msg');
            if($msg != ""){
                echo "<span style='color:green'>". $msg ." Click here to <a href='login'>Login</a></span>";
            }
            
            ?>
              
              
              
            </div>
            <form action="submitRegisteration" method="post">
                
                <div class="form-group first">
                <label for="Name"></label>
                <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name">
                <span style="color:red"><?php echo strip_tags(form_error('name')); ?> </span> 
              </div>
              
              <div class="form-group first">
                <label for="Phone"></label>
                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>">
             <span style="color:red"><?php echo strip_tags(form_error('phone')); ?> </span> 
              </div>
                
              <div class="form-group first">
                <label for="Emailusername"></label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
             <span style="color:red"><?php echo strip_tags(form_error('email')); ?> </span> 
              </div>
              <div class="form-group last mb-4">
                <label for="password"></label>
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
                  <span style="color:red !important"><?php echo strip_tags(form_error('password')); ?> </span> 
              </div>
              
              <div class="d-flex mb-5 align-items-center">
               
              </div>

              <input type="submit" value="Signup" class="btn text-white btn-block btn-primary" style="background-color:#29B6F6;border-color:#01579b;">
                
                <span class="d-block text-left my-4 text-muted">Already have an account Please<a href="login"> login Here</a></span>
              
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

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>