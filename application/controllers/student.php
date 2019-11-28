<?php

class student extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('student_model');
        if(!$this->session->userdata['language']){
          $this->lang->load('eng',english);  
        }
        else{
          $this->lang->load('eng',$this->session->userdata['language']);
        }
        
    }
    
     function student_list(){
     
      $this->session->set_userdata('last_visited',current_url());
      $offset=$this->uri->segment('3');
     $config['total_rows'] =$this->db->count_all('student');
     $config['per_page'] = 5;
     $config['base_url'] = base_url()."index.php/student/student_list";
    // $data['province'] = $this->student_model->get_province();
    $config['uri_segment'] =3;
    
     $this->pagination->initialize($config);
     
    // $data['students']=$this->student_model->get_stuent($config['per_page'],$offset);
     $data['students']=$this->student_model->province();
     $data['main_content']='students/student_list';
       //print_r($data);
       $this->load->view('tamplate/main',$data);

     }
     function add_student(){
     // $data['main_content']='students/new_student';
      // $this->load->view('students/new_student');
      $data['rooms'] = $this->student_model->get_rooms();
     $data['province'] = $this->student_model->get_province();
       $data['main_content']='students/new_student';
      // $this->load->view('students/new_student',$data);
       $this->load->view('tamplate/main',$data);

   }
   function create_student(){
    $this->session->set_userdata('last_visited',current_url());
  $this->load->model('student_model');
   $firstname= $this->input->post('firstname');
   $lastname= $this->input->post('lastname');
   $fathername= $this->input->post('fathername');
   $room_no= $this->input->post('room_no');
   $province_id= $this->input->post('province');
  $student_phone= $this->input->post('student_phone');
  
  $validate= array(
    array(
      'field'=>'firstname',
      'lable'=>'firstname',
      'rules'=>'required'
    ),
    array(
      'field'=>'lastname',
      'lable'=>'lastname',
      'rules'=>'required'
    ),
    array(
      'field'=>'fathername',
      'lable'=>'fathername',
      'rules'=>'required'
    ),
    array(
      'field'=>'room_no',
      'lable'=>'room_no',
      'rules'=>'required'
    ),
    array(
      'field'=>'province',
      'lable'=>'province',
      'rules'=>'required'
    ),
    array(
      'field'=>'student_phone',
      'lable'=>'student_phone',
      'rules'=>'required|min_length[10]'
    ),
  );

  $this->load->library('form_validation');
  $this->form_validation->set_rules($validate);

  if($this->form_validation->run() == false){
  
     $this->session->set_flashdata('validation', validation_errors());
    //echo validation_errors();
   // return false;
    redirect('student/add_student');

}
  if($_FILES['user_photo']['name']){
    $config['file_name']=time();
    $config['allowed_types']='gif|jpg|png|jpeg|pdf';
    $config['upload_path']='./upload_iamge';
   // $config['max_size']             = 500;
   // $config['max_width']            = 1024;
  //  $config['max_height']           = 768;
  
 $this->load->library('upload');
 $this->upload->initialize($config);
 if($this->upload->do_upload('user_photo')){
   $uploadData=$this->upload->data();
   $photo_name=$uploadData['file_name'];

   }
   else{
     echo "wrong";
   }
  }
  else{
    $photo_name="default.jpg";
   }



  
  
  $data=array(
    'firstname'=>$firstname, 
    'lastname'=>$lastname, 
    'fathername'=>$fathername,
    'photo'=>$_FILES['user_photo']['name'],
    'student_phone'=>$student_phone, 
    'room_no'=>$room_no,
    'province_id'=>$province_id
   );
 $this->student_model->save_student($data);
  redirect('student/student_list');

}
function student_delete($student_id ){
    
  //$this->load->model('admin_model');
  $this->student_model->deletestudent($student_id );
  redirect('student/student_list');
  

}

function edit_student($student_id){
 // $this->session->set_userdata('last_visited',current_url());
  $data['single_student'] = $this->student_model->getsinglestudent($student_id );
 
   $data['main_content']='students/edit_student';
  //print_r( $data['student']);
  $this->load->view('tamplate/main',$data);
}

function update_student(){
  $this->load->model('student_model');
  $firstname= $this->input->post('firstname');
  $lastname= $this->input->post('lastname');
  $fathername= $this->input->post('fathername');
  $photo= $this->input->post('photo');
 $student_phone= $this->input->post('student_phone');
 $student_id =$this->input->post('s_id');
 $data=array(
   'firstname'=>$firstname, 
   'lastname'=>$lastname, 
   'fathername'=>$fathername,
   'student_phone'=>$student_phone, 
  );
  $this->student_model->update_student($data,$student_id);
  // $this->admin_model->update_admin($id,$data);
  redirect('student/student_list');
}
   
function change_language($english){
  $this->session->set_userdata('language',$english);
 // redirect($this->session->userdata("last_visited"));
  redirect($_SERVER['HTTP_REFERER']); 
}
}



