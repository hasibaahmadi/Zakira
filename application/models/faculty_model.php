<?php
class faculty_model extends CI_model{
    function __construct(){
		parent::__construct();
        $this->load->database();
    }
    public function get_faculty(){
        return  $this->db->get('faculty')->result();
      }
      public function save_faculty($data){
        return $this->db->insert('faculty',$data);
    }
    public function deletefaculty($F_id ){
        $this->db->where('F_id',$F_id);
        return $this->db->delete('faculty');
    }
    public function getsinglefaculty($F_id ){
        $this->db->where('F_id',$F_id );
        return $this->db->get('F_id')->row();
  
    }  
    public function update_faclty($data,$faculty_id ){
        $this->db->where('F_id ',$F_id );
        $this->db->update('faculty',$data);
    }
    
}




