<?php

include 'database.php';
session_start();
$VendorUser= $_SESSION['vendorEmail'];




?>





<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="js" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">


</head>



<style>

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background: #94d3ff;
/*    background-image: url("https://i.imgur.com/GMmCQHC.png");*/
    background-repeat: no-repeat;
    background-size: 100% 100%
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

</style>

<body>
    <div>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container">
    <a class="navbar-brand" href="#">BrokarBazar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">User - <?php echo $VendorUser; ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>   
    
<div class="container px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-4 col-12 text-center" style="margin:auto;">
        
      <h2 style="text-align: left;">  Grow your business.
          <br>
          Sell on BrokarBazar.<br>
Give a kickstart to your business.<br><br>
Register Now<br><br>
It's quick and easy.
        </h2>
        
        
        
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-12 text-center">
          
           
            <div class="card">
                <h5 class="text-center mb-4">Vendor Registraion Form</h5>
                <form class="form-card" action="send.php" method="post">
                    <div class="row justify-content-between text-left">
                        
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> 
                            <input type="text" name="name"  id="cofounder3" placeholder="Name"> </div>
                        
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Company name<span class="text-danger"> *</span></label>  <input type="text" name="company_name"  id="cofounder3" placeholder="Company Name"> </div>
                        
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> 
                            <input type="email" name="email"  id="email3" placeholder="Email*" required data-error="Please Enter Valid Email">
                        </div>
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="Phone Number" onblur="validate(4)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">  <label class="form-control-label px-3" for="">Address</label>
                <input type="text" name="Address"  id="cofounder3" placeholder="Address"> </div>
                   
                     <div class="form-group col-sm-6 flex-column d-flex"> 
                     <label class="form-control-label px-3" for="">City</label>
                         <input type="text" name="city"  id="cofounder3" placeholder="City"></div>
                    
                    
                    </div>
                    
                  
                    
                    
                    <div class="row justify-content-between text-left">
                        
                        <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">State<span class="text-danger"> *</span></label>  <input type="text" name="state"  id="cofounder3" placeholder="State"> </div>
                   
                     <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3" for="">PIN</label>
                <input type="text" name="pin"  id="cofounder3" placeholder="Pin"> </div>
                    
                    
                    </div>
                    
                    
                    
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" name="submitVendor" class="btn-block btn-primary">Submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<Script>

function validate(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");
v5 = document.getElementById("job");
v6 = document.getElementById("ans");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;
flag5 = true;
flag6 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}
if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}
if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}
if(val>=5 || val==0) {
if(v5.value == "") {
v5.style.borderColor = "red";
flag5 = false;
}
else {
v5.style.borderColor = "green";
flag5 = true;
}
}
if(val>=6 || val==0) {
if(v6.value == "") {
v6.style.borderColor = "red";
flag6 = false;
}
else {
v6.style.borderColor = "green";
flag6 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

return flag;
}


</Script>
