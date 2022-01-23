 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

     function __construct(){
      parent::__construct();
        $this->load->model('UserLog');
        //  $this->load->helper(array('url','form'));
      	$this->load->view('inc/head');
      	 $this->load->helper(array('url','form'));
      	 
      	$userSession= $this->session->userdata('userAuth');
      
        $data['logedUser'] = $userSession;
      
//   	if(!empty($userSession)){
       $this->load->view('user_dashboard/header',$data);
    //   	}
      	
     }
    
 
 
 
  public function myaccount() {
      if($this->UserLog->authorise()==true){
              $this->load->view('user_dashboard/index');
            $this->load->view('user_dashboard/footer');
         }
         else{
	   redirect('user/login');
         }
         
        
        
    }
    
    
    
     public function userProfile() {
         
         if($this->UserLog->authorise()==true){
            //  $this->UserLog->getUserDetails();
             $userSession= $this->session->userdata('userAuth');
            //  print_r($userSession);
           $data['userdata']= $this->UserLog->getUserDetails($userSession['email']);
          $this->load->view('user_dashboard/userProfile',$data);
        $this->load->view('user_dashboard/footer');
    }
    else{
    redirect('user/login');
     }
         
     }
    public function editUserData(){
        $data=$this->input->get();
        // print_r($data);
        $email=$this->input->get('email');
       $tablename="userbase";
       $this->UserLog->editData($data,$email,$tablename);
        // $this->load->view('user_dashboard/footer');
        redirect(base_url().'User_dashboard/userProfile');
    }
    public function editUserAddress(){
        $email= $this->session->userdata('userAuth')['email'];
         $data=$this->input->post();
          $tablename="userbase";
          $this->UserLog->editData($data,$email,$tablename);
        // $this->load->view('user_dashboard/footer');
        redirect(base_url().'User_dashboard/userProfile'); 
    }
    
    public function editAddressVerification(){
        $data['doc_type']=$this->input->post('doc_type');
        $filename=$this->session->userdata('userAuth')['email'].date('d_m_y').($_FILES['filename']['name']);
        $tablename='userbase';
         $tmp_name = $_FILES["filename"]["tmp_name"];
        move_uploaded_file($tmp_name, "img/$filename");
         $data['filename']=$filename;
         $data['addressVerificationStatus']="Pending";
        $email= $this->session->userdata('userAuth')['email'];
        $this->UserLog->editData($data,$email,$tablename);
        redirect(base_url().'User_dashboard/userProfile'); 
    }
    
    public function editUserImage(){
        $email=$this->session->userdata('userAuth')['email'];
        $filename=$email.date('d_m_y').($_FILES['imageFile']['name']);
        $data['userImage']=$filename;
        $tmp_name = $_FILES["imageFile"]["tmp_name"];
        move_uploaded_file($tmp_name, "img/userimage/".$filename);
         $this->UserLog->editData($data,$email,'userbase');
        redirect(base_url().'User_dashboard/userProfile'); 
    }
    
    
    public function FAQ(){
        
        $this->load->view('user_dashboard/faq');
        $this->load->view('user_dashboard/footer'); 
        
        
    }
    
   #### myConnections
    
     public function myConnections(){
         
         $userSession= $this->session->userdata('userAuth');
        //  print_r($userSession);
        $data['connections'] =$this->UserLog->getUserConnection($userSession['email']);
        $this->load->view('user_dashboard/myconnection',$data);
        $this->load->view('user_dashboard/footer'); 
        
        
    }
    
    ####Support
     public function Support(){
        
        $this->load->view('user_dashboard/support');
        $this->load->view('user_dashboard/footer'); 
        
        
    }
    
    
    
    
    
    }