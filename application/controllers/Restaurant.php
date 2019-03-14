<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
    	public function add_restaurant()
	{
		$this->load->model('RestaurantDB');
		$this->RestaurantDB->save_restaurant_data();
		redirect('Welcome/admin_dash');
	}
	    public function show_restaurant()
	{
        $this->load->model('RestaurantDB');
        $data['rdata'] = $this->RestaurantDB->fetch_restaurant();
        $data['udata'] = $this->RestaurantDB->fetch_restaurant();
        
        $this->load->view('dash',$data);
       // $this->load->view('userdash',$data);
	}
	   public function show_restaurant2()
	{
        $this->load->model('RestaurantDB');
        //$this->load->model('RestaurantDB');
  
        $restaurents=$this->RestaurantDB->fetch_restaurant();
        foreach($restaurents->result() as $row) {

            $data[$row->username] = $this->RestaurantDB->fetch_comment($row->id);
        }
        $data['udata'] = $restaurents;
        $this->load->view('userdash', $data);
	}


          public function img_upload(){
        $this->form_validation->set_rules('username','Already Uploaded','callback_img_valid');
        
        $config['upload_path']          = './upload/';
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
                     $config['source_image'] = './upload/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '100%';  
                     $config['width'] = 400;  
                     $config['height'] = 400;  
                     $config['new_image'] = './upload/'.$data["file_name"]; 
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();  
            $data = array(
              'username' => $this->session->userdata('username'),
              'name' => $this->upload->file_name
            );
            if($this->form_validation->run()== FALSE){
              echo "You Already Upload Your Image";
            }
            else {
             $this->db->insert('restaurantimage',$data);
             redirect('Welcome/admin_dash');
            }
           
        }
    }







	    public function img_valid(){
        $this->load->model('RestaurantDB');
        if($this->RestaurantDB->img_check()){
          return true;
        }
        else {
          return false;
        }
    }

    public function save_comment($cid){
        if($this->session->userdata('username')){
        $this->load->model('RestaurantDB');
        $this->RestaurantDB->comment_insert($cid);
        redirect('Restaurant/show_restaurant2');
        }
        else{
            redirect('Welcome/login');
        }
    }

    public function restaurant_search(){
        $this->load->model('RestaurantDB');
        $restaurents=$this->RestaurantDB->search_restaurant();
        foreach($restaurents->result() as $row) {

            $data[$row->username] = $this->RestaurantDB->fetch_comment($row->id);
        }
        $data['udata'] = $restaurents;
        $this->load->view('search', $data);
    }

    	
}
