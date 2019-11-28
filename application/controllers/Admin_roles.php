<?php

class Admin_roles extends CI_Controller{
    function __construct(){
        parent::__construct();
       // $this->load->database();
        $this->load->model('main_model');
    }

function view_admin(){
  
    $this->load->model('main_model');
   $data['admin_roles']= $this->main_model->get_admin_roles();
   $data['main_content']='low/index';
   $this->load->view('tamplate/main',$data);
  
  
}
public function add_admin_form(){
    $data['main_content']='low/add_admin';
   $this->load->view('tamplate/main',$data);   
}
public function create_permission(){
    $low=$this->input->post('permission_name');
    $id=$this->session->userdata('$id');
    $lowdata=array(
      'name'=>$low,
'create_by'=>$id
    ) ;
    $this->main_model->createroles($lowdata);
}
}
?>