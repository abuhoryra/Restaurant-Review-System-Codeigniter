<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Model {

	
    
    public function save_user_data(){
    	  $data = array(
           'firstname' => $this->input->post('firstname'),
           'lastname' => $this->input->post('lastname'),
           'username' => $this->input->post('username'),
           'email' => $this->input->post('email'),
           'password' => $this->input->post('password'),
           'level' => $this->input->post('level')   
        );
        $this->db->insert('signup',$data);
    	}
    	
    public function login($username,$password){
        $this->db->select('*');
        $this->db->from('signup');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=$this->db->get();
        $result=$query->row_array();
        return $result;
    }

      
	
}
