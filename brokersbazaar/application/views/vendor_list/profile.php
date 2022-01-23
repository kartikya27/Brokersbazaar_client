 <?php $link = "https://" .$_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];?>
<head>
    <!--<meta http-equiv="refresh" content="1">-->
  
      <title> <?php echo $title; ?> - Brokers bazar  </title>
      
       <style>
        .uk-card-body{
            padding: 25px;
            background: #fff;
            box-shadow: 0 0.5px 1px 0 rgb(5 47 95 / 4%), 0 3px 4px 0 rgb(52 105 203 / 12%);
            border: 1px solid #dddddd;
            border-radius: 10px;
        }
        
        .uk-card-body:hover{
           box-shadow: 0 2px 4px 0 rgb(5 47 95 / 4%), 0 12px 16px 0 rgb(52 105 203 / 12%);
        }
        
        .uk-card-footer{
            padding:0px 5px;
        }
        
         .uk-card-body > p{
            font-size: 12px;
             text-align: left;
             margin-top: 0px;
        }
        
        
        .uk-card-title{
            margin:10px 0px;
            font-size: 14px;
            color:#01579B !important;
        }
        
        
        
        /*Only Custom Design Css Profile section*/

.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
/*END HERE*/
    </style>
      
      
</head>
    
   <!-----=======HEADER FILE=============----------------> 
  
    <main>
        
          <div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center" style="background-image: url(http://demoaanaxagorasr.net/broker/brokerwhite/img/in-liquid-3-bg.png);" data-uk-img>
            <div class="uk-container" style="">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-inline">
                        <div class="uk-grid-large uk-flex uk-flex-middle uk-flex-right" data-uk-grid>
                            <!--<div class="uk-position-top-left">-->
                            <!--    <img src="http://demoaanaxagorasr.net/broker/brokerwhite/img/in-lazy.gif" data-src="http://demoaanaxagorasr.net/broker/brokerwhite/img/in-liquid-3-mockup.png" alt="sample-images" width="650" height="469" data-uk-img>-->
                            <!--</div>-->
                            <div class="uk-width-1-1@m">
                               
                                <h2 class="uk-margin-remove">We have something for everyone, be it Brokers, Authorised Person or investors.</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<!---------Custom Design---------------------------->
   <div class="uk-section  in-liquid-1">
<div class="container uk-container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <ul class="uk-breadcrumb">
   
</ul>
          
          
          
          
        
           <ul class="uk-breadcrumb">
              <li ><a href="index">Home</a></li>
              <li ><a href="<?php echo base_url(); ?>more_vendor">All Vendors</a></li>
              <li class="#">Vendor Profile</li>
           </ul>
        
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm uk-grid uk-flex ">
            <div class="col-md-4 mb-3 uk-width-2-5@m uk-inline">
              <div class="uk-card-body uk-flex-center uk-flex">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <form action="<?php echo base_url();?>connection/" method="get">
                      <h4><?php echo $vendorName;?></h4>
                      <p class="text-secondary mb-1"><?php echo $vendorCompanyName;?></p>
                      <p class="text-muted font-size-sm"><?php echo $vendorCity;?></p>
                    <hr>
                    
                    
                    
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Service </i></h6>
                     <?php 
                     if(empty($services) ||$services==null ){
                         $s=array("Loan");
                     }
                     else{
                     $s=explode(",",$services);
                     }
                     foreach($s as $ss){
                         ?>
                      <small><input type="checkbox" value="<?php echo $ss;?>" name="services[]"> <?php echo $ss;?></small>
                     
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <?php
                     }
                     ?>
                     
                   
                    
                    
                    <div class="uk-width-1-1@m">
                        <?php 
                        if(!empty($requestedVendors)){
                        $count=0;
                        foreach($requestedVendors as $reqV){
                        if($reqV->vendorID===$vendorEmail){
                            $count++;}
                            
                        }
                            
                            if($count!==0 && $reqV->status!=='approved'){
                           ?>
                           <a class="uk-button uk-button-default uk-border-rounded " href="#">Request is pending</a>
                           <?php
                           
                        }else if($count!==0 && $reqV->status==='approved'){
                            ?>  <a class="uk-button uk-button-default uk-border-rounded " href="#">Request is approved</a>
                            <?}else{?>
                            <input type="hidden" name="vendorID" value="<?php echo $vendorID; ?>">
                            <input type="hidden" name="vendorEmail" value="<?php echo $vendorEmail; ?>">
                            <input type="hidden" name="continue" value="<?php echo $link; ?>">
                            <input type="submit" value="Want to Connect" class="uk-button uk-button-default uk-border-rounded ">
                            <!--<a class="uk-button uk-button-default uk-border-rounded " href="<?php echo base_url();?>connection/?vendorID=<?php echo $vendorID; ?>&vendorEmail=<?php echo $vendorEmail; ?>&services=<?php echo 'loan'; ?>&continue=<?php echo $link; ?>">Want to Connect<i class="fas fa-angle-right uk-margin-small-left"></i></a>-->
                       <?php }
                        
                            
                            
                        }
                            else {
                            
                        
                        ?>
                            <input type="hidden" name="vendorID" value="<?php echo $vendorID; ?>">
                            <input type="hidden" name="vendorEmail" value="<?php echo $vendorEmail; ?>">
                            <input type="hidden" name="continue" value="<?php echo $link; ?>">
                            <input type="submit" value="Want to Connect" class="uk-button uk-button-default uk-border-rounded ">
                        
                        <!--<a class="uk-button uk-button-default uk-border-rounded " href="<?php echo base_url();?>connection/?vendorID=<?php echo $vendorID; ?>&vendorEmail=<?php echo $vendorEmail; ?>&services=<?php echo 'loan'; ?>&continue=<?php echo $link; ?>">Want to Connect<i class="fas fa-angle-right uk-margin-small-left"></i></a>-->
                        <?php }?>
                    </div>  
                    </form>
                    
                    </div>
                  </div>
                </div>
              </div>
             <!-- <div class="uk-card-body uk-margin">
                  
                  
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Service </i></h6>
                      <small>Loan</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Financial Advisor</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Broker</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                   
                    
              </div>-->
            </div>
            
            <div class="col-md-8 uk-width-3-5@m uk-inline">
              

                <div class="col-sm-12 mb-3 uk-width-1-1@m uk-inline">
                  <div class="uk-card-body h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">About Vendor</h6>
                      <small><?php if(!empty($aboutVendor)) echo $aboutVendor;else "No details about vendor"?></small>
                    <!--<hr>-->
                    <!--  <small>Broker Consultancy</small>-->
                    <!--  <div class="progress mb-3" style="height: 5px">-->
                    <!--    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>-->
                    <!--  </div>-->
                    <!--  <small>Stock Brokerage Commission</small>-->
                    <!--  <div class="progress mb-3" style="height: 5px">-->
                    <!--    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>-->
                    <!--  </div>-->
                    <!--  <small>Need Sub-Broker Support</small>-->
                    <!--  <div class="progress mb-3" style="height: 5px">-->
                    <!--    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>-->
                    <!--  </div>-->
                    
                    
                    <hr>
                    
                       <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Licence Details </i></h6>
                      <small>Gst: 012548</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>detail 1: 012548</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>detail 2: 012548</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    
                    
                    
                    </div>
                  </div>
                </div>



            </div>
          </div>

        </div>
    </div>

    </div>    
        
        
        
  <!-----------------Custom Design------>
        <!-- section content end -->
        <!-- section content begin -->
   
  
        
        
        
        </main>
        
             
      

    
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/blockit.min.js"></script>
    <script src="js/config-theme.js"></script>
</body>

</html>
    
      
 