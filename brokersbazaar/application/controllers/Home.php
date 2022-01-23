<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

     function __construct(){
      parent::__construct();

        //  $this->load->helper(array('url','form'));
      	$this->load->view('inc/head');
      	 $this->load->helper(array('url','form'));
      	$userSession= $this->session->userdata('userAuth');
        $data['logedUser'] = $userSession;
      

       $this->load->view('inc/header',$data);
      	
      	      
     }
    
    
	public function index()
	{
	    
	 	$this->load->model('VendorDetails');
	    $data['vendor'] = $this->VendorDetails->getVendorList();    
	    
	    
		$this->load->view('index',$data);
	}
    
    
    public function about_us()
	{
	    $this->title="about_us";  
	    $page['title']=$this->title;   
		$this->load->view('about-us',$page);
	}
    
  
    
    
    public function our_team()
	{
	     $this->title="our_team";  
	    $page['title']=$this->title;   
		$this->load->view('our-team',$page);
	}
    
    
    public function career_submit()
	{
	     $this->title="career";  
	    $page['title']=$this->title;  
	    
/////////////////////////////////////////  

	    $name=$_POST['name'];
 $date = date('Y-m-d H:i:s');
$IDDocs = $_FILES['resume']['name'];

$_SESSION['newFileName'] = $name."_resume_".$date;
$IDDocs_path = "resume";
    
   if($_FILES["resume"]["name"]){
  $IDDoca_file_extension = strtolower( strrchr( $_FILES["resume"]["name"], "." ) );
 $IDDocs_name			=	$_SESSION['newFileName'].$IDDoca_file_extension;
$IDDocsFilePath			="$IDDocs_path/$IDDocs_name";
 move_uploaded_file($_FILES["resume"]["tmp_name"],$IDDocsFilePath); 
      // echo "hello";
   }
	    
/////////////////////////////////	    
	    	$this->session->set_flashdata('msg', 'Your Resume Submited, Thank You.');
			redirect(base_url().'career',$page);  
	    
	//	$this->load->view('career',$page);
	}
    
       public function career()
	{
	     $this->title="career";  
	    $page['title']=$this->title;   
		$this->load->view('career',$page);
	}
    
    
    public function page($pagename)
	{
	        $submenu = str_replace('%20', ' ', $pagename);
	        //$submenu = $pagename;
	        $this->title=$submenu;  
	        $page['title']=$this->title;
	        $tablename = "pageContent";
	        $submenu = $submenu;
	        $column ="submenu";
	        $this->load->model('HomeModel');
	        $page['pageContent'] = $this->HomeModel->getContent($tablename,$submenu,$column);
	        $this->load->view('page',$page);
	}
    
    
    
  
    
     public function page404()
	{
	    $this->load->helper('url');
        $this->load->view('404');
        $this->load->view('inc/footer');
        
	}   
    
  
 
       public function more_vendor()
	{
	    
	   // $this->title="More Vendor to Show";  
	   // $page['title']=$this->title; 
	    $this->load->model('VendorDetails');
	    $vendorList['row'] = $this->VendorDetails->getVendorList(); 
	    

        $this->load->view('vendor_list/all_vendor',$vendorList);
        $this->load->view('inc/footer');
        
	} 
    
    
  
     

    
    
    
    
    
    
    
    
}
