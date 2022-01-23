
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1> Home Package </h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add Package    </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                 <!--<th>Page Category</th>-->
            <th>Package Name</th>
                <th>Package description </th>
                <th> package price </th>
                <!--<th> Text</th>-->
                <!--<th>Image 1</th><th>Image 2</th>-->
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
                        <td><?php echo $r->pack_name;?></td>
                      
                        
                       
                        <td><?php echo $r->pack_discription; ?></td>
                        <td><?php echo $r->pack_price; ?></td>
                        
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php   echo $r->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'Package')">Delete</button></td>
                    </tr> 
                          <div class="modal fade " id="edit<?php echo $r->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
            <div class="modal-content p-2">
                <form action="editPackage" method="POST" enctype='multipart/form-data'>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Package</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    <div class="modal-body"> 
                  
                      
                    <div class="form-group">
                        <label>Package Name</label>
                          <input type="hidden" name="id" value="<?php echo $r->id;?>">
                       <input name="pack_name" type="text" class="form-control" value="<?php echo $r->pack_name;?>" />
                    </div>
                    
                    <div class="form-group">
                        <label>Package Price</label>
                          <input type="text" name="pack_price" value="<?php echo $r->pack_price;?>">
                       
                    </div>
                    
                    <div class="form-group">
                        <label>Features</label>
                       <input name="pack_discription" type="text" class="form-control" value="<?php echo $r->pack_discription;?>" />
                    </div>
                    
                     
                 
                            <button type="submit" name="" class="btn btn-primary w-25" id="editSlidersave">Save</button>
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
            <form action="addPackage" method="POST" enctype="multipart/form-data">
               
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Package</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                                        
               

    
    <div class="form-group available-translations"></div>
        <div class="locale-container locale-container-en" style="display:block;">
           
        
      <div class="form-group for-shop">
          <label>Package Name</label>
    
   <input type="text" name="pack_name" value="" class="form-control" required="">
            </div>
                    
                   
    </div> 
          
          
          <div class="form-group"> 
                <label>Package Price </label>
                <input type="text" name="pack_price" value="" class="form-control" required="">
            </div>
             
    
           
            <div class="form-group"> 
                <label>Features</label>
                <textarea type="text" name="pack_discription" value="" class="form-control" required=""></textarea>
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

