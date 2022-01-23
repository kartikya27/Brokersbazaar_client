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
              <a class="nav-link" href="customer.php">Customer Page</a>
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
            
         <div class="form-group">
                <label class="sr-only" for="">Full Name </label>
                <input type="text" name="name" class=" form-control" id="cofounder3" placeholder="Name">
                <div class="help-block with-errors"></div>
              </div>
            
            <div class="form-group">
                <label class="sr-only" for="email">Email</label>
                <input type="email" name="email" class="md-input form-control" id="email3" placeholder="Email*" required data-error="Please Enter Valid Email">
                <div class="help-block with-errors"></div>
              </div>
            
             <div class="form-group">
                <label class="sr-only" for="">Company name</label>
                <input type="text" name="company_name" class="md-input form-control" id="cofounder3" placeholder="Company Name">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label class="sr-only" for="">Address</label>
                <input type="text" name="Address" class="md-input form-control" id="cofounder3" placeholder="Address">
                <div class="help-block with-errors"></div>
              </div>
            
             <div class="form-group">
                <label class="sr-only" for="">City</label>
                <input type="text" name="city" class="md-input form-control" id="cofounder3" placeholder="City">
                <div class="help-block with-errors"></div>
              </div>
            
             <div class="form-group">
                <label class="sr-only" for="">PIN</label>
                <input type="text" name="pin" class="md-input form-control" id="cofounder3" placeholder="Pin">
                <div class="help-block with-errors"></div>
              </div>
            
            <div class="form-group">
                <label class="sr-only" for="">State</label>
                <input type="text" name="state" class="md-input form-control" id="cofounder3" placeholder="State">
                <div class="help-block with-errors"></div>
               </div>
               
               
               
           </div>
              
              
              
          </section>
            
            
            
            
          <h3>Step 2 Title</h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 2</h5>
            <h2 class="section-heading">Enter your Business Details</h2>
           <div class="form-group">
                <label class="sr-only" for="">License no.</label>
                <input type="text" name="license" class="md-input form-control" id="cofounder3" placeholder="License no.">
                <div class="help-block with-errors"></div>
              </div>
            
             <div class="form-group">
                <label class="sr-only" for="">GST</label>
                <input type="text" name="gst" class="md-input form-control" id="cofounder3" placeholder="GST no.">
                <div class="help-block with-errors"></div>
              </div>
            
             <div class="form-group">
                <label class="sr-only" for="">Brokerage Commission</label>
                <input type="text" name="brokerage_commission" class="md-input form-control" id="cofounder3" placeholder="Brokerage Commission">
                <div class="help-block with-errors"></div>
              </div>
              
              
            <div class="form-group">
                <label class="sr-only" for="">Equity SEBI Registration No</label>
                <input type="text" name="Equity_SEBI_Registration_No" class="md-input form-control" id="cofounder3" placeholder="Equity SEBI Registration No">
                <div class="help-block with-errors"></div>
              </div>
                
                 <div class="form-group">
                <label class="sr-only" for="">Exchange Registration Nos</label>
                <input type="text" name="Exchange_Registration_Nos" class="md-input form-control" id="cofounder3" placeholder="Exchange Registration Nos">
                <div class="help-block with-errors"></div>
              </div>
                  <div class="form-group">
                <label class="sr-only" for="">NSE TM Code</label>
                <input type="text" name="brokerage_commission" class="md-input form-control" id="cofounder3" placeholder="NSE TM Code">
                <div class="help-block with-errors"></div>
              </div>
                  <div class="form-group">
                <label class="sr-only" for="">Clearing No</label>
                <input type="text" name="NSE_TM_Code" class="md-input form-control" id="cofounder3" placeholder="Clearing No">
                <div class="help-block with-errors"></div>
              </div>
                 
              
              
              
              
              
              
              
          </section>
            
            
          <h3>Step 3 Title</h3>
          <section>
              <h5 class="bd-wizard-step-title">Step 3</h5>
              
               <div class="form-group">
                <label class="sr-only" for="">BSE Clearing No</label>
                <input type="text" name="BSE_Clearing_No" class="md-input form-control" id="cofounder3" placeholder="BSE Clearing No">
                <div class="help-block with-errors"></div>
              </div>
                  <div class="form-group">
                <label class="sr-only" for="">MSEI TM Code</label>
                <input type="text" name="MSEI_TM_Code" class="md-input form-control" id="cofounder3" placeholder="MSEI TM Code">
                <div class="help-block with-errors"></div>
              </div>
              
              
              
                  <div class="form-group">
                <label class="sr-only" for="">Clearing No</label>
                <input type="text" name="Clearing_No" class="md-input form-control" id="cofounder3" placeholder="Clearing No">
                <div class="help-block with-errors"></div>
              </div>
                  <div class="form-group">
                <label class="sr-only" for="">MCX TM No</label>
                <input type="text" name="MCX_TM_No" class="md-input form-control" id="cofounder3" placeholder="MCX TM No">
                <div class="help-block with-errors"></div>
              </div>
                  <div class="form-group">
                <label class="sr-only" for="">Clearing No</label>
                <input type="text" name="Clearing_No" class="md-input form-control" id="cofounder3" placeholder="Clearing No">
                <div class="help-block with-errors"></div>
              </div>
                  <div class="form-group">
                <label class="sr-only" for="">NCDEX TM No</label>
                <input type="text" name="NCDEX_TM_No" class="md-input form-control" id="cofounder3" placeholder="NCDEX TM No">
                <div class="help-block with-errors"></div>
              </div>
                  <div class="form-group">
                <label class="sr-only" for="">Clearing No</label>
                <input type="text" name="Clearing_No" class="md-input form-control" id="cofounder3" placeholder="Clearing No">
                <div class="help-block with-errors"></div>
              </div>
             
                

          </section>
            
            
             <h3>Step 4 Title</h3>
          <section>
              <h5 class="bd-wizard-step-title">Step 4</h5>
              
                <div class="form-group">
                <label class="sr-only" for="">ICEX TM ID</label>
                <input type="text" name="ICEX_TM_ID" class="md-input form-control" id="cofounder3" placeholder="ICEX TM ID">
                <div class="help-block with-errors"></div>
              </div>
                   <div class="form-group">
                <label class="sr-only" for="">SEBI Registration for DP</label>
                <input type="text" name="SEBI_Registration_for_DP" class="md-input form-control" id="cofounder3" placeholder="SEBI Registration for DP">
                <div class="help-block with-errors"></div>
              </div>
                <div class="form-group">
                <label class="sr-only" for="">NSDL- DP ID</label>
                <input type="text" name="NSDL_DP_ID" class="md-input form-control" id="cofounder3" placeholder="NSDL- DP ID">
                <div class="help-block with-errors"></div>
              </div>
                <div class="form-group">
                <label class="sr-only" for="">CDSL DP ID</label>
                <input type="text" name="CDSL_DP_ID" class="md-input form-control" id="cofounder3" placeholder="CDSL DP ID">
                <div class="help-block with-errors"></div>
              </div>
                <div class="form-group">
                <label class="sr-only" for="">SEBI Research Analysts Registration No</label>
                <input type="text" name="SEBI_Research_Analysts_Registration_No" class="md-input form-control" id="cofounder3" placeholder="SEBI Research Analysts Registration No">
                <div class="help-block with-errors"></div>
              </div>
                <div class="form-group">
                <label class="sr-only" for="">SEBI PMS Registration No</label>
                <input type="text" name="SEBI_PMS_Registration_No" class="md-input form-control" id="cofounder3" placeholder="SEBI PMS Registration No">
                <div class="help-block with-errors"></div>
              </div>
                <div class="form-group">
                <label class="sr-only" for="">CMBPID NCL CM</label>
                <input type="text" name="CMBPID_NCL_CM" class="md-input form-control" id="cofounder3" placeholder="CMBPID NCL CM">
                <div class="help-block with-errors"></div>
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
