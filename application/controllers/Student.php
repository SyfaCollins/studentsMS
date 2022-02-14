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




}
