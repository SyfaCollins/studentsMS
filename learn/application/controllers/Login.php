<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){

		

		$this->load->view('pages/login_view');
	}



	public function login_user(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[16]');
	

	if($this->form_validation->run() == FALSE)
	{

		$this->load->view('pages/login_view');
	
	}
	else
	{

		//check if user exists in the data base
		
		// $authUsers = $this->Admins_model->userExists($username,$password);

		//dammy data^^^

		$authUsers = array(

			'admin' => $username,
			'admin123' => $password

		);

		//create sessionData

		$sessionData = array(
			'username' => $username,
			'password' => $password,
			'email'    => 'coniplexy@gmail.com'
		);

		// $sessionData = array(
		// 	'username' => $username,
		// 	'password' => $password,
		// 	'email'    => 'coniplexy@gmail.com'
		// );


	

			
		if($authUsers == FALSE){

			$this->session->set_flashdata('msg','invalid user');

			redirect('login/login_user',$data);
			

		}
		else
		{
			$this->session->set_userdata($sessionData);
			
			redirect('Dashboard');
			
	
		}


		}

	}

	public function logout_user(){

		$this->session->sess_destroy();

		$this->load->view('pages/login_view');
	}
	
}

