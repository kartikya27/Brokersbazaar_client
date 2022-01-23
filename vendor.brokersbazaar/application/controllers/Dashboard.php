<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
      function __construct(){
      parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('email');   	
      	

      	
        $this->load->model('Home');	
        
        $vendorData= $this->session->userdata('vendorUser');
            $data['vendor'] = $vendorData;
            $myEmail = $vendorData['email'];
            $connection['vendorConnection'] =$this->Home->getUpdateDetails($myEmail);
                    //print_r($connection);
                    
            $data['vendorConnection']=$connection['vendorConnection'];
            
            $this->load->view('dashboard_files/header',$data);
        
        
     }
    
    
    
    public function index()
            {
                
            if($this->Home->vendorAuthorise()==false){
                        
                redirect(base_url().'Vendor/login');
      
            }else{ 
                    $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
                     $data['newEnquiry']=$this->Home->newEnquiry($myEmail);
                     $data['confirm']=$this->Home->confirmEnquiry($myEmail);
                     $data['pending']=$this->Home->pendingEnquiry($myEmail);
                      $data['rejected']=$this->Home->rejectedEnquiry($myEmail);
                    //echo  $myEmail;
                    ### Fetch Connection Details;;
                    $connection['vendorConnection'] = $this->Home->checkForConnection($myEmail);
                    //print_r($connection);
                    if(empty($connection)){
                    $this->session->set_flashdata('msg','No Active Connection.');
                    }
                    else{
                    $data['vendorConnection']=$connection['vendorConnection'];
                    
                    }
                    // $this->load->view('include/vendorHeader',$data);
                    // $this->load->view('dashboard_files/header',$data);
                    $this->load->view('dashboard_files/index',$data);
                    // $this->load->view('include/footer');
                    
           }
    
            }
                                
 public function notification()
            {
                    if($this->Home->vendorAuthorise()==false){
                        
                redirect(base_url().'Vendor/login');
      
            }else{ 
                    $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
                    //echo  $myEmail;
                    ### Fetch Connection Details;;
                    $connection['vendorConnection'] = $this->Home->checkForConnection($myEmail);
                    //print_r($connection);
                    if(empty($connection)){
                    $this->session->set_flashdata('msg','No Active Connection.');
                    }
                    else{
                    $data['vendorConnection']=$connection['vendorConnection'];
                    
                    }
                    // $this->load->view('dashboard_files/header',$data);
                        $this->load->view('dashboard_files/notification',$data);
                    // $this->load->view('include/footer');
            }
            }    
    
    
    
    public function aprove_client(){
        $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
        $this->Home->aprove_client($myEmail);
        // echo "dome";
    }
    public function userProfile(){
                    if($this->Home->vendorAuthorise()==false){
                        
                redirect(base_url().'Vendor/login');
      
            }else{ 
                    $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
                    $data['vendorDetails']=$this->Home->getVendorDetails($myEmail);
                    $data['services']=$this->Home->getServices();
                    $data['vendor_services']=$this->Home->getVendorServices($myEmail);
                    $data['liecenses']=$this->Home->getLiecense($myEmail);
                    
                    
                    $this->load->view('dashboard_files/userProfile',$data);
                    $this->load->view('include/footer');
            }
                    
    }
    public function addServices(){
        $sercise=$this->input->post('services');
        $sercises['services']=implode(",",$sercise);
        $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
                $this->Home->updateDetials($myEmail,'vendor',$sercises); 
                 redirect(base_url().'Dashboard/userProfile');
    }
    public function cancel_req(){
        $email=$this->input->post('email');
        $name=$this->input->post('name');
        echo  $this->Home->cancel_req($email,$name);
    }
    public function update_save(){
                     $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
                    
        $data['gst']=$this->input->post('gst_in');
        $data['NSE_TM_CODE']=$this->input->post('nsetm_in');
        $data['NSE_clr_no']=$this->input->post('nsetm_clr_in');
        $data['BSE_Clearing_No']=$this->input->post('bse_cl_in');
        $data['MSEI_TM_Code']=$this->input->post('msei_in');
        $data['Clearing_No']=$this->input->post('msei_clr_in');
        $data['MCX_TM_No']=$this->input->post('mcxtm_in');
        $data['mcx_Clearing_No']=$this->input->post('mcx_clr_in');
        //,
        $data['SEBI_Registration_for_DP']=$this->input->post('sebi_r_dp_in');
        $data['ICEX_TM_ID']=$this->input->post('icex_in');//ICEX_TM_ID
      $data['NCDEX_TM_No']=$this->input->post('ncdex_in');
        $data['Exchange_Registration_Nos']=$this->input->post('exc_r_in');
        $data['ncdx_Clearing_No']=$this->input->post('ncdex_cl_in');
        $data['cdsl_in']=$this->input->post('cdsl_in');
        $data['SEBI_Research_Analysts_No']=$this->input->post('sebi_anyl_in');
        $data['NSDL_DP_ID']=$this->input->post('nsdl_in');
        $data['CDSL_DP_ID']=$this->input->post('cdsl_in');
        $data['sebi_anyl_in']=$this->input->post('sebi_anyl_in');
        $data['SEBI_PMS_Registration_No']=$this->input->post('sebi_pms_in');
        $data['CMBPID_NCL_CM']=$this->input->post('cmbpid_in');
        
      echo $preFillDetails =  $this->Home->update_save($data,$myEmail);
      if(!empty($preFillDetails)){
          
          
          
      }
      
            }
            
            
        public function editUserData(){
        $data=$this->input->get();
        // print_r($data);
        $email=$this->input->get('email');
       $tablename="vendor";
       $this->Home->editData($data,$email,$tablename);
        // $this->load->view('user_dashboard/footer');
        redirect(base_url().'Dashboard/userProfile');
    }      
            
     
    public function editAddressVerification(){
        $data['doc_type']=$this->input->post('doc_type');
        $filename=$this->session->userdata('vendorUser')['email'].date('d_m_y').($_FILES['filename']['name']);
        $tablename='vendor';
         $tmp_name = $_FILES["filename"]["tmp_name"];
        move_uploaded_file($tmp_name, "vendor_data/vendor_address/$filename");
         $data['filename']=$filename;
         $data['addressVerificationStatus']="Pending";
        $email= $this->session->userdata('vendorUser')['email'];
        $this->Home->editData($data,$email,$tablename);
        redirect(base_url().'Dashboard/userProfile'); 
    }        
            
            
            
   public function editUserImage(){
        $email=$this->session->userdata('vendorUser')['email'];
        $filename=$email.date('d_m_y').($_FILES['imageFile']['name']);
        $data['userImage']=$filename;
        $tmp_name = $_FILES["imageFile"]["tmp_name"];
        move_uploaded_file($tmp_name, "vendor_data/vendor_img/".$filename);
         $this->Home->editVendorImg($data,$email,'vendor');
        redirect(base_url().'Dashboard/userProfile'); 
    }        
            
            
            
        public function LeadsInsight(){
              if($this->Home->vendorAuthorise()==false){
                        
                redirect(base_url().'Vendor/login');
      
            }else{ 
                    $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
                     $data['newEnquiry']=$this->Home->newEnquiry($myEmail);
                     $data['confirm']=$this->Home->confirmEnquiry($myEmail);
                     $data['pending']=$this->Home->pendingEnquiry($myEmail);
                      $data['rejected']=$this->Home->rejectedEnquiry($myEmail);
                    //echo  $myEmail;
                    ### Fetch Connection Details;;
                    $connection['vendorConnection'] = $this->Home->checkForConnection($myEmail);
            $this->load->view('dashboard_files/LeadsInsight',$data);
            }
          
            
            
        }     
            
            
           public function FAQ(){
        // $this->load->view('dashboard_files/header'); 
        $this->load->view('dashboard_files/faq');
        
        
        
    }
        
       public function myLeads(){
            $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
           $data['users']=$this->Home->getUsers($myEmail);
              $this->load->view('dashboard_files/myLeads',$data);
       }     
            
   public function payment_history(){
       $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
       $data['history']=$this->Home->getPaymentHistory($myEmail);
       $this->load->view('dashboard_files/paymenthistory',$data);
   }        
            
            
      ###post_enquiry      
       public function post_enquiry(){
           $this->load->view('dashboard_files/post_enquiry');
       }      
 public function confirmRequest(){
     $id=$this->input->post('id');
     $data['status']="approved";
     $this->Home->updateStatus($id,'vendorConnection',$data); 
     redirect(base_url().'Dashboard/notification');
 }           
 public function rejRequest(){
     $id=$this->input->get('id');
     $data['status']="rejected";
     $this->Home->updateStatus($id,'vendorConnection',$data); 
     redirect(base_url().'Dashboard/notification');
 }           
            
  public function editOldService(){
    $sercise=$this->input->post('services');
    // print_r($sercise);
        $sercises['services']=implode(",",$sercise);
        $vendorData= $this->session->userdata('vendorUser');
                    $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
                $this->Home->editServices($myEmail,'vendor',$sercises); 
                 redirect(base_url().'Dashboard/userProfile');  
  }  
    public function editAboutVendor(){
        $data['aboutVendor']=$this->input->post('aboutVendor');
        $vendorData= $this->session->userdata('vendorUser');
                    // $data['vendor'] = $vendorData;
                    $myEmail = $vendorData['email'];
        $this->Home->updateData($myEmail,'vendor',$data); 
         redirect(base_url().'Dashboard/userProfile');  
    }
 #Class End Here   
}