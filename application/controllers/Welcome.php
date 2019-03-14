<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		redirect('Restaurant/show_restaurant');
	}

    public function signup(){
		$this->load->view('signup');
	}

    public function login(){
		if($this->session->userdata('username') && $this->session->userdata('level')==1){
                redirect('Restaurant/show_restaurant2');
        }
		$this->load->view('login');
	}

	public function admin_dash(){
		$this->load->view('admindash');
	}

	public function user_dash(){
		redirect('Restaurant/show_restaurant2');
	}

	public function user_data_insert(){
		$this->load->model('Account');
		$this->Account->save_user_data();
		redirect('Welcome/login');
	}
	
	public function user_login(){
        
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
        $this->load->model('Account');
        $result=$this->Account->login($username,$password);
        $sdata=array();
        if($result){
            $sdata['id']=$result['id'];
            $sdata['username']=$result['username'];
            $sdata['level']=$result['level'];
            $this->session->set_userdata($sdata);
            if($this->session->userdata('username') && $this->session->userdata('level')==1){
                redirect('Restaurant/show_restaurant2');
            }
           if($this->session->userdata('username') && $this->session->userdata('level')==2){
                redirect('Welcome/admin_dash');
            }
        }
        else{
            echo "Wrong";
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('Welcome/login');
    }
}
