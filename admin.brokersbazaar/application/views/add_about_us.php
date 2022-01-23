<style>
    .truncate {
  max-width: 200px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
             
             
           
                                                <div id="content-wrapper" class="d-flex flex-column container">

            
            <div id="content"><h1> Home Page </h1>

<hr>
<div style="margin-bottom: 20px;">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addDiscountCode" class="btn btn-primary pull-left">
        <b>+</b> Add Page Content   </a>  
    <div class="clearfix"></div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped uk-table">
        <thead>
            <tr> <th>Page</th>
            <th>Page Category</th>
                <th>Banner Image</th>
                <th> Title </th>
                <th> Heading</th>
                <th>Content</th>
                <th>Image 1</th>
                <th>Image 2</th>
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
                        <td><?php echo $r->menu;?></td>
                        <td><?php echo $r->submenu;?></td>
                        <td><img src="<?php echo base_url(); ?>images/<?php echo $r->bannerImage; ?>" style="height:80px; width:80px;" /></td>
                        <td class="truncate"><?php echo $r->bannerTitle; ?> </td>
                        <td><?php echo $r->title; ?></td>
                        <td class="truncate"><?php echo $r->text; ?></td>
                        <td><img src="<?php echo base_url(); ?>images/<?php echo $r->img1; ?>" style="height:80px; width:80px;" /></td>
                        <td><img src="<?php echo base_url(); ?>images/<?php echo $r->img2; ?>" style="height:80px; width:80px;" /></td>
                        <!--<td>Jodhpur, Rajasthan</td>-->
                      <td class="text-center"><a  data-toggle="modal" data-target="#edit<?php   echo $r->id; ?>" class="btn btn-primary btn-xs"> Edit </a></td>
                         
                        <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteSingle(<?php echo $r->id;?>,'pageContent')">Delete</button></td>
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
                       <input name="bannerImage" type="file" class="form-control" value="<?php echo $r->bannerImage;?>" />
                    </div>
                     <div class="form-group">
                        <label>Title</label>
                       <input name="bannerTitle" type="text" class="form-control" value="<?php echo $r->bannerTitle; ?>" />
                    </div>
                    
                     <div class="form-group">
                        <label>Heading</label>
                       <input name="title" type="text" class="form-control" value="<?php echo $r->title; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea rows="5" name="text" class="form-control"><?php echo $r->text;?></textarea>
                       
                    </div>
                        <div class="form-group">
                        <label>Image1 </label>
                       <input name="img1" type="file" class="form-control" value="<?php echo $r->img1;?>" />
                    </div>
                     
                   <div class="form-group">
                        <label>Image2 </label>
                       <input name="img2" type="file" class="form-control" value="<?php echo $r->img2;?>" />
                    </div>
                      <button type="button"  class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
            <form action="addPageContent" method="POST" enctype="multipart/form-data">
                <!--<input type="hidden" name="update" value="">-->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Page Content</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
               <div class="modal-body">
                                        
                 <!--<form method="POST" action="addProducts" enctype="multipart/form-data">-->
<!--    <input type="hidden" value="<? // isset($_POST['folder']) ? htmlspecialchars($_POST['folder']) : $timeNow ?>" name="folder">
-->     
    <!--<input type="hidden" name="folder">-->

    
    <div class="form-group available-translations"></div>
        <div class="locale-container locale-container-en" style="display:block;">
            <!--<input type="hidden" name="translations" value="en">-->
   <!--           <div class="form-group for-shop">-->
   <!--     <label>Page Category</label>-->
                       
   <!--     <select class=" form-control show-tick show-menu-arrow" name="menu" required="" onchange="return second_category(this.value)">-->
   <!--         <?php foreach($menus as $m){?>-->
   <!--     <option value="<?php echo $m->Menu;?>"><?php echo $m->Menu;?> </option>-->
        
        <!--<option value="Sky Wire">Main Menu should be here 2 </option>-->
   <!--     <?php }?>-->
   <!--</select>-->
   <!--</div>-->
      <div class="form-group for-shop">
          <label>Page Name</label>
    <select class=" form-control show-tick show-menu-arrow" name="submenu" required="" onchange="return second_category(this.value)">
            
         <?php foreach($submenus as $m){?>
        <option value="<?php echo $m->Menu_name;?>"><?php echo $m->Menu_name;?> </option>
        
        <!--<option value="Sky Wire">Main Menu should be here 2 </option>-->
        <?php }?>
        
   </select>
   
                    
                   
    </div> 
          
           <div class="form-group"> 
                <label>Banner Img </label>
                <input type="file" name="bannerImage" value="" class="form-control" >
            </div>
          <div class="form-group"> 
                <label>Banner Title </label>
                <input type="text" name="bannerTitle" value="" class="form-control" >
            </div>
             
    
            <div class="form-group"> 
                <label>Heading </label>
                <input type="text" name="title" value="" class="form-control" required="">
            </div>
            <div class="form-group"> 
                <label>Description </label>
                <textarea type="text" name="text" value="" class="form-control" required=""></textarea>
            </div>
           
             <div class="form-group"> 
                <label>Page Img 1</label>
                <input type="file" name="img1" value="" class="form-control" required="">
            </div>  
       <div class="form-group"> 
                <label>Page Img 2</label>
                <input type="file" name="img2" value="" class="form-control" >
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

