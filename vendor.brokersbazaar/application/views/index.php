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
        border:none;
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
        <div class="col-xl-4 col-lg-4 col-md-4 col-12 text-center" style="margin:auto;">
        
      <h2 style="text-align: left;">  Grow your business.
          <br>
          Sell on BrokersBazaar.<br>
Give a kickstart to your business.<br><br>
Register Now<br><br>
It's quick and easy.
        </h2>
        
      
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-12 text-center">
          
           
            <div class="card" style="background:#ffffffa1;">
                <h5 class="text-center mb-4">Vendor Registration Form</h5>
                <form class="form-card" action="registration" method="post">
                    
                    
                    
                    <div class="row justify-content-between text-left">
                        
                         <div class=" col-sm-6 flex-column  padding" style="">
                           
                       <select name="broker_type" id="mainbroker" required class="uk-select">
                            <option hidden>Please Selcet..</option>
                           <option value="Wealth Manager">Wealth Manager</option>
                           <option value="Broker">Broker</option>
                           <option value="Sub-Broker">Sub-Broker</option>
                       </select>
                            
                            </div>
                        
                        
                        
                          <div class=" col-sm-6 flex-column  padding" style="">
                           
                       <select style="display:none" name="broker_name" id="sub" required class="uk-select">
                            <option hidden>Selcet Your Broker</option>
                           <option>Broker 1</option>
                           <option>Broker 2</option>
                           <option>Broker 3</option>
                       </select>
                          <p id="sub"></p>  
                            </div>
                        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
 <script>
     $(document).ready(function(){
         
 $("#mainbroker").change(function() {
     let option =  $('#mainbroker').val();
     //alert(option);
 
if(option=='Sub-Broker'){
   document.getElementById('sub').style.display = "block";
}else{
     document.getElementById('sub').style.display = "none";
}

 

 });
});
     
     
 </script>
 
 
                        
                        
                        
                        
                        
                        </div>
                        
                          <div class="row justify-content-between text-left">
                        
                        <div class="form-group col-sm-6 flex-column d-flex padding" style="">
                            <div class="custome_input">
                        <!--<label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> -->
                            <input type="text" name="name"  id="cofounder3" placeholder="Name" required> </div></div>
                        
                        <div class="form-group col-sm-6 flex-column d-flex padding"> 
                        <div class="custome_input">
                        <!--<label class="form-control-label px-3">Company name<span class="text-danger"> *</span></label>  -->
                        <input type="text" name="company_name"  id="cofounder3" placeholder="Company Name" required> </div></div>
                        
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex padding"> 
                         <div class="custome_input">
                             
                        <!--<label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> -->
                            <input type="email" name="email"  id="email3" value="<?php echo $vendorEmail; ?>" readonly  data-error="Please Enter Valid Email" required>
                        </div>
                        </div>
                        
                    <div class="form-group col-sm-6 flex-column d-flex padding">
                         <div class="custome_input">
                         <!--<label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> -->
                         <input type="password" id="password" name="pass" placeholder="password"  required> </div>
                         </div>
                    </div>
                    <div class="row justify-content-between text-left">
                         <div class="form-group col-sm-6 flex-column d-flex padding">
                         <div class="custome_input">
                         <!--<label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> -->
                         <input type="text" id="mob" name="mob" placeholder="Phone Number" value="<?php echo $vendorPhone; ?>"  required readonly> </div>
                         </div>
                   
                    <div class="form-group col-sm-6 flex-column d-flex padding">  
                         <div class="custome_input">
                        <!--<label class="form-control-label px-3" for="">Address</label>-->
                <input type="text" name="Address"  id="cofounder3" placeholder="Address" required> </div>
                </div>
                    
                    
                    </div>
                    
                  
                    
                    
                    <div class="row justify-content-between text-left">
                        
                        <div class="form-group col-sm-6 flex-column d-flex padding"> 
                      <div class="custome_input">
                     <!--<label class="form-control-label px-3" for="">City</label>-->
                         <input type="text" name="city"  id="cofounder3" placeholder="City" required></div>
                         </div>
                   
                   
                     <div class="form-group col-6 flex-column d-flex padding"> 
                         <div class="custome_input">
                        <!--<label class="form-control-label px-3">State<span class="text-danger"> *</span></label> >-->
                        <input type="text" name="state"  id="cofounder3" placeholder="State" required> </div>
                        </div>
                    
                    
                    </div>
                     <div class="row justify-content-end">
                      <div class="form-group col-6 flex-column d-flex padding"> 
                      <div class="custome_input" style="display: flex">
                     <!--<label class="form-control-label px-3" for="">PIN</label>-->
                <input type="text" name="pin"  id="cofounder3" placeholder="Pin" required> </div>
                </div>
                    
                   
                        
                        
                        
                        <div class="form-group col-sm-6"> <button type="submit" name="submitVendor" class="btn-block btn-primary">Next</button> </div>
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
