

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
    
    
     <div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center"  style="background-image: url(http://demoaanaxagorasr.net/broker/brokerwhite/img/in-liquid-5-bg.png);  background-size: auto;  background-position: bottom;" data-uk-img>
            
<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match radio-toolbar" uk-grid>
   <?php foreach($packages as $package){?>
    <!--<div>-->
    <!--    <div class="uk-card uk-card-default uk-card-body">-->
    <!--        <h3 class="uk-card-title">Basic</h3>-->
    <!--        <p>-->
    <!--        • Free-->
    <!--        </p>-->
    <!--         <input type="radio" id="radioApple" name="radioFruit" value="apple" checked>-->
    <!--         <label for="radioApple">Select</label>-->
    <!--    </div>-->
    <!--</div>-->
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"><?php echo $package->pack_name;?></h3>
            <p>
            • Rs. <?php echo $package->pack_price;?>
            </p>
            <p><?php echo $package->pack_discription;?>	</p>
            <?php if($package->pack_price==0){ ?><button><a href="<?php echo base_url();?>">Select</a></button>
            <?php }else {?>
              <form action="<?php echo base_url();?>Vendor/placeOrder" method="post">
                 <input type="hidden" value="<?php echo $package->pack_price; ?>" name="total">
    <input type="submit" value="Select">
    </form>
    <?php }?>
        </div>
    </div>
    <?php }?>
    <!--<div>-->
    <!--    <div class="uk-card uk-card-default uk-card-body">-->
    <!--        <h3 class="uk-card-title">VIP</h3>-->
    <!--        <p>-->
            
    <!--        • Rs. 100-->
    <!--        </p>-->
             <!--<input type="radio" id="radioOrange" name="radioFruit" value="orange">-->
    <!--         <form action="<?php //echo base_url();?>Vendor/placeOrder" method="post">-->
    <!--             <input type="hidden" value="100" name="total">-->
    <!--<input type="submit" value="Select">-->
    <!--</form>-->
    <!--    </div>-->
        

        
        
    <!--</div>-->
        
</div>
<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match radio-toolbar" uk-grid>
    <div></div>
    <div></div>
    <div>
 <!--<a href="<?php //echo base_url()?>" class="uk-button uk-button-primary">Next</a>-->
 
 </div>
 
</div>
</div>
<Style>
    .radio-toolbar {
  /*margin: 10px;*/
}

.radio-toolbar input[type="radio"] {
  opacity: 0;
  position: fixed;
  width: 0;
}

.radio-toolbar label {
    display: inline-block;
    background-color: #fff;
    padding: 10px 20px;
    font-family: sans-serif, Arial;
    font-size: 16px;
    border: 2px solid #444;
    border-radius: 4px;
}

.radio-toolbar label:hover {
  background-color: #acebff;
}

.radio-toolbar input[type="radio"]:focus + label {
    border: 2px dashed #444;
}

.radio-toolbar input[type="radio"]:checked + label {
    background-color: #98dfff;
    border-color: #11bbff;
}

</Style>



   

   

