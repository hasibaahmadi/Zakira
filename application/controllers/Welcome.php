<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


 
	public function index(){
	$data['main_content']='home';
	$this->load->view('tamplate/main',$data);
	}

	
	public function check_login(){
		$username=$this->input->post('username');
		$Pass=$this->input->post('pass');
		//echo $Password;
		//exit();
		$this->load->model('admin_model');
		$result=$this->admin_model->checklogin($username,$Pass);
		print_r($result);
		//exit();
		if($result){
			$this->session->set_userdata('admin_id',$result->admin_id);
			$this->session->set_userdata('username',$result->username);
			$this->session->set_userdata('Password',$result->Password);
			$this->session->set_userdata('photo',$result->photo);
			$this->session->set_userdata('isloged', true);
			redirect('Welcome/home');
		}
		else{
			$this->session->set_flashdata('msg','youre password is wrong');
			//echo $this->session->flashdata('msg');
			redirect('/');
		}
	}
	public function home(){
		$data['main_content']='home';
		 $this->load->view('tamplate/main',$data);	
	}
	public function logout(){
		$this->session->unset_userdata('admin_id');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('Password');
			$this->session->unset_userdata('photo');
			$this->session->unset_userdata('isloged', false);
		redirect('/');
	}
	
	function login(){
		$this->load->view('login');
	}
}
