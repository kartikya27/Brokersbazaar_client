<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
    
    
    
    
        public function updateDetails($data,$column,$key,$tablename){
                    $this->db->where($column,$key);
                    return $this->db->update($tablename,$data);
        }
        
        public function getAllDetails($tablename){
                
        $query = $this->db->get($tablename);
        return $query->result();
      
        }
        
        ### InsrtDetails
        public function InsertDetails($data,$tablename){
     
            return   $this->db->insert($tablename,$data);
        }
        
             ### getSelectedDetails()
        public function getSelectedDetails($data,$column,$key,$tablename){
            $this->db->where($column,$key);        
            $query = $this->db->get($tablename);
            return $query->result();
      
        }
        
        ### Delete Selected ID
         public function deleteSingle($id,$tablename){
        $this->db->where('id',$id);
        $this->db->delete($tablename);
    }
        

public function addTestimonial($addTestimonialName,$addTestimonialimage,$addTestimonialmsg){
     $data = array(
             "id"=>0,
             "name"=>$addTestimonialName,
        'img' => $addTestimonialimage,
        "msg"=>$addTestimonialmsg
        );
      return   $this->db->insert('testimonial',$data);
}

 ##addMission
        public function addMission($addMissionName,$addMissionimage,$addMissionText){
     $data = array(
             "id"=>0,
             "title"=>$addMissionName,
        'img1' => $addMissionimage,
        "text"=>$addMissionText,
        "section"=>"mission"
        );
      return   $this->db->insert('aboutUs',$data);
}
     
public function getAboutUs(){
    return $this->db->get('aboutUs')->result();
}  
     ### nsrt Blog
     public function addBlog($addBlogName,$addBlogimage,$addBlogmsg){
     $data = array(
             "id"=>0,
             "title"=>$addBlogName,
        'img' => $addBlogimage,
        "blogContent"=>$addBlogmsg,
        "blog_date"=>date('Y/m/d'),
        );
      return   $this->db->insert('blog',$data);
}
     
     
     
      public function getTotalCountUser(){
             
        $query = $this->db->query('SELECT count(*) as "rowNumber" FROM userbase');
        return $query->result();
       }
       
        public function getTotalCountVendors(){
             
        $query = $this->db->query('SELECT count(*) as "rowNumber" FROM vendor');
        return $query->result();
       }
       
      
     public function insert_slider($filename,$sliderImageName,$sliderImageSubtitle,$sliderImagetext){
         $data = array(
             "id"=>0,
             "img"=>"slider-1.webp",
        'img2' => $filename,
        "title"=>$sliderImageName,
        "subTitle"=>$sliderImageSubtitle,
        "text"=>$sliderImagetext,
        );
         $this->db->insert('headerSlider',$data);
     }
     public function getAllPages(){
         return  $this->db->get('pageContent')->result();
     }
    public function addPageContent($data){
        $this->db->insert('pageContent',$data);
    }
   public function getMenus(){
       return $this->db->get('menu')->result();
   }
    public function getSubMenus(){
        
       return $this->db->get('subMenu')->result();
    }
    public function getAllPackages(){
      return $this->db->get('Package')->result();
    }
    // public function insertPackage($data){
    //     $this->db->insert('',$data);
    // }
    public function updateTable($data,$id,$tablename){
   $this->db->where('id',$id);
   $this->db->update($tablename,$data);
    }
    public function getMenues(){
        return $this->db->get('menu')->result();
    }
    public function getSubMenues(){
        return $this->db->get('subMenu')->result();
    }
    public function getUsers(){
        return $this->db->get('userbase')->result();
    }
       public function getVendors(){
        return $this->db->get('vendor')->result();
    }
    public function getAllServices(){
        return $this->db->get('vendorServices')->result();
    }
    public function getAll($tablename){
         return $this->db->get($tablename)->result();
    }
        }