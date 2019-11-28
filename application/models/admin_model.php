<?php
class admin_model extends CI_model{
    function __construct(){
		parent::__construct();
        $this->load->database();
    }
    public function get_admins($limit,$offset){

    return $this->db->get('admins',$limit,$offset)->result();
}
public function save_admin($data){
    return $this->db->insert('admins',$data);
}
public function regiester_admin($data){
    return $this->db->insert('admins',$data);
}
public function deleteadmin($admin_id){
    $this->db->where('admin_id',$admin_id);
    return $this->db->delete('admins');
}
public function getsingleadmin($admin_id){
    $this->db->where('admin_id',$admin_id);
    return $this->db->get('admins')->row();
}



public function update_admin($admin_id,$data){
    $this->db->where('admin_id',$admin_id);
   // $this->db->update('admin',$data);
    $this->db->update('admins',$data);
    
}


public function checklogin($username,$password){
    $this->db->where(['username'=>$username,'password'=>$password]);
   return $this->db->get('admins')->row();
}
}





