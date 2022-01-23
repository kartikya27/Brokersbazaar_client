

<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Vendor Registration</title>

<style>
body{
   background: #fff;
   background-image: none;  
   font-family:Inter, sans-serif;
}

  h1,h2{
       font-weight:700;
       color:#01579b;
        font-family:Inter, sans-serif;
   } 


</style>

</head>

<body>

    
    
     <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center"  style="background-image: url(http://demoaanaxagorasr.net/broker/brokerwhite/img/in-liquid-5-bg.png);  background-size: auto;  background-position: bottom;" data-uk-img>
           
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-1@m uk-inline">
                        <div class="uk-grid-large uk-flex uk-flex-middle " data-uk-grid>
                            
                            <div class="uk-width-1-2@m">
                                <span class="uk-label in-liquid-label uk-margin-bottom">Brokers Bazaar Vender Registration Here</span>
                                <h1 class="uk-margin-remove">World class platform trade without a doubt.</h1>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                               
                               
                                   
                                    
                            </div>
                            
                             <div class="uk-width-1-2@m">
                                 
                                 
                               
                        <!--<h2 class="uk-margin-remove">Hello !</h2>          -->
                                 
                      <!--<form action="Vendor/ToRegister" method="POST">           -->
                           <?php      
                           if(!empty($vendor)){
                           echo ' 
                             
                            <div class="uk-child-width-expand@s  uk-width-1-1@m" uk-grid style="padding:50px 0px; margin-left:0;">
                            <div style="padding:0px;">
                           <a href="Dashboard/index"><button type="button"  class="uk-button uk-button-small uk-button-primary uk-border-rounded" style="padding:5px 25px">Go to Dashboard<i class="fas fa-angle-right uk-margin-small-left">
                           </i></button></a>
                           </div></div>
                           '; 
                           
                           }else{    
                            
                             echo ' 
                              
                              
                               <h2 class="uk-margin-remove">Vendor Registration</h2>  
                              
                              
                           <form id="newvendorform" action="'.base_url().'Vendor/verifyOTP" method="POST"style="">
                              
                         <div class="uk-child-width-expand@s  uk-width-1-1@m" uk-grid style="padding:0px 40px ; margin-left:0;" id="otphide">
                        
    <div style="padding:0px; " class="uk-child-width-expand@s  uk-width-1-1@m" uk-grid>
    <div style="padding:10px 5px 10px 0px;" class="uk-width-1-2@m">
    
      <input name="email" type="email" placeholder="Enter Your Email" value="'.set_value('email').'"  style="border-radius: 0px !important;background:transparent; width:100%" id="useremail_input">
 
 </div>
    <div style="padding:10px 0px; display:none;" id="otp" class="uk-width-1-2@m">
   
      <input  name="otp" type="text" placeholder="Enter OTP"   style="border-radius: 0px !important; background:transparent; width:100%" id="inputOtp" >
      </div>
  
       </div>
         <div   style="padding:0px; margin-top:5px; width:30% " class="uk-child-width-expand@s  uk-width-1-2@m" uk-grid>
       
         <button  type="submit" id="clickbutton"  class="uk-button uk-button-small uk-button-primary uk-border-rounded" style="padding:5px 25px">Verify Email</button>
         <button  type="button" id="clickotp"  class="uk-button uk-button-small uk-button-primary uk-border-rounded" style="padding:5px 25px; display:none">Submit Otp<i class="fas fa-angle-right uk-margin-small-left"></i></button>
    
                    </div>       </div>       
                      <span id="msg1" style="color:red;">'.strip_tags(form_error('email')).'</span>
              
                     <span id="msg" style="color:green"></span>
            <br>
             
                ';
                    }
                ?>
                
              
                <?php
                $msg = $this->session->flashdata('msg');
             if ($msg != ''){
	                    echo  '<span id="msg" style="color:green">'.$msg.'</span>';
	                     echo '<script>
	                    document.querySelector("#clickotp").style.display="inline-block";
	                    document.querySelector("#clickbutton").style.display="none";
	                     document.querySelector("#otp").style.display="block";
	                    
	                    </script>';
	                }else if($msg != '' && $msg == 'We have sent an OTP to your email.' ){
	                    echo '<script>
	                    document.querySelector("#clickotp").style.display="inline-block";
	                    </script>';
	                }
                
                ?>
         </form>       
        
                </div> 
          
                
                
                            </div>
                 
  
                           
                            
                                        
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    
    
    
 





  <div class=" uk-section-muted  in-liquid-3 uk-background-contain uk-background-center-center" style="margin-top:30px;margin-bottom:50px; background:#fff;" data-uk-img id="Fee-Structure">
            <div class="uk-container">
<div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-6@m uk-inline">
                        <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-1@m uk-text-center uk-margin-medium-top" data-uk-grid>
                            <div>
                                <h2 class="uk-margin-small-top uk-margin-remove-bottom">Brokersbazaar's Stocke Fee Structure</h2>
                                <p class="uk-text-small uk-margin-remove-top">With the most competitive rate card in the industry, transparent delivery charges based on the weight and dimensions of your products and a small fixed fee, selling on Brokers Bazaar is highly cost-efficient.</p>
                            </div>
                            
                           
                           
                        </div>
                        
                        
              <div class="uk-container" style="margin-top:20px; background:#f8f8f8" >           
                         <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
      
       <?php
        
        $x= 1;
        
        $title=['Commission fee','Fixed fee'];
        $text=['Percentage of Order item value ( depends on category & sub-category','A small fee that Flipkart charges on all transactions'];
        
        while($x <= 2){
           
            echo ' <div>
        <div class="uk-card  uk-card-body uk-text-center">
        
        <div class="" >
        <img width="10%" style="display:block;margin:auto;"  src="https://cdn3.iconfinder.com/data/icons/flat-pro-basic-set-2-1/32/tag-blue-512.png">
    </div>
        
            <h3 class="uk-card-title"> '.$title[$x-1].' </h3>
            <p>'.$text[$x-1].'</p>
             
        </div>
        
    </div>';
            
            
            $x++;
        }
        
        ?> 
        
        
        
        
</div></div>
                        
                   
                    </div>
                </div>
                    
                    </div>
                </div>
<!--------------End Fees Structure--------------->
<!---------------Services Start------------------>

<div id="Services" class=" uk-section-muted  in-liquid-3 uk-background-contain uk-background-center-center" style="margin-top:30px;margin-bottom:50px; background:#fff;" data-uk-img id="Fee-Structure">
            <div class="uk-container">
<div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-6@m uk-inline">
                        <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-1@m uk-text-center uk-margin-medium-top" data-uk-grid>
                            <div>
                                <h2 class="uk-margin-small-top uk-margin-remove-bottom">Services</h2>
                                <p class="uk-text-small uk-margin-remove-top"> Trading on Brokers Bazaar is highly cost-efficient.</p>
                            </div>
                            
                           
                           
                        </div>
                        
                        
               <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
      
       <?php
        
        $x= 1;
        
        $title=['Stock Brokers','Loans','Education Loans','Mutial Funds','Insurance','Certificate','Stock Brokers','Loans','Mutial Funds'];
        
        
        while($x <= 4){
           
            echo ' <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"> '.$title[$x-1].' </h3>
            <p>From 50+ options, choose a card matching your lifestyle & needs</p>
             <div class="" >
        <img width="70%" align="right" src="https://projects.letsgolive.in/brokersbazaar/img/logo.png">
    </div>
        </div>
        
    </div>';
            
            
            $x++;
        }
        
        ?> 
        
        
        
        
</div>
                        
                   
                    </div>
                </div>
                    
                    </div>
                </div>

<!-----------Service End---------------->

  <div id="FAQs" class=" uk-section-muted  in-liquid-3 uk-background-contain uk-background-center-center" style="margin-top:30px; background:#fff;" data-uk-img id="Fee-Structure">
            <div class="uk-container">

  <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-1@m uk-text-center uk-margin-medium-top" data-uk-grid>
                            <div>
                                <h2 class="uk-margin-small-top uk-margin-remove-bottom">Brokersbazaar's FAQs</h2>
</div>
                            
                           
                           
                        </div>
<div class="uk-margin-medium-top">
    <ul class="uk-child-width-expand" uk-tab>
        <li class="uk-active"><a href="#Started">Getting Started</a></li>
        <li><a href="#Pricing-and-Payments">Pricing and Payments</a></li>
        <li><a href="#">Listings and Catalog</a></li>
       
    </ul>
    
  <ul class="uk-switcher uk-margin">
   
    <li>
        
        <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-1@m  uk-margin-medium-top" data-uk-grid>
           
       
       
       
       
    <ul uk-accordion>
         <!--<li class="uk-open">-->
    <li >
        <a class="uk-accordion-title" href="#">Why Should I Trade on BrokersBazaar?</a>
        <div class="uk-accordion-content">
            <p>Dummy Text about Faqs</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Who can Trade on BrokersBazaar?</a>
        <div class="uk-accordion-content">
            <p>Dummy Text about Faqs</p>
        </div>
    </li>
   
</ul>   
       
       
   
        
    </div>
    
 
        
        </li>
        
        
        
        
        
    <li>
        
       <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-1@m  uk-margin-medium-top" data-uk-grid>
           
       
       
       
       
    <ul uk-accordion>
         <!--<li class="uk-open">-->
    <li >
        <a class="uk-accordion-title" href="#">Who decides the price of the Stocks?</a>
        <div class="uk-accordion-content">
            <p>Dummy Text about Faqs</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">What are the fees charged?</a>
        <div class="uk-accordion-content">
            <p>Dummy Text about Faqs</p>
        </div>
    </li>
   
</ul>   
       
       
   
        
    </div>
        </li>
    <li>
        
         <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-1@m  uk-margin-medium-top" data-uk-grid>
           
       
       
       
       
    <ul uk-accordion>
         <!--<li class="uk-open">-->
    <li >
        <a class="uk-accordion-title" href="#">How does a catalog partner help me?</a>
        <div class="uk-accordion-content">
            <p>Dummy Text about Faqs</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Will I get charged for listing Broker on BrokersBazaar?</a>
        <div class="uk-accordion-content">
            <p>Dummy Text about Faqs</p>
        </div>
    </li>
   
</ul>   
       
       
   
        
    </div>
        
        </li>
</ul>
     
    
</div>



</div></div>


<script>
$('#clickotp').click(function(){
               let otp = $('#inputOtp').val();
                 let email=$('#useremail_input').val();
               
               $.ajax({
        url:"<?php echo base_url(); ?>Vendor/verify_otp",
        method:"POST",
        data:{email:email,otp:otp},
        success:function(data){
            console.log(data);
            if(data.substring(0,4) == "Done"){
                // document.getElementById('msg1').innerHTML = "OTP is  matched.";
                 window.location.href="<?php echo base_url();?>Vendor/mobile_verify";
            }else {
                document.getElementById('msg1').innerHTML = "OTP is not matched.";
            }
           
        }
               });
               
               
            });
    
    
    

</script>





















