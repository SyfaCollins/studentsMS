<?php

class Admins_model extends CI_Model{


 


    public function fetchData(){

        
        $query = $this->db->get('admins');

        return $query->result_array();
    }

    public function createAdmin(){

        $data = array(

            'firstname'  =>   $this->input->post('firstname'),
            'lastname'   =>   $this->input->post('lastname'),
            'email'      =>   $this->input->post('email'),
            'class'      =>   $this->input->post('class') 
        );

        return $this->db->insert('admins', $data);
    }


    public function userExists($username,$password){

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('login');

        if($query->num_rows() > 0){
            echo true;
        }else{
            echo false;
        }


    }
}