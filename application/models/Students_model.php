<?php


class Students_model extends CI_Model{


   public function getStudents(){
    
    // $query = $this->db->get('students');
    // return $query -> results_array();

    $query = $this->db->get('students');
    return $query -> result_array();

   }

   public function valid_user($username,$password){
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $query = $this->db->get('students');

      if($query->num_rows() > 0){
         return true;
      }else{
         return false;
      }

   }





















}