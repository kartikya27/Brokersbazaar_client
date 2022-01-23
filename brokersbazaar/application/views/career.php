
<head>
      <title> <?php echo $title; ?> - Brokers bazar  </title>
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
        
        <!-- section content end -->
        <!-- section content begin -->
        
      <?php
      
      
// if(isset($_POST['resume_upload'])){
 
// $name=$_POST['name'];
//  $date = date('Y-m-d H:i:s');
// $IDDocs = $_FILES['resume']['name'];

// $_SESSION['newFileName'] = $name."_resume_".$date;
// $IDDocs_path = "resume";
    
//   if($_FILES["resume"]["name"]){
//   $IDDoca_file_extension = strtolower( strrchr( $_FILES["resume"]["name"], "." ) );
//  $IDDocs_name			=	$_SESSION['newFileName'].$IDDoca_file_extension;
// $IDDocsFilePath			="$IDDocs_path/$IDDocs_name";
//  move_uploaded_file($_FILES["resume"]["tmp_name"],$IDDocsFilePath); 
//       echo "hello";
//   }
// }
      
 ?>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>  
      
      
      <div class="uk-section in-liquid-2" style="background:#fff;">
            <div class="uk-container">
                <div class="uk-grid-large " >
                   
                    <div class="uk-flex uk-flex-left " >
                       
                        <div>
                            <h3>CAREERS WITH US</h3>
                            <p>We are always looking for budding talents, having sound knowledge and experience in financial market.</p>
                         
                         <form action="career_submit" method="POST" class="uk-form-stacked" enctype="multipart/form-data">
                         <!--<form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="POST" class="uk-form-stacked" enctype="multipart/form-data">   -->
                             
                              <div class="uk-margin">
                                  
                                  <div class="uk-width-1-2@s">
        <input class="uk-input" type="text" name="name" placeholder="Your Name" required>
    </div>
                 <br>                 
                                 <div uk-form-custom>
                                   <input type="file" name="resume"  required>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button> <label>Upload Your Resume Here</label>
                                  </div>
                              </div>
              
                        <button class="uk-button uk-button-primary" name="resume-upload" type="submit">Upload</button>
                        </form>
                        <p>
                            <?php $msg = $this->session->flashdata('msg');
	                if ($msg != ''){
	                    echo  '<span style="color:green">'.$msg.'</span>';
	                }
	
	                ?>
                            
                        </p>
                        </div>
                    </div>
                 
                   
                </div>
              
            </div>
        </div>
      
      
      
      
      
      
      
        <!-- section content begin -->
   
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