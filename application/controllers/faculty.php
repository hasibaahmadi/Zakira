<?php

class faculty extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('faculty_model');
        if(!$this->session->userdata['language']){
          $this->lang->load('eng',english);  
        }
        else{
          $this->lang->load('eng',$this->session->userdata['language']);
        }
        
    }
    
    function faculty_list(){
     // $this->load->model('faculty_model');
      $data['faculty']= $this->faculty_model->get_faculty();
         $data['main_content']='faculty/faculty_list';
  
         $this->load->view('tamplate/main',$data);

    }
    function add_faculty(){
      $data['main_content']='faculty/new_faculty';
      $this->load->view('tamplate/main',$data);

  }
  function create_faculty(){

  // $this->load->model('faculty_model');
   $f_name=$this->input->post('f_name');

    $data=array(
     'f_name'=>$f_name, 
        
    );
    $this->faculty_model->save_faculty($data);
   redirect('faculty/faculty_list');
  }

  function faculty_delete($F_id){
   // $this->load->model('faculty_model');
    $this->faculty_model->deletefaculty($F_id);
    redirect('faculty/faculty_list');
   // echo $faculty_id ;

}
 function edit_faculty($F_id ){
  $data['single_faculty'] = $this->faculty_model->getsinglefaculty($F_id );
 // $data['faculty'] = $this->faculty_model->getsinglefaculty($F_id );
   $data['main_content']='faculty/edit_faculty';
 // print_r( $data['faculty']);
  $this->load->view('tamplate/main',$data);
}
function update_faculty(){
  //  echo $this->input->post('name');
  
  $f_name=$this->input->post('f_name');
  $$F_id=$this->input->post('f_id');
   $data=array(
    'f_name'=>$f_name,
       
   );
  $this->faculty_model->update_faclty( $data,f_id);
  redirect('faculty/faculty_list');

  }
  function change_language($english){
    $this->session->set_userdata('language',$english);
   // redirect($this->session->userdata("last_visited"));
    redirect($_SERVER['HTTP_REFERER']); 
  }
}



  