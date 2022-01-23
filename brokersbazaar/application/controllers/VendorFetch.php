<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorFetch extends CI_Controller {

   
     function __construct(){
      parent::__construct();
      
        //  $this->load->helper(array('url','form'));
      	$this->load->view('inc/head');
      	 $this->load->helper(array('url','form'));
      	$userSession= $this->session->userdata('userAuth');
        $data['logedUser'] = $userSession;
      
  
       $this->load->view('inc/header',$data);
       $this->load->model('VendorDetails');	
       $this->load->model('UserLog');	
      	
     }

    ### fetch vendor profile
     public function vendorProfile($venodor_name)
	{
	    $this->title="Vendor Details";  
	    $page['title']=$this->title;
	    #######  PAGE TITLE END;
	    
	    # GETTING VENDOR DETAILS FROM URL ;
	    $venodor_name = str_replace('%20', ' ', $venodor_name);
	    $vendor_id = $this->input->get('vendorID');
        $page['vendor_name'] = $venodor_name;
        
        # FEtch Details from Database MODEL
        $vendorDetails = $this->VendorDetails->getVendor($vendor_id);
        if(!empty($vendorDetails)){
         $page['vendorID'] = $vendorDetails['uniqueID'];
        $page['vendorName'] = $vendorDetails['name'];
        $page['vendorEmail'] = $vendorDetails['email'];
        $page['vendorCompanyName'] = $vendorDetails['company_name'];
        $page['vendorPhone'] = $vendorDetails['phone'];
        $page['vendorCity'] = $vendorDetails['city'];
         $page['services'] = $vendorDetails['services'];
          $page['aboutVendor'] = $vendorDetails['aboutVendor'];
        	$userSession= $this->session->userdata('userAuth');
        	 if(isset($userSession)){
        $email = $userSession['email'];
       
        $page['requestedVendors']=$this->VendorDetails->getReqVendor($email);
        # SEND DETAILS TO VIEW PAGE
	     $this->load->view('vendor_list/profile',$page);
        	 }else{
        	      $this->load->view('vendor_list/profile',$page);
        	 }
	  
	   // echo $venodor_name;
       // $this->load->view('404');
       
        }else{
            echo "error";
        }
        
        
         $this->load->view('inc/footer');
	}  


### Send request to vendor and connect to User vendorID

     public function connection()
	{
	    if($this->UserLog->authorise()==true){
	        
	        $userSession= $this->session->userdata('userAuth');
	       // ### here Send Connection to vendor
	       $selectedVendor = $_GET['vendorID'];
	        $selectedVendorEmail = $_GET['vendorEmail'];
	        
	        $userName = $userSession["name"];
	        $userEmail = $userSession['email'];
	       
	       $data['vendorID']= $selectedVendorEmail;
	       $data['vendorUniqeID']= $selectedVendor;
	       $data['userName']= $userName;
	       
	       $services=$_GET['services'];
	       $data['servicefor']=implode(",",$services);
	       $data['userEmail']= $userEmail;
	       $data['status']= "pending";
	       $data['date'] = date("Y/m/d");
	       
	       $vendorNotification = $this->VendorDetails->sentRequest($data);
	       ### Send Email to Vendor regarding ReQuest
	       $this->load->library('email');
                    $this->email->from('mail2devicedisk@gmail.com', 'Brokers Bazaar');
                    $this->email->to($selectedVendorEmail);
                    //$newlink = base_url().'User/AuthToken/'.$sessArray['AuthToken'];
                    $this->email->subject('BrokersBazaar User Connection');
                    $this->email->message('Dear Vendor "'.$userName.'" want to connect with you. Please Login to dashboard for more details.');
			        $this->email->send();
	       
	       
	       
	       $this->session->set_flashdata('msg', 'Your Request has been successfully sent to Vendor.');
	       
	        $this->load->view('msg_page');
	       
	       
	       $this->load->view('inc/footer');
	       
	    }else{
	        $this->session->set_flashdata('msg', 'Please login to send connection to a vender.');
	        redirect(base_url().'User/login?continue='.$_GET['continue']);
	    }
	    
	   
	}












}