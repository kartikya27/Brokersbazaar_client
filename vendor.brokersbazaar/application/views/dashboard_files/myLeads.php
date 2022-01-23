<style>
    
     
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
       .bg{
           background: #fff;
           padding: 30px;
       }
       
    </style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                

                    <!-- Content Row -->
                    

            <!--style="background:#fff;padding:15px;"           -->
                         
      <div class="uk-width-1-1@m uk-grid " uk-grid >         
                      
            
      
      
    <div class="uk-width-1-3@m"  >
      <div class="uk-width-auto@m bg">
                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <?php
                    // print_r($users);
                    if(isset($users)){
                    foreach($users as $user){
                    ?>    
                    
                    <li><a href="#"><?php echo $user->userName;?></a></li>
                    <?php }
                    }?>
                    <!--<li><a href="#">User 2</a></li>-->
                    <!--<li><a href="#">User 3</a></li>-->
                </ul>
            </div>
    </div>
    
    <div class="uk-width-2-3@m"  >
        <div class="uk-width-expand@m bg">
            
                <table id="component-tab-left" class="uk-table">
                    <tr><th>Name</th><th>City</th><th>Email</th><th>Enquiry</th></tr>
                    <?php
                  
                    if(isset($users)){
                    foreach($users as $user){
                    ?>
                    <tr>
                    <!--<td><?php echo $user->userName;?> Details</td>-->
                      <td> <?php echo $user->userName;?></td>
                      <td> <?php echo $user->city;?></td>
                      <td> <?php echo $user->email;?></td>
                      <td></td> 
                    
                    </li>
                    </tr>
                    <?php }
                    }?>
                    </table>
                   <!--<li>Dummy Text about User<br>-->
                   <!-- Name : User 1<br>-->
                   <!-- City : Delhi<br>-->
                   <!-- Email : user@gmail.com<br>-->
                   <!-- Enquiry : Regarding Loans-->
                    
                   <!-- </li>-->
                   <!--<li>Dummy Text about User<br>-->
                   <!-- Name : User 2<br>-->
                   <!-- City : Delhi<br>-->
                   <!-- Email : user@gmail.com<br>-->
                   <!-- Enquiry : Regarding Brokers-->
                    
                   <!-- </li>-->
                </ul>
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
   

  