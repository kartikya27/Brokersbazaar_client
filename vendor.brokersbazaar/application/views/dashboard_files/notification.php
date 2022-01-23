
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Notification</h1>
                       
                    </div>

 <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid" uk-grid="">
      
        <div class="uk-first-column">



                   <?php
                    if(empty($vendorConnection)){
                        echo "No new Connection request !";
                    }
                     foreach($vendorConnection as $vendor_connection){
                    ?> 
                <div class="uk-card uk-card-default uk-card-body">
            <h5 class="card-title"> <a href="<?php echo $vendor_connection->userEmail; ?>">
                 <?php echo $vendor_connection->userName; ?>
                    </a>
                    </h5>
            <p> Wants to Connect with you. Status is <span>
                                    <?php echo $vendor_connection->status; ?>
                                     <?php if($vendor_connection->status!='approved'){ ?>
                                    </span></p>
             <div class="uk-footer">
                 <form action="confirmRequest" method="post">
                     <input type="hidden" name="id" value="<?php echo $vendor_connection->id; ?>">
              <button class='btn btn-success btn-aprove' type="submit">Confirm</button>
       <button  type="button" class="btn btn-danger btn-cancel" onclick="window.location.href='rejRequest?id=<?php echo $vendor_connection->id; ?>'">Reject</button>
   <?php }?>
   </form>
    </div>
        </div>

            <?php } ?>
            
                  
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
   

  