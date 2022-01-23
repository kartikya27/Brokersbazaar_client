<title>Edit Profile | Vendor</title>
<style>
        .uk-card-body{
            padding: 25px;
            background: #fff;
            box-shadow: 0 0.5px 1px 0 rgb(5 47 95 / 4%), 0 3px 4px 0 rgb(52 105 203 / 12%);
            border: 1px solid #dddddd;
            border-radius: 10px;
        }
        
        .uk-card-body:hover{
           box-shadow: 0 2px 4px 0 rgb(5 47 95 / 4%), 0 12px 16px 0 rgb(52 105 203 / 12%);
        }
        
        .uk-card-footer{
            padding:0px 5px;
        }
        
         .uk-card-body > p{
            font-size: 12px;
             text-align: left;
             margin-top: 0px;
        }
        
        
        .uk-card-title{
            margin:10px 0px;
            font-size: 14px;
            color:#01579B !important;
        }
        
        
        
        /*Only Custom Design Css Profile section*/

.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
/*END HERE*/
    </style>


<div class="uk-section  in-liquid-1">
<div class="container uk-container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <ul class="uk-breadcrumb">
   
</ul>
          
          
          
          
        
           <ul class="uk-breadcrumb">
              <li ><a href="index">Home</a></li>
              <li ><a href="<?php echo base_url(); ?>more_vendor">All Vendors</a></li>
              <li class="#">Vendor Profile</li>
           </ul>
        
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm uk-grid uk-flex ">
            <div class="col-md-4 mb-3 uk-width-2-5@m uk-inline">
              <div class="uk-card-body uk-flex-center uk-flex">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Name</h4>
                      <p class="text-secondary mb-1">Company</p>
                      <p class="text-muted font-size-sm">City</p>
                    
                    <div class="uk-width-1-1@m">
                        <a class="uk-button uk-button-default uk-border-rounded " href="#">Edit Profile</a>
                    </div>  
                    
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="uk-card-body uk-margin">
                  
                  
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Service </i></h6>
                      <li>Loan</li>
                      
                      <li>Financial Advisor</li>
                      
                      <li>Broker</li>
                     
                   
                    
              </div>
            </div>
            
            <div class="col-md-8 uk-width-3-5@m uk-inline">
              

                <div class="col-sm-12 mb-3 uk-width-1-1@m uk-inline">
                  <div class="uk-card-body h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">About Vendor</h6>
                      <textarea style="width:100%;min-height:150px;">Dummy Text about vendor Dummy Text about vendor Dummy Text about vendor</textarea>
                    <hr>
                      <li>About 1</li>
                      
                      <li>About 2</li>
                      
                      <li>About 3</li>
                     
                      <li>About 4</li>
                      
                    </div>
                     <button class="uk-button uk-button-default">Update</button>
                  </div>
                 
                </div>



            </div>
          </div>

        </div>
    </div>

    </div>   