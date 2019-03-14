<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends CI_Controller {

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
	
    public function rating1($rid){
      $this->load->model('RatingDB');
      $this->RatingDB->add_rating1($rid);
      redirect('Restaurant/show_restaurant2');

    }
    public function rating2($rid){
      $this->load->model('RatingDB');
      $this->RatingDB->add_rating2($rid);
      redirect('Restaurant/show_restaurant2');

    }
    public function rating3($rid){
      $this->load->model('RatingDB');
      $this->RatingDB->add_rating3($rid);
      redirect('Restaurant/show_restaurant2');

    }
    public function rating4($rid){
      $this->load->model('RatingDB');
      $this->RatingDB->add_rating4($rid);
      redirect('Restaurant/show_restaurant2');

    }
    public function rating5($rid){
      $this->load->model('RatingDB');
      $this->RatingDB->add_rating5($rid);
      redirect('Restaurant/show_restaurant2');

    }
    	

	
}
