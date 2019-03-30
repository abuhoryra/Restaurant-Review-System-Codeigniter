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
          $this->load->library('pagination');
            $config['base_url'] = base_url() . "Restaurant/show_restaurant";;
            $config['total_rows'] = $this->db->count_all('addrestaurant');
            $config['per_page'] = 8;
            $config["uri_segment"] = 3;
            $config['full_tag_open']  = '<div class="pagging text-center"><nav><ul class="pagination">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span></li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->load->model('RestaurantDB');
        $data['rdata'] = $this->RestaurantDB->fetch_restaurant($config["per_page"], $page);
        $data['udata'] = $this->RestaurantDB->fetch_restaurant($config["per_page"], $page);
        
        $this->load->view('dash',$data);
       // $this->load->view('userdash',$data);
	}
	   public function show_restaurant2()
	{
        $this->load->model('RestaurantDB');
        //$this->load->model('RestaurantDB');
            $this->load->library('pagination');
            $config['base_url'] = base_url() . "Restaurant/show_restaurant2";;
            $config['total_rows'] = $this->db->count_all('addrestaurant');
            $config['per_page'] = 8;
            $config["uri_segment"] = 3;
            $config['full_tag_open']  = '<div class="pagging text-center"><nav><ul class="pagination">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span></li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
  
        $restaurents=$this->RestaurantDB->fetch_restaurant($config["per_page"], $page);
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

    public function unauth_restaurant_search(){
        $this->load->model('RestaurantDB');
        $restaurents=$this->RestaurantDB->search_restaurant();
        $data['udata'] = $restaurents;
        $this->load->view('unauthsearch', $data);
    }

    public function my_restaurant(){
      $this->load->model('RestaurantDB');
      $data['sdata'] = $this->RestaurantDB->fetch_my_restaurant();
      $data['idata'] = $this->RestaurantDB->fetch_restaurant_image();
      $this->load->view('myrestaurant', $data);
    }

     public function update_restaurant_image(){
        $this->form_validation->set_rules('username','Already Uploaded','callback_img_valid_update');
        
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
              
              'name' => $this->upload->file_name
            );
             $this->load->model('RestaurantDB');
              $rdata = $this->RestaurantDB->fetch_restaurant_image();
              foreach ($rdata->result() as $key) {
                 unlink('./upload/'.$key->name);

            }
            
             $this->db->where('username', $this->session->userdata('username'));
             $this->db->update('restaurantimage', $data);
             redirect('Restaurant/my_restaurant');
            
           
        }
    }


    public function img_valid_update(){
        $this->load->model('Account');
        if($this->Account->profile_img_check()){
          return true;
        }
        else {
          return false;
        }
    }

    public function restaurant_delete($id){
      $this->load->model('RestaurantDB');
      $this->RestaurantDB->delete_restaurant($id);
      redirect('Restaurant/my_restaurant');
    }

    public function restaurant_data_update(){
      $this->load->model('RestaurantDB');
      $this->RestaurantDB->update_restaurant_data();
      redirect('Restaurant/my_restaurant');
    }

    	
}
