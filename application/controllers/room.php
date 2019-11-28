<?php

class room extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('room_model');
        if(!$this->session->userdata['language']){
          $this->lang->load('eng',english);  
        }
        else{
          $this->lang->load('eng',$this->session->userdata['language']);
        }
        
    }
    
       function room_list(){
         // $this->load->model('room_model');
         $data['rooms']= $this->room_model->get_room();
         $data['main_content']='room/room_list';
         //print_r($data);
         $this->load->view('tamplate/main',$data);
 
        }
        function add_room(){
          $data['main_content']='room/new_room';
          $this->load->view('tamplate/main',$data);
  
      }
      function create_room(){
        // echo $this->input->post('name')
        
        // $this->load->model('room_model');
        $room_no = $this->input->post('room_no');
        $location = $this->input->post('location');
        $data=array(
         'room_no'=>$room_no, 
         'location'=>$location 
            
        );
       $this->room_model->save_room( $data);
      redirect('room/room_list');
 
     }
     function room_delete($room_no){
      // $this->load->model('room_model');
       $this->room_model->deleteroom($room_no);
       redirect('room/room_list');
   
     }
     public function edit_room($room_no ){
      $data['single_room'] = $this->room_model->getsingleroom($room_no );
       $data['main_content']='room/edit_room';
     // print_r( $data['room']);
      $this->load->view('tamplate/main',$data);
    }
    function update_room(){
     //  echo $this->input->post('name');
     $room_no = $this->input->post('room_no');
      $location = $this->input->post('location');
      $room_no=$this->input->post('room_id');
      $data=array(
       'room_no'=>$room_no, 
       'location'=>$location 
          
      );
     $this->room_model->update_room( $data,$room_no);
    redirect('room/room_list');

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