<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

        public function getContent($tablename,$submenu,$column){
        $this->db->where($column,$submenu);
        return $row = $this->db->get($tablename)->result();
            
          
}

}
