<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public $Token;
    function __construct(){
      parent::__construct();
    //   $this->load->helper(array('url','form'));
         //$this->load->view('inc/head');
       	//$this->load->view('inc/header');
       $this->load->model('UserLog');
        $this->load->helper(array('url','form'));
        
        //$this->Token='';
        
     }

	    
         public function login()
	{
	     if($this->UserLog->authorise()==true){
             //$this->session->set_flashdata('msg','PLease login First.');
			   redirect(base_url().'index');
         }
	    $this->load->view('user/user_log');
	}
	
	
	      public function register()
	{
	     if($this->UserLog->authorise()==true){
             //$this->session->set_flashdata('msg','PLease login First.');
			   redirect(base_url().'index');
         }
	    $this->load->view('user/user_register');
	}
	
	public function submitRegisteration(){
	    
	    $this->load->library('form_validation');
	    $this->form_validation->set_message('is_unique', 'This details are already exist, Please try another.');
			  
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('email','email','required|valid_email|is_unique[userbase.email]');
		$this->form_validation->set_rules('phone','phone','required|is_unique[userbase.phone]');
		$this->form_validation->set_rules('password','Password','required');
		    
		    if($this->form_validation->run() == false){
			//$this->load->view('inc/header');
		 $this->load->view('user/user_register');
		        
		    }else{
		    $data = array();
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			$data['password'] = md5($this->input->post('password'));
			$data['AuthToken'] = uniqid (rand ());
			
			$this->UserLog->submitUser($data);
			
			$this->session->set_flashdata('msg', 'Your account has been created.');
			redirect(base_url().'User/register');
			
		    }
			
		
		
	}
	
	
	
	
	
	
	
		      public function Authlogin()
	{
	    
	   
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run() == true){
	   
			$email = $this->input->post('email');
		  	$password = md5($this->input->post('password'));
            
			$userSession = $this->UserLog->checkUser($email, $password);
			
			if (!empty($userSession)){
				
				
					$sessArray['id'] = $userSession['id'];
					$sessArray['name'] = $userSession['name'];
					$sessArray['email'] = $userSession['email'];
                    $sessArray['phone'] = $userSession['phone'];
                    $sessArray['dob'] = $userSession['dob'];
                    $sessArray['annualIncome'] = $userSession['annualIncome'];
					$this->session->set_userdata('userAuth',$sessArray);
				// 	redirect(base_url().'index');
				redirect($_GET['continue']);
				
			}else{
                //print_r($user);
                    $this->session->set_flashdata('msg','Email or password is not correct.');
                   redirect(base_url().'User/login?continue='.$_GET['continue']);
			}
			
		}
		else{
           
				 $this->load->view('user/user_log');
		
		}
		
		
	}
	
	 public function AuthloginOtp($email)
	{
	        //echo $email;

			$userSession = $this->UserLog->checkUserOtp($email);
			
			if (!empty($userSession)){
				
				
					$sessArray['id'] = $userSession['id'];
					$sessArray['name'] = $userSession['name'];
					$sessArray['email'] = $userSession['email'];
                    $sessArray['phone'] = $userSession['phone'];
					$this->session->set_userdata('userAuth',$sessArray);
					redirect(base_url().'index');
				
			}else{
                //print_r($user);
                    $this->session->set_flashdata('msg','Email or password is not correct.');
                   redirect(base_url().'User/login');
			}
			
// 		}
// 		else{
           
// 				 $this->load->view('user/user_log');
		
// 		}
		
		
	}
	
	
	
	
	
		      public function logout()
	{
	   $this->session->unset_userdata('userAuth');
        redirect(base_url().'');
	
	}
	
	
	public function otp_Process(){
	   // $mobilenumber=
	   $mobile = $_POST['mobilenumber'];
// 		echo $mobile;die;
		
		if($mobile!=''){
			
		
				
				$password = mt_rand(111111,999999); 
				$pass = $password;
				
					       
				        //$to_mobile = "9131974355";
			
						$message = "Dear Kartik, Welcome to BrokersBazaar .Your password : $password . Regard BrokersBazaar Team.";
						
					$this->do_address_message($mobile,$message);		
				
				
				echo $pass;
				
				
			}else{
				
				echo '0';
				
			}
	}
public	function do_address_message($mobile,$msg) 							
{	

		$credentials = array(   								
		"uname"      => 'adminSMS',								
			"pwd"        => 'SMS123',											
			"senderid"   => 'SOMARS',								
			"route"      => 'Trns'										
			);	

    $api_key = '55F19EE24BC712';
	
	$from = 'SOMARs';
	$sms_text = urlencode($msg);

	//Submit to server

	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, "http://websms.smsxperts.com/app/smsapi/index.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&campaign=0&routeid=9&type=text&contacts=".$mobile."&senderid=".$from."&msg=".$sms_text."&template_id=1207161433474618025");
	$response = curl_exec($ch);
	curl_close($ch);
// 	echo $response;

									 							
}




    public function forgot_password()
        	{
                $this->load->view('user/forgot_pass');
                                        	    
                                        	    
             }


    public function forgotPass()
                                {
	        $this->load->library('form_validation');
		    $this->form_validation->set_rules('email','Email','required|valid_email');
		
		if($this->form_validation->run() == true){
	        $email = $this->input->post('email');
			$userForgot = $this->UserLog->checkForgotEmail($email);
			
			if (!empty($userForgot)){
				    $this->load->library('email');
				
					$sessArray['email'] = $userForgot['email'];
                    $sessArray['AuthToken'] = $userForgot['AuthToken'];
                    
                    $this->email->from('mail2devicedisk@gmail.com', 'Brokers Bazaar');
                    $this->email->to($sessArray['email']);
                    $newlink = base_url().'User/AuthToken/'.$sessArray['AuthToken'];
                    $this->email->subject('BrokersBazaar Password Change');
                    $this->email->message('Please click here to reset your password - '.$newlink);
			        $this->email->send();
				
				  $this->session->set_flashdata('msg','We have sent a password reset link on your E-mail.');
				    $this->load->view('user/forgot_pass_thank');
				
			}else{
                //print_r($user);
                    $this->session->set_flashdata('msg','This Email does not exist.');
                   redirect(base_url().'User/forgot_password');
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
                     $userNewPawword = $this->UserLog->checkToken($userToken);
                      if (!empty($userNewPawword)){
                          $this->session->set_flashdata('msg','');
                         
                         	$this->session->set_userdata('token',$userToken);
                         
                         $this->load->view('user/newPassword'); 
                         
                      
                          
                      }else{
                           $this->session->set_flashdata('msg','<span style="color:red;">This link has expired, Please try again with new one</span>');
				            $this->load->view('user/forgot_pass_thank');
                      }
                      
                          
                                  
  }


    public function changePass()
                                {
               // echo "hello";
                $token = $this->session->userdata('token');
                
                 
		        $password = $this->input->post('password');
		     
		        $updatePassword = $this->Home->updatePassword($password,$token);
		    
		        if (!empty($updatePassword)){
		           
		        $NewToken = uniqid (rand ());
		        
		        $updateToken = $this->UserLog->NewUpdateToken($NewToken,$token);
		         if (!empty($updateToken)){
		                    $this->session->unset_userdata('token');
		                    $this->session->set_flashdata('msg','<span style="">Your new password has been updated. please Login</span>');
				            $this->load->view('user/forgot_pass_thank');
		         }
		            
		        }
		                        
  }






}
