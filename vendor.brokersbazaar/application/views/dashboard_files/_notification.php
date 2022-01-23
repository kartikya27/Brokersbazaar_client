 <div class="uk-width-1-1@m uk-width-1-3@l grid-match" style="padding:10px;">
             
             <div style="padding:10px;border:1px solid #dddddd;">
                 <h4 class="uk-card-title">Notification</h4>
                
               
                     <ul  class="uk-list uk-list-divider">
                         
                    <?php
                    if(empty($vendorConnection)){
                        echo "No new Connection request !";
                    }
                      foreach($vendorConnection as $vendor_connection){
                        // echo  $vendor_connection->userName; 
                     ?>   
                        <li><a href="<?php echo $vendor_connection->userEmail; ?>"><?php echo $vendor_connection->userName; ?></a> Wants to Connect with you. Status is <span><?php echo $vendor_connection->status; ?></span><br> <button class='btn btn-success btn-aprove'>Confirm</button>&nbsp;<button class="btn btn-danger btn-cancel" onclick="CancelReq('<?php echo $vendor_connection->userName; ?>')">Reject</button></li>
                        
                        
                       <?php 
                      }
                    ?>
                    
                    
                         </ul>
              
                 
             </div>
             
           
             </div>
             
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
             <script>
             
                 $(document).ready(function(){
                     $('.btn-aprove').click(function(){
                         let email='<?php echo $vendor_connection->userEmail; ?>';
                        //  alert(email);
                         $.ajax({
                             url:'aprove_client',
                             method:"POST",
                             data:{email:email},
                             success:function(data){
                                 console.log(data);
                             }
                         })
                     })
                 });
                 function CancelReq(name){
                     let email='<?php echo $vendor_connection->userEmail; ?>';
                     $.ajax({
                             url:'cancel_req',
                             method:"POST",
                             data:{email:email,name:name},
                             success:function(data){
                                 console.log(data);
                             }
                         })
                 }
             </script>
       