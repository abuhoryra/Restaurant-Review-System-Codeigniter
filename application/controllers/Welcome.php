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
        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('lastname','Lastname','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('level','Level','required');
        if ($this->form_validation->run() == FALSE){
            
            $this->load->view('signup');
        }
        else{
            $this->load->model('Account');
            $this->Account->save_user_data();
            redirect('Welcome/login');
        }

	}
	
	public function user_login(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
         if ($this->form_validation->run() == FALSE){
            
            $this->load->view('login');
        }
        else{
        $username = $this->input->post('username');
       // $password = $this->input->post('password',true);
        $this->load->model('Account');
       // $result=$this->Account->login($username,$password);
        //$sdata=array();
         if($this->Account->login()){
            
            $user = $this->Account->getMyInfo($username);

            $sdata['id']=$user['id'];
            $sdata['username']=$user['username'];
            $sdata['level']=$user['level'];
            $this->session->set_userdata($sdata);
            if($user['level']==1){
                redirect('Restaurant/show_restaurant2');
            }
           elseif($user['level']==2){
                redirect('Welcome/admin_dash');
            }
        }
        else{
            $this->session->set_flashdata('failed', 'Invalid Username Or Password');
            redirect('Welcome/login');
        }
    }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('Welcome/login');
    }

    public function show_profile(){
        $this->load->model('Account');
        $data['sdata'] = $this->Account->fetch_profile_info();
        $data['idata'] = $this->Account->fetch_profile_image();
        $this->load->view('showprofile', $data);
    }

    public function update_user_info(){
        $this->load->model('Account');
        $this->Account->update_user_data();
        redirect('Welcome/show_profile');
    }
    public function update_user_pass(){
        $this->load->model('Account');
        $this->Account->update_user_password();
        redirect('Welcome/show_profile');
    }

     public function profile_img_upload(){
        $this->form_validation->set_rules('username','Already Uploaded','callback_img_valid');
        
        $config['upload_path']          = './profileimage/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['overwrite']            = false;
        $config['encrypt_name']         = true;
      
       
        $this->load->library('upload',$config);
       
        if(!$this->upload->do_upload('img')) {
            echo $this->upload->display_errors();
        }
        else {
                     $data = $this->upload->data();  
                     $config['image_library'] = 'gd2';  
                     $config['source_image'] = './profileimage/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '100%';  
                     $config['width'] = 400;  
                     $config['height'] = 400;  
                     $config['new_image'] = './upload/'.$data["file_name"]; 
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();  
            $data = array(
              
              'name' => $this->upload->file_name
            );
           
            
         $this->load->model('Account');
            $udata = $this->Account->fetch_profile_image();

            foreach ($udata->result() as $key) {
                 unlink('./profileimage/'.$key->name);

            }

           

             $this->db->where('username', $this->session->userdata('username'));
             $this->db->where('level', $this->session->userdata('level'));
             $this->db->update('profileimage', $data);
             redirect('Welcome/show_profile');
            
           
        }
    }


        public function img_valid(){
        $this->load->model('Account');
        if($this->Account->profile_img_check()){
          return true;
        }
        else {
          return false;
        }
    }


}
