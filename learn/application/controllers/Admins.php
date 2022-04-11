<?php


class Admins extends CI_Controller{

    public function index(){
        // echo 'This works';
       
        $data['results'] = $this->Admins_model->fetchData();
        $this->load->view('pages/admin/admins_view', $data);
    }



public function admin_add(){


    $this->load->view('pages/admin/admin_add_view');


}

public function admin_added(){


    // $this->model->load('Admins_model');
    $data['message'] = 'Admin successfully created';

    $this->Admins_model->createAdmin();
    $this->load->view('pages/admin/admin_show_view', $data);



}


}