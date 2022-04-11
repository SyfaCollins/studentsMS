<?php

class Dashboard extends CI_Controller{

    public function index(){
        // echo 'This works';

        $access = $this->session->userdata('username');

        if($access){
            $this->load->view('pages/dashboard_view');

        }else{
            redirect('Login/login_user');
        }
    }









}