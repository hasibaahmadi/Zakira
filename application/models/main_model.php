<?php
class main_model extends CI_model{
public function get_admin_roles(){
   return $this->db->get('admin_roles')->result();
}
public function createroles($data){
return $this->db->insert('admin_roles',$data);
}
}
?>