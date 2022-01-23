<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorDetails extends CI_Model {

        public function getVendor($vendor_id){
        $this->db->where('uniqueID',$vendor_id);
        return $row = $this->db->get('vendor')->row_array();
            
          
}


 public function getVendorList(){
        
        return $this->db->get('vendor')->result();
             
}


### SENT REQUEST TO VENDOR
public function sentRequest($data){
        
         $this->db->insert('vendorConnection',$data);
        //return $this->db->get('vendorConnection')->result();
             
}


public function getReqVendor($email){
    $this->db->where('userEmail',$email);
    return $this->db->get('vendorConnection')->result();
}







# CLASS ENDS
}