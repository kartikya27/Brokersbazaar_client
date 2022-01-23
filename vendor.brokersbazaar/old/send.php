<?php
include 'database.php';
session_start();
if(isset($_POST['submit'])){
    
    $name= $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['mobile'];
     $msg = $_POST['message'];
     
  $sql ="INSERT INTO user (id, name, email, phone, msg) VALUES ('0','$name','$email','$phone','$msg')";        
            
              if($con->query($sql)===TRUE){
                    $_SESSION['email'] = $email;
                if(isset($_SESSION['$email'])){
      
//                    header('location:logout.php');
    }   else    { 
                    echo '<script>alert("Successfully Registered , Thank You")</script>';
                     echo '<script>window.location="index.php"</script>';
                }

  } 
    
    
    
    
}


if(isset($_POST['submitVendor'])){
   $userID = uniqid();
    $name= $_POST['name'];
     $email = $_POST['email'];
     $company_name = $_POST['company_name'];
    $phone = $_POST['mob'];
     $Address = $_POST['Address'];
     $city = $_POST['city'];
     $pin = $_POST['pin'];
     $state = $_POST['state'];
     
  $sql ="INSERT INTO vendor (id, uniqueID,name, email, company_name, phone,Address,city,pin,state) VALUES ('0','$userID','$name','$email','$company_name','$phone','$Address','$city','$pin','$state')";        
            
              if($con->query($sql)===TRUE){
                    $_SESSION['vendorEmail'] = $email;
                if(isset($_SESSION['vendorEmail'])){
      
                    echo '<script>alert("Successfully Registered , Thank You")</script>';
                     echo '<script>window.location="details.php?user='.$userID.'"</script>';
    }   else    { 
                    
                    echo '<script>alert("Successfully Registered , Thank You")</script>';
                     echo '<script>window.location="details.php?user='.$userID.'"</script>';
                }

  }else {
           
              } 
    
    
    
    
}













if(isset($_POST['submitVendordetails'])){
    
    $name= $_POST['name'];
     $email = $_POST['email'];
     $company_name = $_POST['company_name'];
     $Address = $_POST['Address'];
     $city = $_POST['city'];
     $pin = $_POST['pin'];
     $state = $_POST['state'];
     $license = $_POST['license'];
    $gst = $_POST['gst'];
    $brokerage_commission = $_POST['brokerage_commission'];
    
     $Equity_SEBI_Registration_No= $_POST['Equity_SEBI_Registration_No'];
     $Exchange_Registration_Nos= $_POST['Exchange_Registration_Nos'];
     $NSE_TM_Code= $_POST['NSE_TM_Code'];
     $BSE_Clearing_No= $_POST['BSE_Clearing_No'];
     $MSEI_TM_Code= $_POST['MSEI_TM_Code'];
     $Clearing_No1= $_POST['Clearing_No1'];
     $MCX_TM_No= $_POST['MCX_TM_No'];
     $Clearing_No2= $_POST['Clearing_No2'];
     $NCDEX_TM_No= $_POST['NCDEX_TM_No'];
     $Clearing_No3= $_POST['Clearing_No3'];
    
     $ICEX_TM_ID= $_POST['ICEX_TM_ID'];
     $SEBI_Registration_for_DP= $_POST['SEBI_Registration_for_DP'];
    
     $NSDL_DP_ID= $_POST['NSDL_DP_ID'];
     $CDSL_DP_ID= $_POST['CDSL_DP_ID'];
    
    $SEBI_Research_Analysts_Registration_No= $_POST['SEBI_Research_Analysts_Registration_No'];
    
     $SEBI_PMS_Registration_No= $_POST['SEBI_PMS_Registration_No'];
     $CMBPID_NCL_CM= $_POST['CMBPID_NCL_CM'];
    
    
  $sqlVendor ="INSERT INTO vendor (id, name, email, company_name, Address,city,pin,state,license,gst,brokerage_commission,Equity_SEBI_Registration_No,Exchange_Registration_Nos,NSE_TM_Code,BSE_Clearing_No,MSEI_TM_Code,Clearing_No1,MCX_TM_No,Clearing_No2,NCDEX_TM_No,Clearing_No3,ICEX_TM_ID,SEBI_Registration_for_DP,NSDL_DP_ID,CDSL_DP_ID,SEBI_Research_Analysts_Registration_No,SEBI_PMS_Registration_No,CMBPID_NCL_CM) VALUES ('0','$name','$email','$company_name','$Address','$city','$pin','$state','$license','$gst','$brokerage_commission')";        
            
              if($con->query($sqlVendor)===TRUE){
                
                    $_SESSION['email'] = $email;
                if(isset($_SESSION['$email'])){
       echo 'Thank You';
//                    header('location:logout.php');
    }   else    { 
                    echo '<script>alert("Vendor Successfully Registered , Thank You")</script>';
                     echo '<script>window.location="index.php"</script>';
                }

  } else{echo "error";}
    
    
    
    
}






?>