<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLog extends CI_Model {

        public function submitUser($data){
    
            $this->db->insert('userbase',$data);
          
}

 


  public function checkUser($email, $password)
        {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        return $row = $this->db->get('userbase')->row_array();
     
     }
    public function checkUserOtp($email)
        {
        $this->db->where('phone',$email);
        // $this->db->where('password',$password);
        return $row = $this->db->get('userbase')->row_array();
     
     }
      public function authorise()
        {
      //  return $query = $this->db->get_where('user', array('email' => $email));
             $user = $this->session->userdata('userAuth');
          if(!empty($user)){
              return true;
          }else{
              return false;
          }
    
           
     }




 public function checkForgotEmail($email)
        {
        $this->db->where('email',$email);
        return $row = $this->db->get('userbase')->row_array();
     
     }



 public function checkToken($userToken)
        {
        $this->db->where('AuthToken',$userToken);
        return $row = $this->db->get('userbase')->row_array();
     
     }


public function updatePassword($password,$token)
        {
        $this->db->set('password',$password);
        $this->db->where('AuthToken',$token);
        
        return $row = $this->db->update('userbase');
     
     }


public function NewUpdateToken($NewToken,$token)
        {
        $this->db->set('AuthToken',$NewToken);
        $this->db->where('AuthToken',$token);
        
        return $row = $this->db->update('userbase');
     
     }
public function editData($data,$key,$tablename){
    $this->db->where('email',$key);
    return $this->db->update($tablename,$data);
}
public function getUserDetails($email){
    $this->db->where('email',$email);
    return $this->db->get('userbase')->result();
}

public function insertAddress($data,$tablename){
    $this->db->insert($tablename,$data);
}
public function getUserConnection($userEmail){
   
    $this->db->select('*');
$this->db->from('vendor');
$this->db->join('vendorConnection', 'vendor.email = vendorConnection.vendorID');
 $this->db->where('userEmail',$userEmail);
    return $this->db->get()->result();
}

}