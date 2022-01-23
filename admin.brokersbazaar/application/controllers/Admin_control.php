<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_control extends CI_Controller {
## Contruct here--->>>
      function __construct(){
      parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url','form');
        $this->load->library('email');
      	 $this->load->view('header');
        $this->load->model('AdminModel');	
     }
     
     
     public function index(){
         
         $data['totalUser']= $this->AdminModel->getTotalCountUser();
          $data['totalvendor']= $this->AdminModel->getTotalCountVendors();
         
                $this->load->view('index',$data);
                $this->load->view('footer');
     }
     
     
         public function slider()
	        {  
        $data['row']=$this->AdminModel->getSlider();
		$this->load->view('slider',$data);
		 $this->load->view('footer');
     
	        }
	        
    public function insert_slider(){
        $sliderImageName  = $this->input->post('sliderImageName');
        $sliderImageSubtitle  = $this->input->post('sliderImageSubtitle');
        $sliderImagetext  = $this->input->post('sliderImagetext');
        
        $filename=$_FILES['sliderImageAdd']['name'];
        $temp=$_FILES['sliderImageAdd']['tmp_name'];
        $filename=date("Y_m_d_h_i_s").$filename;
        if(move_uploaded_file($temp,'./img/banner/'.$filename)){}
        $this->AdminModel->insert_slider($filename,$sliderImageName,$sliderImageSubtitle,$sliderImagetext);
         redirect(base_url().'Admin_control/slider');
    }
     
     public function add_Package(){
         $data['row'] = $this->AdminModel->getAllPackages();
		$this->load->view('addPackage',$data);
		$this->load->view('footer');
     }
     
     public function addPackage(){
          $data=$this->input->post();
          $table= "Package";
		  	  $this->AdminModel->InsertDetails($data,$table);
		 
     	 redirect(base_url().'Admin_control/add_Package');
         }
       public function editPackage(){
           $data=$this->input->post();
           $id=$this->input->post('id');
           $this->AdminModel->updateTable($data,$id,'Package');
            redirect(base_url().'Admin_control/add_Package');
       }  
        
    ## Products Category 
      public function Package_Category(){
          
          if($this->input->post('product_category')){
		$product_category['product_cat'] = $this->input->post('product_category');
		//echo $menu_item;
		$this->load->model('AdminModel');
		$result = $this->AdminModel->addProduct_category($product_category);
		}
          if(!empty($result)){
              $this->session->set_flashdata('msg', 'Updated Successfully.');
          }
           $product['product_category'] = $this->AdminModel->getProCategory();
          
         
                $this->load->view('product_category',$product);
                $this->load->view('footer');
     }
     
     ### deleteProduct_category 
	public function deletePackage_category()
	    {
	$deleteProduct_category = $this->input->post('option');
	echo $this->AdminModel->deleteProduct_category($deleteProduct_category);
	    }
     
   ### Add AUto Function addFunction  
     
     	    public function testimonial()
	        {  
	             $data['row'] = $this->AdminModel->gettestimonial();
        
	    	$this->load->view('testimonial',$data);
     $this->load->view('footer');
	        }  
	         public function shipping_charge()
	        {  
	             $data['row'] = $this->AdminModel->getShippingCharge();
        
	    	$this->load->view('shipping_charge',$data);
     $this->load->view('footer');
	        }  
	        public function add_FAQ()
	        {  
        
	    	$this->load->view('add_FAQ');
     $this->load->view('footer');
	        }  
    
           public function addTestimonial(){
              $addTestimonialName  = $this->input->post('addTestimonialName'); 
		  	 $addTestimonialimage  = $_FILES['addTestimonialimage']['name'];
		  	 $addTestimonialimage=date("Y_m_d_h_i_s").$addTestimonialName;
		  	 $addTestimonialmsg  = $this->input->post('addTestimonialmsg');
		  	 if(move_uploaded_file($_FILES["addTestimonialimage"]["tmp_name"],'./images/04/'.$addTestimonialimage)){
		  	     
		  	 }
		  	  $this->AdminModel->addTestimonial($addTestimonialName,$addTestimonialimage,$addTestimonialmsg);
		  	 echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/testimonial');
          }
          
          
        public function all_package()
	        {  
	            $data['row'] = $this->AdminModel->getAllproducts();
        // $this-getOrders();
		$this->load->view('all_product',$data);
		 $this->load->view('footer');
		
		
     
	        }     
          
             public function orders()
	        {  
	            
         $data['row'] = $this->AdminModel->getOrders();
		$this->load->view('orders',$data);
		$this->load->view('footer');
     
	        }
          
     ## add_blog     
          public function add_blog()
	        {  
	            
         $data['row'] = $this->AdminModel->getAllBlogs();
		$this->load->view('blog',$data);
		$this->load->view('footer');
     
	        }
          
             public function addblog(){
              $addBlogName  = $this->input->post('addBlogName'); 
		  	 $addBlogimage  = $_FILES['addBlogimage']['name'];
		  	 $addBlogimage=$filename=date("Y_m_d_h_i_s").$addBlogimage;
		  	 $addBlogmsg  = $this->input->post('addBlogmsg');
		  	 if(move_uploaded_file($_FILES["addBlogimage"]["tmp_name"],'./img/'.$addBlogimage)){
		  	     
		  	 }
		  	  $this->AdminModel->addBlog($addBlogName,$addBlogimage,$addBlogmsg);
		  	 echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_blog');
          }
          
         #### add_mission
          public function add_mission(){
        $data['mission'] = $this->AdminModel->getMission();
		$this->load->view('mission',$data);
		$this->load->view('footer');
              
          }
          public function addMission(){
              $addMissionName  = $this->input->post('addMissionName'); 
		  	 $addMissionimage  = $_FILES['addMissionimage']['name'];
		  	 $addMissionimage=date("Y_m_d_h_i_s");
		  	 $addMissionText  = $this->input->post('addMissionText');
		  	 if(move_uploaded_file($_FILES["addMissionimage"]["tmp_name"],'./img/others/'.$addMissionimage)){
		  	     
		  	 }
		  	  $this->AdminModel->addMission($addMissionName,$addMissionimage,$addMissionText);
		  	 echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_mission');
          }
          
    
    public function add_services(){
       $data['row'] = $this->AdminModel->getServices();
		$this->load->view('add_services',$data);
		$this->load->view('footer');
    }
    public function addServices(){
       $data=$this->input->post();
        
        $this->AdminModel->InsertDetails($data,'vendorServices');;
         echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/servicePage');
    }
    public function add_solution(){
         $data['row'] = $this->AdminModel->getSolutions();
		$this->load->view('add_solutions',$data);
		$this->load->view('footer');
        
    }
    public function addSolution(){
        $data['name']=$this->input->post('name');
        $data['text']=$this->input->post('text');
        $data['img']  = $_FILES['img']['name'];
		 if(move_uploaded_file($_FILES["img"]["tmp_name"],'./img/solution/'.$data['img'])){
		  	     
		  	 }
        
        // $this->AdminModel->addServices($data);
        //  echo "<script>alert('Added !');</script>";
		$this->AdminModel->addSolution($data);
        // print_r( $data);
         echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_solution');
    }
    public function add_about_us(){
        $data['menus']=$this->AdminModel->getMenus();
        $data['submenus']=$this->AdminModel->getSubMenus();
        
       $data['row'] = $this->AdminModel->getAllPages();
		$this->load->view('add_about_us',$data);
		$this->load->view('footer');
    }
    public function addPageContent(){
        
       $data=$this->input->post();
       if(!empty($_FILES['bannerImage']['name'])){
       $data['bannerImage']  =date('y_m_d_h_i_s'). $_FILES['bannerImage']['name'];
		 if(move_uploaded_file($_FILES["bannerImage"]["tmp_name"],'./images/'.$data['bannerImage'])){
		  	     
		  	 }
       }
		  	 if(isset($_FILES['img1']['name'])){
        $data['img1']  = date('y_m_d_h_i_s').$_FILES['img1']['name'];
		 if(move_uploaded_file($_FILES["img1"]["tmp_name"],'./images/'.$data['img1'])){
		  	     
		  	 }
		  	 }
		  	 if(isset($_FILES['img2'])){
		  	  $data['img2']  = date('y_m_d_h_i_s').$_FILES['img2']['name'];
		 if(move_uploaded_file($_FILES["img2"]["tmp_name"],'./images/'.$data['img2'])){
		  	     
		  	 }
		  	 }
        $this->AdminModel->addPageContent($data);
         echo "<script>alert('Added !');</script>";
		  	 
     	 redirect(base_url().'Admin_control/add_about_us');
    }
    public function deleteS(){
        $id=$this->input->post('id');
        $tablename=$this->input->post('tablename');
        $this->AdminModel->deleteSingle($id,$tablename);
        
    }
    public function editData(){
        $tablename="headerSlider";
        
       $id=$this->input->post('id');
    //   echo $id;
       $allData['title']=$this->input->post('title');
       $allData['subTitle']=$this->input->post('subTitle');
       $allData['text']=$this->input->post('text');
       $allData['img2']=$_FILES['img2']['name'];
        $temp=$_FILES['img2']['tmp_name'];
        $filename=date("Y_m_d_h_i_s").$allData['img2'];
        // print_r($allData);
        if(move_uploaded_file($temp,'./img/banner/'.$filename)){}
    //   print_r($allData) ;
    $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/slider'); 
    }
    
    public function editAboutUs(){
        $tablename="aboutUs"; 
         $id=$this->input->post('id');
    //   echo $id;
       $allData['title']=$this->input->post('title');
    //   $allData['subTitle']=$this->input->post('subTitle');
       $allData['text']=$this->input->post('text');
       $allData['img1']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
       echo  $filename=date("Y_m_d_h_i_s").$allData['img1'];
        // print_r($allData);
        if(move_uploaded_file($temp,'./img/service/'.$filename)){}
    //   print_r($allData) ;
    $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_about_us'); 
    }
    public function editService(){
    $data=$this->input->post();
    $id=$this->input->post('id');
     $this->AdminModel->updateData($id,'vendorServices',$data);
     redirect(base_url().'Admin_control/servicePage'); 
    }
    public function editSolution(){
         $tablename="solution"; 
         $id=$this->input->post('id');
    //   echo $id;
       $allData['name']=$this->input->post('name');
    //   $allData['subTitle']=$this->input->post('subTitle');
       $allData['text']=$this->input->post('text');
       $allData['img']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
       $allData['img']=date("Y_m_d_h_i_s").$allData['img'];
        // print_r($allData);
        if(move_uploaded_file($temp,'./img/solution/'.$allData['img'])){}
    //   print_r($allData) ;
    $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_solution'); 
    }
    public function editBlog(){
         $tablename="blog"; 
        //  print_r($this->input->post());
         $id=$this->input->post('id');
    // //   echo $id;
      $allData['title']=$this->input->post('title');
    // //   $allData['subTitle']=$this->input->post('subTitle');
      $allData['blogContent']=$this->input->post('blogContent');
      $allData['img']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
        $allData['img']=date("Y_m_d_h_i_s").$allData['img'];
    //     // print_r($allData);
        if(move_uploaded_file($_FILES["img"]["tmp_name"],'./img/'.$allData['img'])){
		  	     
		  	 }
    //   print_r($allData) ;
   echo $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_blog'); 
    }
    public function editTestimonial(){
           $tablename="testimonial"; 
        //  print_r($this->input->post());
         $id=$this->input->post('id');
    // //   echo $id;
      $allData['name']=$this->input->post('name');
    // //   $allData['subTitle']=$this->input->post('subTitle');
      $allData['msg']=$this->input->post('msg');
      $allData['img']=$_FILES['img']['name'];
        $temp=$_FILES['img']['tmp_name'];
        $allData['img']=date("Y_m_d_h_i_s").$allData['img'];
    //     // print_r($allData);
         if(move_uploaded_file($_FILES["img"]["tmp_name"],'./images/04/'.$allData['img'])){
		  	     
		  	 }
    //   print_r($allData) ;
   echo $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/testimonial'); 
    }
    public function editMission(){
          $tablename="aboutUs"; 
        //  print_r($this->input->post());
         $id=$this->input->post('id');
    // //   echo $id;
      $allData['title']=$this->input->post('title');
    // //   $allData['subTitle']=$this->input->post('subTitle');
      $allData['text']=$this->input->post('text');
      $allData['img1']=$_FILES['img1']['name'];
        $temp=$_FILES['img1']['tmp_name'];
        $allData['img1']=date("Y_m_d_h_i_s").$allData['img1'];
    //     // print_r($allData);
         if(move_uploaded_file($_FILES["img1"]["tmp_name"],'./img/others/'.$allData['img1'])){
		  	     
		  	 }
    //   print_r($allData) ;
   echo $this->AdminModel->updateData($id,$tablename,$allData);
      redirect(base_url().'Admin_control/add_mission'); 
    }
    public function addShippingCharge(){
        $data['charge_value']=$this->input->post('charge_value');
        $data['type']=$this->input->post('type');
        $this->AdminModel->addShippingCharge($data);
         redirect(base_url().'Admin_control/shipping_charge'); 
    }
    public function editShippingCharge(){
        $id=$this->input->post('id');
         $data['charge_value']=$this->input->post('charge_value');
        $data['type']=$this->input->post('type');
        
        $this->AdminModel->updateData($id,'shippingcharge',$data);
      redirect(base_url().'Admin_control/shipping_charge'); 
    }
    public function client(){
       $data['row'] = $this->AdminModel->getAssociate('client');
        
	    	$this->load->view('client',$data);
     $this->load->view('footer');  
    }
    public function addClient(){
         $data['icon']=$_FILES['icon']['name'];
        $data['type']=$this->input->post('type');
         $temp=$_FILES['icon']['tmp_name'];
        $data['icon']=date("Y_m_d_h_i_s"). $data['icon'];
    //     // print_r($allData);
         if(move_uploaded_file($_FILES["icon"]["tmp_name"],'./img/client/'. $data['icon'])){
		  	     
		  	 }
        $this->AdminModel->addClient($data);
         redirect(base_url().'Admin_control/client'); 
    }
    public function associate(){
$data['row'] = $this->AdminModel->getAssociate('associate');
        
	    	$this->load->view('associate',$data);
     $this->load->view('footer');  
        
    }
    public function addAssociate(){
                //  $data['type']=$this->input->post('type');
        $data['type']=$this->input->post('type');
         $data['icon']=$_FILES['icon']['name'];
       
         $temp=$_FILES['icon']['tmp_name'];
        $data['icon']=date("Y_m_d_h_i_s"). $data['icon'];
    //     // print_r($allData);
         if(move_uploaded_file($_FILES["icon"]["tmp_name"],'./img/associate/'. $data['icon'])){
		  	     
		  	 }
        $this->AdminModel->addClient($data);
       
         redirect(base_url().'Admin_control/associate'); 

    }
    public function editPageContent(){
        // $data=$this->input->post();
        $id=$this->input->post('id');
        $data['menu']=$this->input->post('menu');
        $data['submenu']=$this->input->post('submenu');
        $data['bannerTitle']=$this->input->post('bannerTitle');
         $data['title']=$this->input->post('title');
        
         $data['text']=$this->input->post('text');
       if(!empty($_FILES['bannerImage']['name'])){
       $data['bannerImage']  =date('y_m_d_h_i_s'). $_FILES['bannerImage']['name'];
		 if(move_uploaded_file($_FILES["bannerImage"]["tmp_name"],'./images/'.$data['bannerImage'])){
		  	     
		  	 }
       }
		  	 if(!empty($_FILES['img1']['name'])){
        $data['img1']  = date('y_m_d_h_i_s').$_FILES['img1']['name'];
		 if(move_uploaded_file($_FILES["img1"]["tmp_name"],'./images/'.$data['img1'])){
		  	     
		  	 }
		  	 }
		  	 if(!empty($_FILES['img2']['name'])){
		  	  $data['img2']  = date('y_m_d_h_i_s').$_FILES['img2']['name'];
		 if(move_uploaded_file($_FILES["img2"]["tmp_name"],'./images/'.$data['img2'])){
		  	     
		  	 }
		  	 }
        // print_r($data);
         $this->AdminModel->updateTable($data,$id,'pageContent');
            redirect(base_url().'Admin_control/add_about_us');
        
    }
    public function add_Menu(){
          $data['row']=$this->AdminModel->getMenues();
           $this->load->view('addMenu',$data);
                $this->load->view('footer'); 
    }
     public function add_subMenu(){
          $data['row']=$this->AdminModel->getSubMenues();
           $this->load->view('add_subMenu',$data);
                $this->load->view('footer'); 
    }
    public function addMenu(){
        $data=$this->input->post();
       $this->AdminModel-> InsertDetails($data,'menu');
        redirect(base_url().'Admin_control/add_Menu');
    }
    public function addsubMenu(){
         $data=$this->input->post();
       $this->AdminModel-> InsertDetails($data,'subMenu');
        redirect(base_url().'Admin_control/add_subMenu');
    }
    public function editMenu(){
        $data=$this->input->post();
        $id=$this->input->post('id');
        $this->AdminModel->updateTable($data,$id,'menu');
         redirect(base_url().'Admin_control/add_Menu');
    }
     public function editSubMenu(){
        $data=$this->input->post();
        $id=$this->input->post('id');
        $this->AdminModel->updateTable($data,$id,'subMenu');
         redirect(base_url().'Admin_control/add_subMenu');
    }
    public function userPage(){
          $data['row']=$this->AdminModel->getUsers();
           $this->load->view('userPage',$data);
                $this->load->view('footer'); 
    }
    public function vendorPage(){
          $data['row']=$this->AdminModel->getVendors();
           $this->load->view('vendorPage',$data);
                $this->load->view('footer'); 
    }
    public function servicePage(){
          $data['row']=$this->AdminModel->getAllServices();
           $this->load->view('servicePage',$data);
                $this->load->view('footer'); 
    }
    public function vendorBanner(){
        $data['row']=$this->AdminModel->getAll('vendorHomePage');
           $this->load->view('vendorBanner',$data);
                $this->load->view('footer');  
    }
        }