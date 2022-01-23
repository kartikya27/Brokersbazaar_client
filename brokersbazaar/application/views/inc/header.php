<?php $link = "https://" .$_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI']; ?> 

<style>
    p{
        text-align:justify;
    }
    
 .partnerLink{
     padding:10px 20px 0px 0px;
     font-size:14px;
     text-align:right;
    margin-bottom:10px;
    margin-top:0;
 }   
    
    
</style>




    
    <p class="partnerLink" style=""><a href="https://projects.letsgolive.in/vendor.brokersbazaar/" >Become Our Partner</a></p>
<header style="padding-top:0;">
  
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container-fluid" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                    
                            <a class="uk-logo" href="<?php echo base_url() ?>index">
                                <img src="<?php echo base_url() ?>img/logo.png" data-src="img/logo.png" alt="logo" width="160" height="34" data-uk-img>
                            </a>
                     
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="<?php echo base_url() ?>about_us" style="color:#29B6F6">About Us<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="<?php echo base_url() ?>about/Why BrokersBazaar">Why BrokersBazaar ?</a></li>
                                            <li><a href="<?php echo base_url() ?>our_team">Our Team</a></li>
                                            <li><a href="<?php echo base_url() ?>career">Career With Us</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Vision">Vision</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li><a href="<?php echo base_url() ?>about/Services" style="color:#29B6F6">Services<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="<?php echo base_url() ?>about/Search And Compare">Search And Compare</a></li>
                                            <li><a href="<?php echo base_url() ?>about/E-KYC">E-KYC</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Legal and Compliances">Legal & Compliances</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Investment Ideas">Investment Ideas</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Verfication">Verfication</a></li>

                                        </ul>
                                    </div>
                                </li>

                                <li><a href="<?php echo base_url() ?>about/Education" style="color:#29B6F6">Education<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="<?php echo base_url() ?>about/certification">Certification</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Stock Market">Stock Market</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Mutual Funds">Mutual Funds</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Compliance">Compliance</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Insurance">Insurance</a></li>
                                            <li><a href="<?php echo base_url() ?>about/Research">Research</a></li>



                                        </ul>
                                    </div>
                                </li>


                             

                                <li><a href="<?php echo base_url() ?>about/Guide For Investors" style="color:#29B6F6">Guide For Investors<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                           <li><a href="<?php echo base_url() ?>about/How To Choose Your Service Provider">How To Choose Your Service Provider</a></li>

                                            <li><a href="<?php echo base_url() ?>about/Investment FAQ">Investment FAQ</a></li>

                                        </ul>
                                    </div>
                                </li>




                    <li><a href="<?php echo base_url() ?>about/Support" style="color:#29B6F6">Support</a></li>
                              
                                   <li><a href="<?php echo base_url() ?>about/Stock Brokars" style="color:#29B6F6">Stock Brokars<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="<?php echo base_url() ?>about/How to Compare">How to Compare?</a></li>

                                        </ul>
                                    </div>
                                </li>
                                

                                 <li><a href="<?php echo base_url() ?>about/News and Reviews" style="color:#29B6F6">News & Reviews</a></li>
                                
                                
                                      <li><a href="<?php echo base_url() ?>about/Loan" style="color:#29B6F6">Loan<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                           
                                            <li><a href="<?php echo base_url() ?>about/Business Loan">Business Loan</a></li>
                                             <li><a href="<?php echo base_url() ?>about/Education Loan">Education Loan</a></li>
                                             <li><a href="<?php echo base_url() ?>about/Loan Against Property">Loan Against Property</a></li>
                                             <li><a href="<?php echo base_url() ?>about/Loan Against Securities">Loan Against Securities</a></li>
                                             <li><a href="<?php echo base_url() ?>about/Personal Loan">Personal Loan</a></li>
                                             <li><a href="<?php echo base_url() ?>about/Housing Loan">Housing Loan</a></li>
                                            <li><a href="<?php echo base_url() ?>about/SME Loan">SME Loan</a></li>
                                             <li><a href="<?php echo base_url() ?>about/Startup Loan">Startup Loan</a></li>
                                            
                                            

                                        </ul>
                                    </div>
                                </li>

                                <li><a href="<?php echo base_url() ?>about/How It Works" style="color:#29B6F6">How It Works</a></li>




                            </ul>
                           
                        </div>
                    </div>
                  
                   
                   <?php 
                           if(!empty($logedUser)){
                             echo '
                   
                    <div class="uk-navbar-right" style="width:15%">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                              <ul class="uk-navbar-nav uk-visible@m">
                           
                            
                           <li>
                            <a href="#" style="color:#29B6F6"><i class="fas fa-user-circle" style="font-size:25px;transform:none"> </i>&nbsp; Hello '.$logedUser["name"].'</a>
                           
                            <div class="uk-navbar-dropdown">
                           
                           
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                           
                                            <li><a href="'.base_url().'myaccount" >My Account</a></li>
                                             <li><a href="'.base_url().'logout" >logout</a></li>
                                            
                                        </ul> </div></li>
                                   
                                        
                                        </ul>
                        </div>
                    </div>
                    
                    '; 
                    
                           }
                    else {
                    
                    echo ' 
                        
                    <div class="uk-navbar-right" style="width:10%">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                              <ul class="uk-navbar-nav uk-visible@m">
                            
                           <li>
                            <a href="#" style="color:#29B6F6"><i class="fas fa-user-circle" style="font-size:25px;transform:none"></i></a>
                           
                            <div class="uk-navbar-dropdown">
                           
                           
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                           
                                            <li><a href="'.base_url().'User/login?continue='.$link.'" >Sign In</a></li>
                                           
                                            
                                        </ul> </div></li></ul>
                        </div>
                    </div>
                        
                       '; 
                  
                    }
                    ?>
                    
                    
                    
                    
                </div>
            </nav>
        </div>
       
    </header>
    
    
    
    
   