<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


	public function index()
	{
		$data['welcome'] = 'Student Management System';

		$this->load->view('templates/header');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');

		
	}

	public function signup()
	{

		$this->load->view('templates/header');
		$this->load->view('pages/signup');
		$this->load->view('templates/footer');
	}

	public function login(){
		$this->load->view('templates/header');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');

	}


	public function admin()
	{

		// $this->load->model('Students_model');

		$data['outPut'] = $this->Students_model->getStudents();

		$this->load->view('templates/header');
		$this->load->view('pages/admin', $data);
		$this->load->view('templates/footer');

	}

	public function login_user(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[10]');


		if($this->form_validation->run() == FALSE)
		{

		// redirect('Student/login');

		$this->load->view('templates/header');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
		}
		else
		{

			//retrieve data
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//access the model function
			$user = $this->Students_model->valid_user($username, $password);

			if($user)
			{

				$session_data = array(
					'username' => $username
				);

				$this->session->set_userdata($session_data);
				redirect('Student/admin');

			


				// if( != ''){


				// }else{
				// redirect('Student/login');
					
				// }
			
			}
			else
			{

				$this->session->set_flashdata('error', 'Invalid username or password');
				redirect('Student/login');

			}
		

		}
	}	


	public function logout_user(){
		$this->session->unset_userdata('username');
		redirect('Student/login');

	}

}
