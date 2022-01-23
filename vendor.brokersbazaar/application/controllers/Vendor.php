<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {
    
      function __construct(){
      parent::__construct();
     $this->load->library('form_validation');
  $this->load->helper('url','form');
   $this->load->library('email');
      	
      	$vendorData= $this->session->userdata('vendorUser');
        $data['vendor'] = $vendorData;
        $this->load->view('include/header',$data);
      	
        $this->load->model('Home');	
     }
    
    

	public function index()
	{     $this->load->helper('url');
      $this->session->set_flashdata('msg','');
		$this->load->view('home');
		 $this->load->view('include/footer');
	}
    
      public function registration()
       {
        $this->load->model('Home');
        $data = array();
		$data['type']=$this->input->post('broker_type');
		$data['broker_name']=$this->input->post('broker_name');
        $data['name']=$this->input->post('name');
        $data['email']=$this->input->post('email');
        $data['password']=md5($this->input->post('pass'));
        $data['Address']=$this->input->post('Address');
        $data['city']=$this->input->post('city');
        $data['state']=$this->input->post('state');
        $data['pin']=$this->input->post('pin');
          $data['company_name']=$this->input->post('company_name');
          $data['phone']=$this->input->post('mob');
          $data['uniqueID'] = uniqid();
          $data['AuthToken'] = uniqid (rand ());
       // echo $data['password'];
      
      $vendorData =  $this->Home->registrationSubmit($data);
      if(!empty($vendorData)){
                	$sessArray['name'] = $vendorData['name'];
					$sessArray['email'] = $vendorData['email'];
                    $sessArray['uniqueID'] = $vendorData['uniqueID'];
                     $this->session->set_userdata('vendorUser',$sessArray);
                     redirect(base_url().'details?vendor_user='.$data['uniqueID']);
         
	}else{
	    redirect(base_url().'Dashboard/index');
	}
          
      }
    
    
 
    
    
    
    public function details()
	{
	    $this->load->helper('url');
        $this->load->model('home');
       if(!empty($this->input->post('license'))){
       
        $data = array();
		$data['email']=$this->session->userdata('email');
        $data['license']=$this->input->post('license');
        $data['brokerage_commission']=$this->input->post('brokerage_commission');
        $data['Equity_SEBI_Registration_No']=$this->input->post('Equity_SEBI_Registration_No');
        $data['gst']=$this->input->post('gst');
        $data['Exchange_Registration_Nos']=$this->input->post('Exchange_Registration_Nos');
        $data['NSE_TM_CODE']=$this->input->post('NSE_TM_CODE');
        $data['NSE_clr_no']=$this->input->post('NSE_clr_no');
          $data['BSE_Clearing_No']=$this->input->post('BSE_Clearing_No');
          $data['MSEI_TM_Code']=$this->input->post('MSEI_TM_Code');
          
       $data['Clearing_No']=$this->input->post('Clearing_No');
        $data['MCX_TM_No']=$this->input->post('MCX_TM_No');
        $data['mcx_Clearing_No']=$this->input->post('mcx_Clearing_No');
        $data['NCDEX_TM_No']=$this->input->post('NCDEX_TM_No');
        $data['ncdx_Clearing_No']=$this->input->post('ncdx_Clearing_No');
        $data['ICEX_TM_ID']=$this->input->post('ICEX_TM_ID');
        $data['SEBI_Registration_for_DP']=$this->input->post('SEBI_Registration_for_DP');
        $data['NSDL_DP_ID']=$this->input->post('NSDL_DP_ID');
          $data['CDSL_DP_ID']=$this->input->post('CDSL_DP_ID');
          $data['SEBI_Research_Analysts_No']=$this->input->post('SEBI_Research_Analysts_No');
         $data['SEBI_PMS_Registration_No']=$this->input->post('SEBI_PMS_Registration_No');
          $data['CMBPID_NCL_CM']=$this->input->post('CMBPID_NCL_CM');
          
          
          $vendorDetails =  $this->Home->submitVendorDetails($data);
          
           if(!empty($vendorDetails)){
               
               
               	$sessArray['id'] = $vendorDetails['id'];
				$sessArray['name'] = $vendorDetails['name'];
               	$sessArray['email'] = $vendorDetails['email'];
               	$this->session->set_userdata('vendorUser',$sessArray);
            	redirect(base_url().'Vendor/pricing');
           }
          
       }else{
		$this->load->view('details');
       }
        
	}
    
       
  ### PRicing  
     public function pricing()
	{
	    $data['packages']=$this->Home->getPackageInfo();
    	$this->load->view('pricing',$data);
     $this->load->view('include/footer');
	}
    
    
    
    
    
     public function logout()
	{   
	    $this->load->helper('url');
          $this->session->unset_userdata('vendorUser');
    
        redirect(base_url());
	}
    
    
      public function login(){ 
           if($this->Home->vendorAuthorise()==false){
          
          	$this->load->view('vendor_login');
            $this->load->view('include/footer');
           }else{
               redirect(base_url().'index');
           }
            
	}
	
	######################################
  ### For direct Emial Send to other page   
    public function ToRegister(){
        
       $this->load->helper('url');
        $this->load->model('Home');
        $data['vendorEmail'] = $this->session->userdata('email');
        $data['vendorPhone'] = $this->session->userdata('phone');
       
        $this->load->view('index',$data);
        $this->load->view('include/footer');
 
    
    }
    
	###############################################
    ### For Verify OTP and Next To Phone Number ###
    
       public function verifyOTP(){
        
         
	    $this->form_validation->set_message('is_unique', 'This email is already exist, Please try another.');
        $this->form_validation->set_rules('email','email','required|valid_email|is_unique[vendor.email]');
        
        if($this->form_validation->run() == false){
			$this->load->view('home');
			$this->load->view('include/footer');
	            //return "old";
        }else{
        $data['vendorEmail'] = $this->input->post('email');
        
        $this->session->set_userdata('email',$data['vendorEmail']);
        
        $otp = rand(111111,999999); 
        
        //echo $otp.' -set for- '. $this->session->userdata('email');
        $this->session->set_userdata('otp',$otp);
         
        
                    $this->email->from('mail2devicedisk@gmail.com', 'Brokers Bazaar ');
                    $this->email->to($data['vendorEmail']);
                   
                    $this->email->subject('Email verification code: '.$otp);
                    $this->email->message('Use this code to complete your profile on Brokers Bazaar Vendor Portal :- '.$otp);
			        $this->email->send();
				
				    $this->session->set_flashdata('msg','We have sent an OTP to your email.');
				    $this->load->view('home');
				    $this->load->view('include/footer');
        //return "New";

    }
    
    }
    
### TEST FOR OTP
 public function verify_otp(){
     
        $data['vendorEmail'] = $this->input->post('email');
        $data['otp'] = $this->input->post('otp');
        $gotp=  $this->session->userdata('otp');
        //echo $gotp.' '.$data['otp'];
    
        if($data['otp']==$gotp){
            
            echo "Done";
            
        }else {
            
            echo "Not Done";
        }
               
  
    }
    
####   For mobile verification

    public function mobile_verify(){
       
           $this->form_validation->set_message('is_unique', 'This Phone is already exist, Please try another.');
        $this->form_validation->set_rules('phone','phone','required|is_unique[vendor.phone]');
        
        if($this->form_validation->run() == false){
			$this->load->view('home_for_mobile');
			$this->load->view('include/footer');
	            //return "old";
        }else{
            $data['vendorphone'] = $this->input->post('phone');
            $this->session->set_userdata('phone',$data['vendorphone']);
            
            //echo "hello";
            // $m_otp = rand(11111,99999);
             $m_otp = "1234";
            $this->session->set_userdata('m_otp',$m_otp);
            //echo $m_otp.' -set for- '. $this->session->userdata('phone');
            $this->session->set_flashdata('msg','We have sent an OTP to your Mobile.');
            
        }
       
       
            $this->load->view('home_for_mobile');
            $this->load->view('include/footer');
       
    }
    
   ### Check Mobile OTP S VALID
   
    public function check_mobile_otp(){
        
        $data['vendorPhone'] = $this->input->post('phone');
        $data['otp'] = $this->input->post('otp');
        $motp=  $this->session->userdata('m_otp');
      
        if($data['otp']==$motp){
            
            echo "Done";
            
        }else {
            
            echo "Not Done";
        }
               
    
    }
    
    
    
    
     public function vendorLog()
	{
	    
	   
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run() == true){
	   
			$email = $this->input->post('email');
		  	$password = md5($this->input->post('password'));
            
			$vendorData = $this->Home->checkVendor($email, $password);
			
			if (!empty($vendorData)){
				
				$sessArray['id'] = $vendorData['id'];
				$sessArray['name'] = $vendorData['name'];
					$sessArray['email'] = $vendorData['email'];
                    $sessArray['uniqueID'] = $vendorData['uniqueID'];
                    $sessArray['phone'] = $vendorData['phone'];
					$this->session->set_userdata('vendorUser',$sessArray);
					redirect(base_url().'Dashboard/index');
				
			}else{
                //print_r($user);
                    $this->session->set_flashdata('msg','Email or password is not correct.');
                   redirect(base_url().'Vendor/login');
			}
			
		}
		else{
           
				 $this->load->view('Vendor/login');
		
		}
		
	    
	}
    
    
    
    public function page404()
	{
	    $this->load->helper('url');
        $this->load->view('404');
        $this->load->view('include/footer');
        
	}   
    
    
/////###### Forgot password



    public function forgot_password()
        	{
                $this->load->view('forgot_pass');
                                        	    
                                        	    
             }


    public function forgotPass()
                                {
	        $this->load->library('form_validation');
		    $this->form_validation->set_rules('email','Email','required|valid_email');
		
		if($this->form_validation->run() == true){
	        $email = $this->input->post('email');
			$userForgot = $this->Home->checkForgotEmail($email);
			
			if (!empty($userForgot)){
				    $this->load->library('email');
				
					$sessArray['email'] = $userForgot['email'];
                    $sessArray['AuthToken'] = $userForgot['AuthToken'];
                    
                    $this->email->from('galiyaraagroup@gmail.com', 'Kartik');
                    $this->email->to($sessArray['email']);
                    $newlink = base_url().'Vendor/AuthToken/'.$sessArray['AuthToken'];
                    $this->email->subject('BrokersBazaar Password Change');
                    $this->email->message('Please click here to reset your password - '.$newlink);
			        $this->email->send();
				
				  $this->session->set_flashdata('msg','We have sent a password reset link on your E-mail.');
				    $this->load->view('forgot_pass_thank');
				
			}else{
                //print_r($user);
                    $this->session->set_flashdata('msg','This Email does not exist.');
                   redirect(base_url().'Vendor/forgot_password');
			}
			
		}
		else{
           
				 $this->load->view('user/forgot_pass');
		
		}
		
		
	}


    public function AuthToken($token)
                                {
                                   $this->Token=$token;
                     $userToken = $token;
                     $userNewPawword = $this->Home->checkToken($userToken);
                      if (!empty($userNewPawword)){
                          $this->session->set_flashdata('msg','');
                         
                         	$this->session->set_userdata('token',$userToken);
                         
                         $this->load->view('newPassword'); 
                         
                      
                          
                      }else{
                           $this->session->set_flashdata('msg','<span style="color:red;">This link has expired, Please try again with new one</span>');
				            $this->load->view('forgot_pass_thank');
                      }
                      
                          
                                  
  }


    public function changePass()
                                {
               // echo "hello";
                $token = $this->session->userdata('token');
                
                 
		        $password = md5($this->input->post('password'));
		     
		        $updatePassword = md5($this->Home->updatePassword($password,$token));
		    
		        if (!empty($updatePassword)){
		           
		        $NewToken = uniqid (rand ());
		        
		        $updateToken = $this->Home->NewUpdateToken($NewToken,$token);
		         if (!empty($updateToken)){
		                    $this->session->unset_userdata('token');
		                    $this->session->set_flashdata('msg','<span style="">Your new password has been updated. please Login</span>');
				            $this->load->view('forgot_pass_thank');
		         }
		            
		        }
		                        
  }
    

   public function placeOrder(){
	     $data['formdata']=$this->input->post();
	     
	     
	   //  print_r($data);
	   $vendorData= $this->session->userdata('vendorUser');
	    $data['name'] = $vendorData['name'];
			$data['email'] =	$vendorData['email'];
       
	     $data['rozorpay_key'] = [
             'keyId' => 'rzp_test_2zWDIzYzbeZ23I',
             'secretKey' => 'ExcjYVxS7zTd3qn4dsvOSFZC'
         ];
       
         $this->load->view('razorpay/Razorpay',$data);
        
	   
	   
	} 
    	public function success()
        {  
            
         $this->load->helper('common_helper');
         $data['response'] = $this->input->post();
         $data['rozorpay_key'] = [
             'keyId' => 'rzp_test_2zWDIzYzbeZ23I',
             'secretKey' => 'ExcjYVxS7zTd3qn4dsvOSFZC'
         ];
         $user= $this->session->userdata('vendorUser')['email'];
         
         $this->load->view('razorpay/Razprpay_fetch_payment',$data);
        
    }
    public function PaymentSuccess(){
    //      $page['product_category'] = $this->Home->fetchProductCat();
	   //  $this->load->view('header_innerPage',$page);
      $this->load->view('success');
    //      $this->load->view('footer_inner'); 
    }
		public function order(){
		  
		  //	      $this->title="Order";  
		  // $page['title']=$this->title;
    //         $page['product_category'] = $this->Home->fetchProductCat();
	   //  $this->load->view('header_innerPage',$page);
            
    //          ## HEader
    //       $sliderImg = $this->Home->fetchHeaderImg();
    //     $page['sliderImgs'] =  $sliderImg['img'];
	   //$this->load->view('innerHeaderSlider',$page);
            
		    
		  //$this->load->view('order');
	   // $this->load->view('footer_inner');   
		}

    ///////class function
}




