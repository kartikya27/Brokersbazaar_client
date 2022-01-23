<style>
    .uk-offcanvas-bar .uk-close{
        color:#999;
    }
    .uk-offcanvas-bar h3, .uk-offcanvas-bar h4, .uk-offcanvas-bar h5{
        color:#333;
    }
    .uk-offcanvas-bar{
        background:#fff;
        color:#999;
    }
     
      .nav-design{
          padding:0px 10px;
      }  
      .select-design  {
                width: 100%;
                padding: 15px;
                border: 1px solid #ddd;
      }
     
       .notice{
           align-items: center;
           padding: 10px 20px;
    color: red;
    background-color: #ffcc3b40;
       }
       
       .btn-top{
                   position: relative;
    right: -90;
    top: -20;
    font-size: 18px;
       }
       .card-title{
           font-weight:600;
       }
       
    </style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hey <?php echo $vendor['name']; ?>!</h1>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <a href="<?php echo base_url(); ?>Vendor/details??vendor_user=<?php echo $vendor['uniqueID'];?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-user fa-sm text-white-50"></i> Complete Company Profile</a>
                    </div>

                    <!-- Content Row -->
                    

                       
                  <div class="uk-width-4-6@m uk-inline">
                      
               <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match uk-grid" uk-grid="">
      
        <div class="uk-first-column">
        <div class="uk-card uk-card-default uk-card-body">
            <h5 class="card-title"><a href="" uk-toggle="target: #offcanvas-flip">New Enquiry</a></h5>
            <p>Paid Enquiry by BrokersBazaar</p>
            <h4><?php echo $newEnquiry;?></h4>
             <div class="">
      
    </div>
        </div>
        
    </div> <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h5 class="card-title"><a href="" uk-toggle="target: #offcanvas-flip">Confirm Enquiry</a></h5>
            <p>Paid Enquiry by BrokersBazaar</p>
               <h4><?php echo $confirm;?></h4>
             <div class="">
      
    </div>
        </div>
        
    </div> <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h5 class="card-title"><a href="" uk-toggle="target: #offcanvas-flip">Hold Enquiry </a></h5>
            <p>Paid Enquiry by BrokersBazaar</p>
                <h4><?php echo $pending;?></h4>
             <div class="">
      
    </div>
        </div>
        
    </div> <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h5 class="card-title"><a href="" uk-toggle="target: #offcanvas-flip">Rejected Enquiry </a></h5>
            <p>Paid Enquiry by BrokersBazaar</p>
                <h4><?php echo $rejected;?></h4>
             <div class="">
       
    </div>
        </div>
        
    </div> 
        
        
        
        
</div>
                        
                   
                    </div>

<!--offcanvas-flip--->

<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h4>Connection Notification</h4>

       <div class="uk-alert-primary uk-panel uk-alert" uk-alert="" style="">
    <!--<a class="uk-alert-close" uk-close></a>-->
    
   <p>Parveen kumar Requested for Loan Advisory on <small>2021-12-23</small> </p>
   
  
</div>
       

    </div>
</div>                     

               
                <!-- /.container-fluid -->

            </div>
           

        </div>
  

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   

  