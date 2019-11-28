<?php

class province extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('province_model');
        if(!$this->session->userdata['language']){
          $this->lang->load('eng',english);  
        }
        else{
          $this->lang->load('eng',$this->session->userdata['language']);
        }
        
    }
    
       function province_list(){
         // $this->load->model('room_model');
         $data['province']= $this->province_model->get_province();
         $data['main_content']='province/province_list';
         //print_r($data);
         $this->load->view('tamplate/main',$data);
 
        }
        function add_province(){
          $data['main_content']='province/new_province';
          $this->load->view('tamplate/main',$data);
  
      }
      function create_province(){
        // echo $this->input->post('name')
        
        // $this->load->model('room_model');
       
        $province_name = $this->input->post('province_name');
        $data=array(
        
         'province_name'=>$province_name 
            
        );
       $this->province_model->save_province( $data);
      redirect('province/province_list');
 
     }
     function province_delete($province_id){
      // $this->load->model('room_model');
       $this->province_model->deleteprovince($province_id);
       redirect('province/province_list');
   
     }
     public function edit_province($province_id ){
      $data['single_province'] = $this->province_model->getsingleprovince($province_id );
       $data['main_content']='province/edit_province';
     // print_r( $data['room']);
      $this->load->view('tamplate/main',$data);
    }
    function update_province(){
     //  echo $this->input->post('name');
    
      $province_id = $this->input->post('pro_id');
     // $student_id =$this->input->post('s_id');
      $data=array(
       
       'province_name'=>$province_name
          
      );
     $this->province_model->update_province( $data,$province_id);
    redirect('province/province_list');

    }
  function welcome(){
    redirect('/');
  }
  function change_language($english){
    $this->session->set_userdata('language',$english);
   // redirect($this->session->userdata("last_visited"));
    redirect($_SERVER['HTTP_REFERER']); 
  }
      
  }