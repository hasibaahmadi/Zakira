<?php
class student_model extends CI_model{
    function __construct(){
		parent::__construct();
        $this->load->database();
    }
    
    public function get_student($limit,$offset){

        return $this->db->get('student',$limit,$offset)->result(); 
    }
   
    public function save_student($data){
        return $this->db->insert('student',$data);
    }
    public function deletestudent($student_id){
        $this->db->where('student_id',$student_id);
        return $this->db->delete('student');
        
    }
    public function getsinglestudent($student_id){
        $this->db->where('student_id',$student_id);
        return $this->db->get('student')->row();
    }
    
public function update_student($data,$student_id){
    $this->db->where('student_id',$student_id);
    $this->db->update('student',$data);
}



public function checklogin($username,$pass){
    $this->db->where(['username'=>$username,'pass'=>$pass]);
   return $this->db->get('admin')->row();
}
function get_rooms() {
    return $this->db->select('*')->from('room')->get()->result_array();
}

function get_province() {

    return $this->db->select('province_id,province_name')->from('province')->get()->result_array();

}

function province(){
    $this->db->join('province','student.province_id=province.province_id');
    $query=$this->db->get('student');
    return $query->result();
}
}

    
    
    