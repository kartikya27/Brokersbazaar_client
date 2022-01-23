<head>
   <title>
       Vendor Details | Brokers Bazaar
   </title>       
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <style>
      .sr-only{
          display:contents;
      }
      p{
          margin-bottom:0px;
          display:flex;
          align-items:center
      }
      .checkbox{
              width: 20px;
    box-sizing: border-box;
    padding: 0;
    height: 20px;
    margin: 0 10px;
      }
      .card{
          padding: 30px 15px;
      }
  </style>
  
    
</head>


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
        <div class="col-xl-8 col-lg-8 col-md-8 col-12 ">
          
           
            <div class="card">
                 <?php
            
           
             //echo $this->session->userdata('VendorID');
                
            ?>
<!--        <label class="form-control-label px-3">-->

                <h5 class="text-center mb-4">Vendor Company Details</h5>
                
                <!--<p>Please Select Details (Optional)</p>-->
            
                

                <form class="form-card" action="<?php echo base_url();?>Vendor/details" method="post">
                    <div class="row justify-content-between text-left">
                       
                        
                        <div class="form-group col-sm-6 flex-column d-flex">  <label class="sr-only" for="">License no.* </label>
                             <input type="text" name="license" class="md-input form-control" id="cofounder3" placeholder="License no. *" required> </div>
                        
                        <div class="form-group col-sm-6 flex-column d-flex">  <label class="sr-only" for="">Brokerage Commission*</label>
                <input type="text" name="brokerage_commission" class="md-input form-control" id="cofounder3" placeholder="Brokerage Commission *" required>
                        </div>
                        
                   
                        
                       
                    <div class="form-group col-sm-6 flex-column d-flex">  
                    <label class="sr-only" for="">Equity SEBI Registration No*</label>
                <input type="text" name="Equity_SEBI_Registration_No" class="md-input form-control" id="cofounder3" placeholder="Equity SEBI Registration No *" required> </div>
                    
                    <!---Extra Div---> <div class="form-group col-sm-6 flex-column d-flex"></div>
                    <div class="form-group col-sm-12 flex-column d-flex">
                    <span>* Selcet options to enter corresponding details</span></div>
                    <!--
                     <div class="form-group col-sm-6 flex-column d-flex" > 
                   <p>  <input type="checkbox" id="gst" onclick="gst_f()" class="checkbox"> 
                    
                <input type="text" name="gst" class="md-input form-control" placeholder="GST no." disabled id="gst_in"> 
               </p> </div>-->
                    
                   
                        <div class="form-group col-sm-6 flex-column d-flex" > 
                        <!--<label class="sr-only" for="">Exchange Registration Nos.: </label>-->
                        <p>
                        <input class="checkbox" type="checkbox" id="exc_r" onclick="exc_r_f()">
                <input type="text" name="Exchange_Registration_Nos" class="md-input form-control" disabled  id="exc_r_in" placeholder="Exchange Registration Nos"> 
                </p>
                </div>
                   
                   
                      <div class="form-group col-6 flex-column d-flex">    
                   <p>   <input class="checkbox" type="checkbox" id="bse_cl" onclick="bse_cl_f()">
                <input type="text" name="BSE_Clearing_No" class="md-input form-control"  disabled id="bse_cl_in" placeholder="BSE Clearing No">
                </p>
                </div>
                    
                   
                   
                     <div class="form-group col-sm-6 flex-column d-flex" > 
                     <p>
                      <input class="checkbox" type="checkbox" id="nsetm" onclick="nsetm_f()">
                <input type="text" name="NSE_TM_CODE" class="md-input form-control" disabled id="nsetm_in" placeholder="NSE TM Code">
                </p>
                </div>
                    
                    
              
                        
                        <div class="form-group col-6 flex-column d-flex" >   
                       <p><input class="checkbox" type="checkbox" id="clr_no" onclick="clr_no_f()">
                <input type="text" name="NSE_clr_no" class="md-input form-control" disabled id="clr_no_in" placeholder="NSE TM Clearing No">
                </p>
                </div>
                   
                  
                    
                   
                        
                        <div class="form-group col-6 flex-column d-flex" >   
                       <p> <input class="checkbox" type="checkbox" id="msei" onclick="msei_f()">
                <input type="text" name="MSEI_TM_Code" class="md-input form-control" disabled id="msei_in" placeholder="MSEI TM Code"></p> </div>
                   
                     <div class="form-group col-6 flex-column d-flex" >    
                   <p>  <input class="checkbox" type="checkbox" id="msei_clr" onclick="msei_clr_f()">
                <input type="text" name="Clearing_No" class="md-input form-control" disabled id="msei_clr_in" placeholder="MSEI TM Clearing No"></p> </div>
                    
                    
                        
                        <div class="form-group col-6 flex-column d-flex" >   
                      <p>   <input class="checkbox" type="checkbox" id="mcxtm" onclick="mcxtm_f()">
                <input type="text" name="MCX_TM_No" class="md-input form-control" disabled id="mcxtm_in" placeholder="MCX TM No"></p></div>
                   
                     <div class="form-group col-6 flex-column d-flex" >    
                    <p> <input class="checkbox" type="checkbox" id="mcx_clr" onclick="mcx_clr_f()">
                <input type="text" name="mcx_Clearing_No" class="md-input form-control" disabled id="mcx_clr_in" placeholder="Clearing No"> </p></div>
                    
                   
                        
                        <div class="form-group col-6 flex-column d-flex" >  
                        <p> <input class="checkbox" type="checkbox" id="ncdex" onclick="ncdex_f()">
                <input type="text" name="NCDEX_TM_No" class="md-input form-control" disabled id="ncdex_in" placeholder="NCDEX TM No"></p></div>
                   
                     <div class="form-group col-6 flex-column d-flex" >   
                    <p>  <input class="checkbox" type="checkbox" id="ncdex_cl" onclick="ncdex_cl_f()">
                <input type="text" name="ncdx_Clearing_No" class="md-input form-control" disabled id="ncdex_cl_in" placeholder="Clearing No"></p> </div>
                    
                   
                        
                        <div class="form-group col-6 flex-column d-flex" >  
                       <p> <input class="checkbox" type="checkbox" id="icex" onclick="icex_f()">
                <input type="text" name="ICEX_TM_ID" class="md-input form-control" disabled id="icex_in" placeholder="ICEX TM ID"></p></div>
                   
                     <div class="form-group col-6 flex-column d-flex" >     
                   <p>  <input class="checkbox" type="checkbox" id="sebi_r_dp" onclick="sebi_r_dp_f()">
                <input type="text" name="SEBI_Registration_for_DP" class="md-input form-control" disabled id="sebi_r_dp_in" placeholder="SEBI Registration for DP"> </p></div>
                    
                   
                        
                        <div class="form-group col-6 flex-column d-flex" >   
                     <p>  <input class="checkbox" type="checkbox" id="nsdl" onclick="nsdl_f()">
                <input type="text" name="NSDL_DP_ID" class="md-input form-control" disabled id="nsdl_in" placeholder="NSDL- DP ID"></p></div>
                   
                     <div class="form-group col-6 flex-column d-flex" >    
                   <p> <input class="checkbox" type="checkbox" id="cdsl" onclick="cdsl_f()">
                <input type="text" name="CDSL_DP_ID" class="md-input form-control" disabled id="cdsl_in" placeholder="CDSL DP ID"></p> </div>
                    
                    
                    
                        
                        <div class="form-group col-6 flex-column d-flex" >  
                       <p> <input class="checkbox" type="checkbox" id="sebi_anyl" onclick="sebi_anyl_f()">
                <input type="text" name="SEBI_Research_Analysts_No" class="md-input form-control" disabled id="sebi_anyl_in" placeholder="SEBI Research Analysts Registration No"></p></div>
                   
                    <div class="form-group col-6 flex-column d-flex" >   
                 <p>  <input class="checkbox" type="checkbox" id="sebi_pms" onclick="sebi_pms_f()">
                <input type="text" name="SEBI_PMS_Registration_No" class="md-input form-control" disabled id="sebi_pms_in" placeholder="SEBI PMS Registration No"> </p></div>
                   
                         
                     
                     
                    <div class="form-group col-6 flex-column d-flex" > 
                    <p class="checkbox_in"> <input class="checkbox" type="checkbox" id="cmbpid" onclick="cmbpid_f()">
                <input type="text" name="CMBPID_NCL_CM" class="md-input form-control" style="" id="cmbpid_in" placeholder="CMBPID NCL CM" disabled>
                       </p>  </div>
                       
                       <div class="form-group col-sm-6 flex-column d-flex" > 
                   <p>  <input type="checkbox" id="gst" onclick="gst_f()" class="checkbox"> 
                    
                <input type="text" name="gst" class="md-input form-control" placeholder="GST No." disabled id="gst_in"> 
               </p> </div>
                       
                    
                    <div class="form-group col-sm-12"> <button type="submit" name="submitVendor" class="btn-block btn-primary">Submit</button> </div>
                    
                    
                    
                    </div>
                    
                    
                    
                   
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<script>
    function gst_f() {
  // Get the checkbox
  var checkBox = document.getElementById("gst");
  // Get the output text
  var text = document.getElementById("gst_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
   document.getElementById("gst_in").disabled = false ;
  } else {
    document.getElementById("gst_in").disabled = true;
  }
}

    function exc_r_f() {
  // Get the checkbox
  var checkBox = document.getElementById("exc_r");
  // Get the output text
  var text = document.getElementById("exc_r_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("exc_r_in").disabled = false ;
  } else {
    document.getElementById("exc_r_in").disabled = true;
  }
}


        function nsetm_f() {
  // Get the checkbox
  var checkBox = document.getElementById("nsetm");
  // Get the output text
  var text = document.getElementById("nsetm_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("nsetm_in").disabled = false ;
  } else {
     document.getElementById("nsetm_in").disabled = true;
  }
}
        function clr_no_f() {
  // Get the checkbox
  var checkBox = document.getElementById("clr_no");
  // Get the output text
  var text = document.getElementById("clr_no_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("clr_no_in").disabled = false ;
  } else {
    document.getElementById("clr_no_in").disabled = true;
  }
}
        function bse_cl_f() {
  // Get the checkbox
  var checkBox = document.getElementById("bse_cl");
  // Get the output text
  var text = document.getElementById("bse_cl_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
   document.getElementById("bse_cl_in").disabled = false ;
  } else {
    document.getElementById("bse_cl_in").disabled = true;
  }
}
        function msei_f() {
  // Get the checkbox
  var checkBox = document.getElementById("msei");
  // Get the output text
  var text = document.getElementById("msei_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
   document.getElementById("msei_in").disabled = false ;
  } else {
    document.getElementById("msei_in").disabled = true;
  }
}
        function msei_clr_f() {
  // Get the checkbox
  var checkBox = document.getElementById("msei_clr");
  // Get the output text
  var text = document.getElementById("msei_clr_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
   document.getElementById("msei_clr_in").disabled = false ;
  } else {
    document.getElementById("msei_clr_in").disabled = true;
  }
}
        function mcxtm_f() {
  // Get the checkbox
  var checkBox = document.getElementById("mcxtm");
  // Get the output text
  var text = document.getElementById("mcxtm_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
   document.getElementById("mcxtm_in").disabled = false ;
  } else {
    document.getElementById("mcxtm_in").disabled = true;
  }
}
        function mcx_clr_f() {
  // Get the checkbox
  var checkBox = document.getElementById("mcx_clr");
  // Get the output text
  var text = document.getElementById("mcx_clr_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("mcx_clr_in").disabled = false ;
  } else {
    document.getElementById("mcx_clr_in").disabled = true;
  }
}
        function ncdex_f() {
  // Get the checkbox
  var checkBox = document.getElementById("ncdex");
  // Get the output text
  var text = document.getElementById("ncdex_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("ncdex_in").disabled = false ;
  } else {
    document.getElementById("ncdex_in").disabled = true;
  }
}
        function ncdex_cl_f() {
  // Get the checkbox
  var checkBox = document.getElementById("ncdex_cl");
  // Get the output text
  var text = document.getElementById("ncdex_cl_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
     document.getElementById("ncdex_cl_in").disabled = false ;
  } else {
    document.getElementById("ncdex_cl_in").disabled = true;
  }
}
        function icex_f() {
  // Get the checkbox
  var checkBox = document.getElementById("icex");
  // Get the output text
  var text = document.getElementById("icex_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("icex_in").disabled = false ;
  } else {
    document.getElementById("icex_in").disabled = true;
  }
}
        function sebi_r_dp_f() {
  // Get the checkbox
  var checkBox = document.getElementById("sebi_r_dp");
  // Get the output text
  var text = document.getElementById("sebi_r_dp_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("sebi_r_dp_in").disabled = false ;
  } else {
    document.getElementById("sebi_r_dp_in").disabled = true;
  }
}
        function nsdl_f() {
  // Get the checkbox
  var checkBox = document.getElementById("nsdl");
  // Get the output text
  var text = document.getElementById("nsdl_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("nsdl_in").disabled = false ;
  } else {
    document.getElementById("nsdl_in").disabled = true;
  }
}
        function cdsl_f() {
  // Get the checkbox
  var checkBox = document.getElementById("cdsl");
  // Get the output text
  var text = document.getElementById("cdsl_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
     document.getElementById("cdsl_in").disabled = false ;
  } else {
    document.getElementById("cdsl_in").disabled = true;
  }
}
        function sebi_anyl_f() {
  // Get the checkbox
  var checkBox = document.getElementById("sebi_anyl");
  // Get the output text
  var text = document.getElementById("sebi_anyl_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
     document.getElementById("sebi_anyl_in").disabled = false ;
  } else {
    document.getElementById("sebi_anyl_in").disabled = true;
  }
}
        function sebi_pms_f() {
  // Get the checkbox
  var checkBox = document.getElementById("sebi_pms");
  // Get the output text
  var text = document.getElementById("sebi_pms_in");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    document.getElementById("sebi_pms_in").disabled = false ;
  } else {
    document.getElementById("sebi_pms_in").disabled = true;
  }
}

  function cmbpid_f() {
    var checkBox = document.getElementById("cmbpid");
    $(document).ready(function(){
    if (checkBox.checked === true){
     // $("#cmbpid_in").disabled();
   document.getElementById("cmbpid_in").disabled = false ;
  } else {
   document.getElementById("cmbpid_in").disabled = true;
  }
   return false;
  });
}




    
       
    
    
</script>


