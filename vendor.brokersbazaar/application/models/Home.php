<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

        public function registrationSubmit($data){
      
            $this->db->insert('vendor',$data);
             $this->db->where('email',$data['email']);
            return $row = $this->db->get('vendor')->row_array();  
}


        public function submitVendorDetails($data){
      
            $this->db->insert('vendorDetails',$data);
             $this->db->where('email',$data['email']);
            return $row = $this->db->get('vendor')->row_array();  
}

public function editVendorImg($data,$key,$tablename){
    $this->db->where('email',$key);
    return $this->db->update($tablename,$data);
}
    
     public function checkVendor($email, $password)
        {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        return $row = $this->db->get('vendor')->row_array();
     
     }
    
     public function vendorAuthorise()
        {
      //  return $query = $this->db->get_where('user', array('email' => $email));
             $vendorData = $this->session->userdata('vendorUser');
          if(!empty($vendorData)){
              return true;
          }else{
              return false;
          }
}





 public function checkForgotEmail($email)
        {
        $this->db->where('email',$email);
        return $row = $this->db->get('vendor')->row_array();
     
     }



 public function checkToken($userToken)
        {
        $this->db->where('AuthToken',$userToken);
        return $row = $this->db->get('vendor')->row_array();
     
     }


public function updatePassword($password,$token)
        {
        $this->db->set('password',$password);
        $this->db->where('AuthToken',$token);
        
        return $row = $this->db->update('vendor');
     
     }


public function NewUpdateToken($NewToken,$token)
        {
        $this->db->set('AuthToken',$NewToken);
        $this->db->where('AuthToken',$token);
        
        return $row = $this->db->update('vendor');
     
     }


#### checkForConnection Vendor


public function checkForConnection($myEmail)
        {
            $this->db->distinct();
        $this->db->select('id,vendorID,userName,userEmail,status');
        $this->db->where('vendorID',$myEmail);
        return $this->db->get('vendorConnection')->result();
     }

public function aprove_client($myEmail){
   $this->db->set('status','approved');
  $this->db->where('vendorID',$myEmail);
   return $this->db->update('vendorConnection');
}
public function getUpdateDetails($myEmail){
    $this->db->where('email',$myEmail);
    return $this->db->get('vendorDetails')->result();
}

public function editData($data,$key,$tablename){
    $this->db->where('email',$key);
    return $this->db->update($tablename,$data);
}



##getVendorDetails
public function getVendorDetails($myEmail){
    $this->db->where('email',$myEmail);
    return $this->db->get('vendor')->result();
}

public function update_save($data,$email){

$this->db->where('email',$email);
 if($this->db->update('vendorDetails',$data)==1){
     $this->db-where('email',$email);
     return $this->db-get('vendorDetails')->row_array();
 }
 
}
public function cancel_req($email,$name){
    $this->db->where('email', $email);
    
}

//   public function getAllCart(){
//     $user= $this->session->userdata('vendorUser')['email'];
    
//     $order_id=$this->getLastOrder_id();
//     $this->db->where('username',$user);
//     // $this->db->order_by('id', 'DESC');
    
//     $query = $this->db->get('carttable');
//     foreach ($query->result() as $row){
//     $data = array(
//     'order_id'=>$order_id,
//     'pid' => $row->pid,
//     'p_quantity'  => $row->quantity,
// );
// $this->db->set($data);
// $this->db->insert('orders');
// }
    
    // }
//   public function getLastOrder_id(){
//         $user= $this->session->userdata('vendorUser')['email'];
//         //  SELECT order_id FROM payment_logs Where email='kartik@gmail.com' order by id desc limit 1
//          $sql = "SELECT order_id FROM payment_logs Where email like '%".$user."%'  order by id desc limit 1";
//         $result = $this->db->query($sql);
//         return $result->row()->order_id;
//     }
    public function getOrderData($email){
    //  $this->db->order_by('id','DESC');
    //     $this->db->like('email',$email);
    //      $query = $this->db->get('recevicedorder');
    //     return $query->result();
}
public function getPaymentHistory($email){
    $this->db->select('*');
$this->db->from('payment_logs');
$this->db->join('Package', 'payment_logs.package_id = Package.id');
$this->db->where('email',$email);


    
    return $this->db->get()->result();
}
public function getPackageInfo(){
    return $this->db->get('Package')->result();
}
public function newEnquiry($email){
    $query = $this->db->query('SELECT * FROM vendorConnection where vendorID="'.$email.'" order by id limit 5');
return $query->num_rows();
} 

public function confirmEnquiry($email){
     $query = $this->db->query('SELECT * FROM `vendorConnection` WHERE `status`="approved" and  vendorID="'.$email.'" ');
return $query->num_rows();
}

public function pendingEnquiry($email){
   $query = $this->db->query('SELECT * FROM `vendorConnection` WHERE `status`="pending"  and vendorID="'.$email.'" ');
return $query->num_rows();  
}
public function rejectedEnquiry($email){
   $query = $this->db->query('SELECT * FROM `vendorConnection` WHERE `status`="reject"  and vendorID="'.$email.'" ');
return $query->num_rows();    
}
public function getUsers($email){
 $this->db->select('*');
$this->db->from('vendorConnection');
$this->db->join('userbase', 'vendorConnection.userEmail = userbase.email');
$this->db->where('vendorID',$email); 
$this->db->where('status','approved'); 
return $this->db->get()->result();
}
public function getServices(){
    return $this->db->get('vendorServices')->result();
}
public function updateDetials($myEmail,$tablename,$sercises){
    
    $this->db->where('email',$myEmail);
    $this->db->select('services');
    $s=$this->db->get($tablename)->row()->services;
    $sercises['services']=$s.','.$sercises['services'];
    $this->db->where('email',$myEmail);
    $this->db->update($tablename,$sercises);
}
public function updateStatus($id,$tablename,$data){
    $this->db->where('id',$id);
    $this->db->update($tablename,$data);
}
public function getVendorServices($email){
     $this->db->where('email',$email);
     return  $this->db->get('vendor')->result();
}
public function getLiecense($email){
     $this->db->where('email',$email);
     return  $this->db->get('vendorDetails')->result();
}
public function editServices($myEmail,$tablename,$services){
    $this->db->where('email',$myEmail);
    $this->db->update($tablename,$services);
}
public function updateData($email,$tablename,$data){
    $this->db->where('email',$email);
    $this->db->update($tablename,$data);
}
}
?>