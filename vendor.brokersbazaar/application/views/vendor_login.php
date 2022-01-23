<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>


<title>Vendor Registration</title>

<style>
    
      h1,h2,h3,h4,h5,h6{
       font-weight:700;
       color:#01579b;
        font-family:Inter, sans-serif;
   } 
    input{
        background:transparent;
        border:none !important;
        font-weight:400;
        
    }
    
    input:focus, textarea:focus{
        border:none;
    }
    
   .padding{
       padding:5px 20px;
   } 
    
  .custome_input{
      border-bottom:1px solid #c5c5c5; 
  }  

    
</style>




</head>

<body>
    
    
<div class="container px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
      
      
      

      
      
      
      
        <div class="col-xl-7 col-lg-7 col-md-7 col-12 text-center">
          
           
            <div class="row justify-content-center">
            <div class="col-md-8">
                
                  
              <div class="mb-4">
             <h3 style="text-align:center;">Sign In</h3>
              <p class="mb-4">Login on Brokers Bazaar Vendor Portal</p>
            </div>
           
           
            <form action="<?php echo base_url(); ?>Vendor/vendorLog" method="post">
           
	            <p><?php $msg = $this->session->flashdata('msg');
	                if ($msg != ''){
	                    echo  '<span style="color:red">'.$msg.'</span>';
	                }
	
	                ?>
	                        </p>     
                
                
              <div class="form-group first">
                <label for="username"></label>
                <input type="text" class="form-control" name="email" placeholder="Email" id="e_m">
      <span style="color:red"><?php echo strip_tags(form_error('email')); ?> </span>
              </div>
              <div class="form-group last mb-4">
                <label for="password"></label>
                <input type="password" class="form-control" name="password" placeholder="Password" >
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
     
                <span class="d-block text-left my-4 text-muted">Don't have account Please<a href="<?php echo base_url(); ?>index"> Register Here</a></span>
         
            
            </form>
            </div>
          </div>
            
            
            
            
            
        </div>
    </div>
</div>

</body>
