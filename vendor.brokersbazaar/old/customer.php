<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BootstrapDash Wizard</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bd-wizard.css">
</head>

   <body> 
    <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<!--
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
-->
              <li class="nav-item">
              <a class="nav-link" href="index.php">Vendor Page</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
       
   <main class="d-flex align-items-center">    
     
  <div class="container">
        <div id="wizard">
          
            
            <h3>Step 1 Title</h3>
          <section>
           <h5 class="bd-wizard-step-title">Step 1</h5>
              <h5 class="">Vendor Information</h5>
           <h2 class="section-heading">Fill Personal Information</h2>
<!--           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>-->
           <div class="purpose-radios-wrapper">
         <form name="contact-form"  action="send.php" method="POST" class="">     
          <div class="form-group">
                <label class="sr-only" for="">Full Name </label>
                <input type="text" name="name" class="md-input form-control" id="cofounder3" placeholder="Name">
                <div class="help-block with-errors"></div>
              </div>
             
              <div class="form-group">
                <label class="sr-only" for="email">Email</label>
                <input type="email" name="email" class="md-input form-control" id="email3" placeholder="Email*" required data-error="Please Enter Valid Email">
                <div class="help-block with-errors"></div>
              </div>
               <div class="form-group">
                <label class="sr-only" for="phone">Mobile</label>
                <input type="text" name="mobile" class="md-input form-control" id="Mobile3" placeholder="Mobile*" required data-error="Please Enter Valid mobile">
                <div class="help-block with-errors"></div>
              </div>
             
              <div class="form-group">
                <label class="sr-only" for="message">Your Message </label>
                <textarea name="message" class="md-textarea  form-control" id="message3" rows="7" placeholder="message" required data-error="Please, Provide Product Summery"></textarea>
          
              </div>
            
            <div class="form-group">
                <label class="sr-only" for="">State</label>
                <input type="text" name="state" class="md-input form-control" id="cofounder3" placeholder="State">
                <div class="help-block with-errors"></div>
               </div>
               
              </form> 
               
           </div>
              
              
              
          </section>
            
           
            
        </div>
    </div>  
    
    

                
              
   
       </main>
    
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.steps.min.js"></script>
  <script src="assets/js/bd-wizard.js"></script>
</body>
</html>
  
    
    