<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingDB extends CI_Model {

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
	
    public function add_rating1($id) {
      $data = array(

           'resid' => $id,       
           'rating' => 1
        );
        $this->db->insert('addrating',$data);
      }
      public function add_rating2($id) {
      $data = array(

           'resid' => $id,       
           'rating' => 2
        );
        $this->db->insert('addrating',$data);
      }
      public function add_rating3($id) {
      $data = array(

           'resid' => $id,       
           'rating' => 3
        );
        $this->db->insert('addrating',$data);
      }
      public function add_rating4($id) {
      $data = array(

           'resid' => $id,       
           'rating' => 4
        );
        $this->db->insert('addrating',$data);
      }
      public function add_rating5($id) {
      $data = array(

           'resid' => $id,       
           'rating' => 5
        );
        $this->db->insert('addrating',$data);
      }

    	

	
}
