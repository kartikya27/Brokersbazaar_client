<Style>
p{
    margin-bottom:0px;
}
    .uk-card-body{
        padding:20px 0px;
        border-radius:10px;
    }
    .uk-card-title{
        font-size:1.2rem;
        margin:10px 15px;
    }
    .uk-alert-primary{
        background:#70b5f933;
        margin:0px; 
        border-top:1px solid #c9c9c9; 
        /*border-right:1px solid #c9c9c9; */
        /*border-left:1px solid #c9c9c9;*/
        color:#000000e6;
        font-size:15px;
    }
    .uk-alert-danger{
        background:#fef4f6;
        margin:0px; 
        border-top:1px solid #c9c9c9; 
        /*border-right:1px solid #c9c9c9; */
        /*border-left:1px solid #c9c9c9;*/
        color:#000000e6;
        font-size:15px;
    }
    [class*=uk-align]{
        margin-bottom: 0;
    }
</Style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <div class="uk-child-width-1-4@m  uk-grid-small uk-grid" uk-grid="">
      
        <div class="uk-first-column uk-width-1-2@m">
        <div class="uk-card uk-card-default uk-card-body" >
            <h3 class="uk-card-title"> My Connection </h3>
            <?php foreach($connections as $connection){
            if($connection->status==='approved'){
            ?>
        
            <div class="uk-alert-primary uk-panel" uk-alert style="">
    <!--<a class="uk-alert-close" uk-close></a>-->
    <div class="uk-align-left">
   <p ><a style="color: #4e73df;text-decoration: none;" href="<?php echo base_url(); ?>profile/vendor/user?vendorID=<?php echo $connection->vendorUniqeID;?>"><?php echo $connection->name;?></a> accepted your invitations</p>
   </div>
  <div class="uk-align-right"><small ><?php echo $connection->date;?></small ></div>
</div>

      
            <?php }}?>
            <!--<div class="well">Broker 2</div>-->
        </div>
        
    </div> 
        
         <div class="uk-second-column uk-visible@s">
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"> Pending Invitations </h3>
            <?php foreach($connections as $connection){
            if($connection->status==='pending'){
            ?>
            
             <div class="uk-alert-danger uk-panel" uk-alert style="">
    <!--<a class="uk-alert-close" uk-close></a>-->
   <div class="uk-align-left">
   <p >Connection Request is still pending to <a href="<?php echo base_url(); ?>profile/vendor/user?vendorID=<?php echo $connection->vendorUniqeID;?>"><?php echo $connection->name;?>.</a></p></div>
   
   <div class="uk-align-right"><small ><?php echo $connection->date;?></small></div>
</div>
            
           
            <?php }}?>
        </div>
        
    </div> 
    
    
     <div class="uk-second-column uk-visible@s">
        <div class="uk-card uk-card-default uk-card-body">
             <span class="uk-label">Recommended</span>
            <h3 class="uk-card-title"> New Vendors </h3>
          <p style="text-align:center;font-size: 12px;">Visit the company page for find more Vendors!</p>
            
             <div class="uk-alert" uk-alert style="">
    <!--<a class="uk-alert-close" uk-close></a>-->
   <p>New Vendors who Recently Joind. <a href="<?php echo base_url(); ?>more_vendor">Connect Now</a></p>
</div>
            
           
            
        </div>
        
    </div> 
    
    
        
</div>
                 

                       
             
                        

              
             

            </div>
           

        </div>
  

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   

  