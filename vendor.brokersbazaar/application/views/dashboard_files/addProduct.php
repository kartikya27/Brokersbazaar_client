


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div class="container-fluid">
                        <div class="row">                   
                            <div class="col-md-6">                        
             
             
<!---------add product------->                                                    
                                                    
                                                    
<h1>Add product</h1>
<hr>
<form method="POST" action="addProducts" enctype="multipart/form-data">
<!--    <input type="hidden" value="<? // isset($_POST['folder']) ? htmlspecialchars($_POST['folder']) : $timeNow ?>" name="folder">
-->     
    <input type="hidden"  name="folder">

    
    <div class="form-group available-translations"></div>
        <div class="locale-container locale-container-en"  style="display:block;">
            <input type="hidden" name="translations" value="en">
              <div class="form-group for-shop">
        <label>Product Categories</label>
                       
        <select class=" form-control show-tick show-menu-arrow" name="product_category" required onChange="return second_category(this.value)">
      <?php 
      foreach($product_category as $product_category){
      ?>
      
        <option value="<?php echo $product_category->product_cat; ?>"><?php echo $product_category->product_cat; ?></option>
  <?php }                    
?>
 </select>
                    
                   
    </div> 
             
    
            <div class="form-group"> 
                <label>Product Name </label>
                <input type="text" name="title" value="" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label>Product Short Description </label>
                <input type="text" name="Short_dis" value="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description1">Product Description </label>
                <textarea name="description" id="description1<? //$i ?>" rows="10" class="form-control" required></textarea>
                <script>
                    CKEDITOR.replace('description1<? //$i ?>');
                    CKEDITOR.config.entities = false;
                </script>
            </div>
           
             
      
          
                      
        </div>
          
            <div class="form-group for-shop">
                <label>Product Type </label>
                <select class=" form-control show-tick show-menu-arrow" name="product_type" required>
                    <option value="featured">Featured</option>
                    
                    <option value="top selling">Top Selling</option>
                    
                    <option value="cat_product">Category Product</option>
                    <option value="Home Product">Home Page Product</option>
                    
                </select>
            </div>            
        </div>
            <div class="form-group bordered-group">
                <label for="userfile">Product Main Cover Image</label>
        <input type="file" id="userFiles" name="image"  required>
    </div>
     <div class="form-group for-shop">
                <label>Update </label>
                <input type="submit"   class="form-control" required>
            </div>  


</div></div></div></div></div></div>


</body>
</html>