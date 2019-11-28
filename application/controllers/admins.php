<?php

class admins extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('admin_model');
      //  $this->load->model('admin_model');
        if(!$this->session->userdata['language']){
          $this->lang->load('eng',english);  
        }
        else{
          $this->lang->load('eng',$this->session->userdata['language']);
        }
        
    }
    function admin_list(){
       // $this->load->model('admin_model');
       $offset=$this->uri->segment('3');
     echo $config['total_rows'] =$this->db->count_all('admins');
      $config['per_page'] =2;
      $config['base_url'] = base_url()."index.php/admins/admin_list";
     $config['uri_segment'] =3;
      $config['num_links'] =3;
      $this->pagination->initialize($config);

       
        $data['admins']=$this->admin_model->get_admins($config['per_page'],$offset);
        $data['main_content']='admin/admin_list';
        //print_r($data);
        $this->load->view('tamplate/main',$data);

    }
    function add_admin(){
        $data['main_content']='admin/new_usfaculty';
        $this->load->view('tamplate/main',$data);

    }
    
    
    function create_admin(){
        $this->load->model('admin_model');
       $firstname= $this->input->post('firstname');
       $lastname= $this->input->post('lastname');
       $position= $this->input->post('position');
    
       $password= $this->input->post('password');
      

      
       $data=array(
        'firstname'=>$firstname, 
        'lastname'=>$lastname, 
        'position'=>$position, 
        
        'password'=>$password, 
        
         
       );
       $this->admin_model->save_admin($data);
      redirect('admins/admin_list');

    }

    function admin_delete($admin_id){
        //$this->load->model('admin_model');
        $this->admin_model->deleteadmin($admin_id);
        redirect('admins/admin_list');
    
    }
    public function edit_admin($admin_id){
      $data['single_admins'] = $this->admin_model->getsingleadmin($admin_id);
       $data['main_content']='admin/edit_admin';
      //print_r( $data['admins']);
      $this->load->view('tamplate/main',$data);
    }
   
    public function update_admin(){
        $firstname= $this->input->post('firstname');
        $lastname= $this->input->post('lastname');
        $position= $this->input->post('position');
     
        $pass= $this->input->post('password');
        //$admin_type= $this->input->post('admin_type');
       // $id= $this->input->post('id');
 
        $data =array(
         'firstname'=>$firstname, 
         'lastname'=>$lastname, 
         'position'=>$position,  
         'password'=>$password,
        // 'photo_name'=>$this->upload->data('file_name'), 
         
        );
        if($password!=""){
            $data['password']=$password;
        }
          
        $this->admin_model->update_admin($admin_id,$data);
       redirect('admins/admin_list');
 
     }
     function regiester(){
      $this->load->view('register_view');
     }
     function create_register(){
      $data['firstname']= $this->input->post('fname');
      $data['lastname']= $this->input->post('lname');
      //$data['admine_type']= $this->input->post('type');
      $data['username']= $this->input->post('user_name');
      $data['password']= $this->input->post('pass');
      $this->admin_model->regiester_admin($data);
      redirect('Welcome/home');
     }
    
    
   
    

function change_language($english){
    $this->session->set_userdata('language',$english);
  // echo $this->session->userdata['language'];
   redirect($_SERVER['HTTP_REFERER']);
  // echo $english;
}
}

?>