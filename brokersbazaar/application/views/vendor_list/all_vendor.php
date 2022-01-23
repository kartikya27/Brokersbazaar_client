<head>
    <!--<meta http-equiv="refresh" content="1">-->
  
      <title> Show more Vendors- Brokers bazar  </title>
      
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
        .in-slideshow{
            height:600px;
        }
    </style>
      
      
</head>
    
   <!-----=======HEADER FILE=============----------------> 
    
    <main>
        
        
        
         <div class="uk-section uk-padding-remove-vertical">
              <div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="" data-uk-slideshow>
            <!--<div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="background-image: url(http://demoaanaxagorasr.net/broker/brokerwhite/img/in-liquid-slide-bg.png);" data-uk-slideshow>-->
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Featured<br>Broker Listing</h1>
                                      
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Connect Now</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="https://delmonteassistedliving.com/wp-content/uploads/2021/07/testi-1-1.jpg" data-src="https://delmonteassistedliving.com/wp-content/uploads/2021/07/testi-1-1.jpg" alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                       <h1>Featured<br>Broker Listing</h1>
                                        <!--<p class="uk-text-lead uk-visible@m">A trusted destination for traders worldwide, Authorised by FCA, ASIC &amp; FSCA</p>-->
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Connect Now</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="https://delmonteassistedliving.com/wp-content/uploads/2021/07/testi-1-1.jpg" data-src="https://delmonteassistedliving.com/wp-content/uploads/2021/07/testi-1-1.jpg" alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                   
                </div>
            </div>
        </div>
        
        
        
        
   
        <!-- section content end -->
        <!-- section content begin -->
        
      <div class="uk-section  in-liquid-1">
            <div class="uk-container ">
                <div class="uk-grid uk-flex uk-flex-middle ">
                    <div class="uk-width-1-2@m">  
                        <h2>All Vendors</h2>
                    </div>
                  
                </div>
                
                
                <div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
      
       <?php
        
        
        
        
        $x= 1;
        // $company=['Google','Apple','Infosys.','Tesla','BMW','M.IT Solution','Ram IT Solution','Dell','Hp','Google','Apple','Infosys.','Tesla','BMW','M.IT Solution'];
        // $name=['Ramesh S.','Manoj K.','Aashish J.','Nilesh M.','N. Ram Nath','Narendra S','Govind R.','Permish V.','Arvind S.','Ramesh S.','Manoj K.','Aashish J.','Nilesh M.','N. Ram Nath','Narendra S','Govind R.'];
        // $service=['Stock Brokers','Loans','Education Loans','Mutial Funds','Insurance','Certificate','Stock Brokers','Loans','Mutial Funds','Loans','Education Loans','Mutial Funds','Insurance','Certificate','Stock Brokers','Loans','Mutial Funds'];
        // $location=['Delhi','Chennai','Mumbai','Kolkata','Delhi','Aagra','Aehmadnagar','Meruth','Noida','Delhi','Chennai','Mumbai','Kolkata','Delhi','Aagra','Aehmadnagar','Meruth','Noida'];
        
     
        foreach($row as $list){
            $name = $list->name;
          if(strpos($list->name," ")>0){
            	$name=substr($name,0,strpos($name," ")+2);
        }
        else { $name=$list->name;}
           
        //   print_r($list);
            echo ' <div>
        <div class="uk-card uk-card-default uk-card-body">
        <img width="70%" align="" src="https://projects.letsgolive.in/brokersbazaar/img/logo.png">
        <h3 class="uk-card-title" style="font-size:15px"> '.$list->company_name.' </h3>
            <h2 class="uk-card-title" style="font-size:18px"> '.$name.' </h2> 
             <h4 class="uk-card-title"> '.$list->type.' </h4>
            <p>
             '.$list->city.' 
            </p>
       

       <div style="float:right">
            <a href="profile/vendor/'.$list->name.'?vendorID='.$list->uniqueID.'" style="color:#000;">Read More</a>
      </div>
     
    
        </div>
        
    </div>';
            
            
            $x++;
        }
        
        ?> 
        
        
        
        
</div>
              <div class="uk-grid uk-flex uk-flex-middle ">
                    <div class="uk-width-1-2@m">  </div>
               <div class="uk-width-1-2@m">
                        <a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="more_vendor">Load More<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                    </div>   
                </div>
                
            </div>
        </div>
        
        
        
        
        </main>
        
             
      

    
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/blockit.min.js"></script>
    <script src="js/config-theme.js"></script>
</body>

</html>
    
      
 