<head>
      <title> <?php echo $title; ?> - Brokers bazar  </title>
</head>
   <!-----=======HEADER FILE=============----------------> 
    
    <main>
        <!-- slideshow content begin -->
        
         <?php foreach($pageContent as $pageContent) {?>
         <div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center" style="background-image: url(https://projects.letsgolive.in/admin.brokersbazaar/images/<?php echo $pageContent->bannerImage; ?>);" data-uk-img>
            <div class="uk-container" style="">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-inline">
                        <div class="uk-grid-large uk-flex uk-flex-middle uk-flex-right" data-uk-grid>
                           
                            <div class="uk-width-1-1@m">
                               
                                <h2 class="uk-margin-remove"><?php echo $pageContent->bannerTitle; ?></h2>
                               	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
   
      <div class="uk-section in-liquid-2" style="background:#fff;">
            <div class="uk-container">
                <div class="uk-grid-large " >
                   
                    <div class="uk-flex uk-flex-left " >
                       
                        <div>
                            <h3><?php echo $pageContent->title; ?></h3>
                           
                             <div class="uk-panel">
                                 
      <?php 
      if(!empty($pageContent->img1)){ ?>
      <img class="uk-align-left uk-margin-remove-adjacent" src="https://projects.letsgolive.in/admin.brokersbazaar/images/<?php echo $pageContent->img1; ?>" width="500" height="auto" >
          
      <?php }
      ?>                           
                                 
    
   
   <p>
       <?php echo $pageContent->text; ?>
   </p>
   </div>
                            
                       
                            
                            
                           
                         
                        </div>
                    </div>
                 
                   
                </div>
              
     <img data-src="https://projects.letsgolive.in/admin.brokersbazaar/images/<?php echo $pageContent->img2; ?>" width="100%" height="auto" alt="" uk-img>         
              
              
              
              
            </div>
        </div>
      
       <?php } ?>    
      
   
    </main>
    
    <?php
    include 'inc/footer.php';
    ?>
    
    
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/blockit.min.js"></script>
    <script src="js/config-theme.js"></script>
</body>

</html>