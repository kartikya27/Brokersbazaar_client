<style>
    .truncate {
  max-width: 200px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
/*body {*/
  --table-width: 100%; /* Or any value, this will change dinamically */
/*}*/
/*tr {*/
/*  display:block;*/
/*  max-height:500px;*/
/*  overflow-y:auto;*/
/*}*/

</style>
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1> Vendors </h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add Vendor   </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped uk-table">
        <thead>
            <tr> <th>Name</th>
            <th>email</th>
                <th>Image</th>
                <th> company_name </th>
                <th> phone</th>
                <th>Address</th>
                <th>city</th>
                <th>pin</th>
                <th>state</th>
                <th>currentSelectedPlan</th>
                
                <!--<th> Position</th>-->
                <th> Edit </th> 
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>
            
               <?php 

 $x = 1;
 

foreach($row as $r){

        
           ?> 
            
            
                        <tr> 
                        <td><?php echo $r->name;?></td>
                        <td><?php echo $r->email;?></td>
                        <td><img src="<?php echo base_url(); ?>images/<?php echo $r->userImage; ?>" style="height:80px; width:80px;" /></td>
                        <td class="truncate"><?php echo $r->company_name; ?> </td>
                        <td><?php echo $r->phone; ?></td>
                        <!--<td class="truncate"><?php //echo $r->text; ?></td>-->
                        <td><?php echo $r->Address; ?></td>
                        <td><?php echo $r->city; ?></td>
                         <td><?php echo $r->pin; ?></td>
                         <td><?php echo $r->state; ?></td>
                          <td><?php echo $r->currentSelectedPlan; ?></td>
                        <!--<td>Jodhpur, Rajasthan</td>-->
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php   echo $r->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'vendor')">Delete</button></td>
                    </tr> 
                          <div class="modal fade " id="edit<?php echo $r->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
            <div class="modal-content p-2">
                <form action="editPageContent" method="POST" enctype='multipart/form-data'>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Page Content</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    <div class="modal-body"> 
                  
                      
                    <div class="form-group">
                        <label>Page</label>
                          <input type="hidden" name="id" value="<?php echo $r->id;?>">
                       <input name="menu" type="text" class="form-control" value="<?php echo $r->menu;?>" />
                    </div>
                      <div class="form-group">
                        <label>Page Category</label>
                          <!--<input type="hidden" name="id" value="<?php echo $r->id;?>">-->
                       <input name="submenu" type="text" class="form-control" value="<?php echo $r->submenu;?>" />
                    </div>
                      <div class="form-group">
                        <label>Banner Image</label>
                          <!--<input type="hidden" name="id" value="<?php echo $r->id;?>">-->
                       <input name="bannerImage" type="file" class="form-control" value="<?php //echo $r->bannerImage;?>" />
                    </div>
                     <div class="form-group">
                        <label>Title</label>
                       <input name="bannerTitle" type="text" class="form-control" value="<?php //echo $r->bannerTitle; ?>" />
                    </div>
                    
                     <div class="form-group">
                        <label>Heading</label>
                       <input name="title" type="text" class="form-control" value="<?php //echo $r->title; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea rows="5" name="text" class="form-control"><?php //echo $r->text;?></textarea>
                       
                    </div>
                        <div class="form-group">
                        <label>Image1 </label>
                       <input name="img1" type="file" class="form-control" value="<?php echo $r->img1;?>" />
                    </div>
                     
                   <div class="form-group">
                        <label>Image2 </label>
                       <input name="img2" type="file" class="form-control" value="<?php echo $r->img2;?>" />
                        <div class="">
                          <button type="button"  class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit"  class="btn btn-primary">Save</button>
                     </div>
                    </div>
                    
                  </div>
                  
                      
                   
               
                   
                                </form>
            </div>
        </div>
    </div>              
        <?php  $x++;  } ?>                             
                            </tbody>
    </table>
</div>
<!-- add/edit discounts -->

<div class="modal fade" id="addDiscountCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="addPageContent" method="POST" enctype="multipart/form-data">
                <!--<input type="hidden" name="update" value="">-->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Vendor</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                                        
                 <!--<form method="POST" action="addProducts" enctype="multipart/form-data">-->
<!--    <input type="hidden" value="<? // isset($_POST['folder']) ? htmlspecialchars($_POST['folder']) : $timeNow ?>" name="folder">
-->     
    <!--<input type="hidden" name="folder">
    
    
    <th>Name</th>
            <th>email</th>
                <th>Image</th>
                <th> company_name </th>
                <th> phone</th>
                <th>Address</th>
                <th>city</th>
                <th>pin</th>
                <th>state</th>
                <th>currentSelectedPlan</th>
    -->

    
    <div class="form-group available-translations"></div>
        <div class="locale-container locale-container-en" style="display:block;">
            <!--<input type="hidden" name="translations" value="en">-->
              <div class="form-group for-shop">
        <label>Name</label>
                       
        <input type="text" name="name" value="" class="form-control" required="">
   </div>
      <div class="form-group for-shop">
          <label>Email</label>
    <input type="email" name="email" value="" class="form-control" required="">
   
                    
                   
    </div> 
          
           <div class="form-group"> 
                <label>Image </label>
                <input type="file" name="userImage" value="" class="form-control" required="">
            </div>
          <div class="form-group"> 
                <label>Company Name</label>
                <input type="text" name="company_name" value="" class="form-control" required="">
            </div>
             
    
            <div class="form-group"> 
                <label>phone </label>
                <input type="text" name="phone" value="" class="form-control" required="">
            </div>
            <div class="form-group"> 
                <label>Address </label>
                <textarea type="text" name="Address" value="" class="form-control" required=""></textarea>
            </div>
             <div class="form-group"> 
                <label>City </label>
                <input type="text" name="city" value="" class="form-control" required="">
            </div>
             <div class="form-group"> 
                <label>State </label>
                <input type="text" name="state" value="" class="form-control" required="">
            </div>
            
                    
        </div>
           
                    
                
                   
                  
                    
                    
                 
                    
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit"  class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="admin_files/vendor/jquery/jquery.min.js"></script>
    <script src="admin_files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_files/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin_files/js/sb-admin-2.min.js"></script>
</div>
</div>
</div>
</div>
<!--<footer>Powered by <a href="https://projects.letsgolive.in/trifla/">trifla.com/</a></footer>-->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function deleteSingle(id,tablename){
        
        $.ajax({
                url:"<?php echo base_url()?>Admin_control/deleteS",
                method:"POST",
                data:{id:id,tablename:tablename},
                success:function(data){
                    // alert(data);
                alert('deleted!');
           
            window.location.reload();
        }
    })
    }
</script>

