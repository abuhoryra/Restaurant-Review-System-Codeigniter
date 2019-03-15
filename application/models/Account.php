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
        $pdata = array(
           
           'username' => $this->input->post('username'),
           'level' => $this->input->post('level')   
        );
        $this->db->insert('signup',$data);
        $this->db->insert('profileimage',$pdata);
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

    public function fetch_profile_info(){

        return $this->db->select('*')
                        ->from('signup')
                        ->where('username', $this->session->userdata('username'))
                        ->where('level', $this->session->userdata('level'))
                        ->get();
    }
    public function fetch_profile_image(){

        return $this->db->select('*')
                        ->from('profileimage')
                        ->where('username', $this->session->userdata('username'))
                        ->where('level', $this->session->userdata('level'))
                        ->get();
    }


    public function update_user_data(){
        $data = array(
           'firstname' => $this->input->post('firstname'),
           'lastname' => $this->input->post('lastname'),
           'username' => $this->input->post('username'),
           'email' => $this->input->post('email'),
           'password' => $this->input->post('password') 
        );
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->where('level', $this->session->userdata('level'));
        $this->db->update('signup', $data);
      }

 public function profile_img_check() {  
    $sis = $this->session->userdata('username');
    $result = $this->db->select('id')
                       ->from('restaurantimage')
                       ->where('username', $sis)
                       ->get()->row_array();
      
      if($result) 
          return false;
      else 
        return true;
  }
      
	
}
