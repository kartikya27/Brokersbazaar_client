
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1>Vendor Service  Page</h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add  Service    </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr> <th>Title</th>
                <th>Any Remarks</th>
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
                        <td><?php echo $r->title; ?></td>
                        <td><?php echo $r->remarks; ?> </td>
                    
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php echo $r->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'vendorServices')">Delete</button></td>
                    </tr> 
                         <div class="modal fade" id="edit<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="editService" method="POST" enctype="multipart/form-data">
                    <div class="modal-header"> <h4 class="modal-title" id="myModalLabel">Edit Service Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       
                    </div>
                                        <div class="modal-body"> 
                        <div class="form-group">
                                <!--<label>Id</label>-->
                                 <input type="hidden" name="id" class="form-control"  value="<?php echo $r->id; ?>" readonly>
                                  </div> 
                                  <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="page" class="form-control" value="<?php echo $r->title; ?>">
                            </div>
                            
                                  <div class="form-group">
                                <label>Remarks</label>
                                <input type="text" name="Menu" class="form-control" value="<?php echo $r->remarks; ?>">
                            </div>
                            
                    
                    <div class="modal-footer">
                          <button type="button"  class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit"  class="btn btn-primary">Save</button>
                    </div></div>
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
            <form action="addServices" method="POST" enctype="multipart/form-data">
                
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Service</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                                        
                   <div class="form-group" style="position: relative;">
                        <label>Title</label>
                    <input type="text" name="title"  class="form-control">
                    </div>               
                   
                   
                   <div class="form-group">
                        <label>Remarks </label>
                      <input class="form-control" name="remarks" value="" type="text">
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

   