<?php


class Students_model extends CI_Model{

//    <!-- public $username;
//    public $email;
//    public $password;
//    public $address
//    public $retypePassword;
//    public $city;
//    public $submit;
//  -->

   public function getStudents(){
    
    // $query = $this->db->get('students');
    // return $query -> results_array();

    $query = $this->db->get('students');
    return $query -> result_array();

   }





















}