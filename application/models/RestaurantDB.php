<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestaurantDB extends CI_Model {
 
  public function save_restaurant_data() {
    $data = array(
           'username' => $this->session->userdata('username'),
           'resname' => $this->input->post('resname'),
           'resadd' => $this->input->post('resadd'),
           'rescity' => $this->input->post('rescity'),
           'restag' => $this->input->post('restag'),
           'items' => implode(",", $this->input->post('items'))
    );
    $this->db->insert('addrestaurant',$data);
  }
  public function fetch_restaurant($limit,$start){
    $this->db->cache_on();
    $this->db->select('r.*, p.name')
                 ->from('addrestaurant r')
                 ->join('restaurantimage p', 'p.username=r.username')
                 ->order_by('id', 'DESC')
                 ->limit($limit,$start);
    $this->db->cache_off();
    $result = $this->db->get();
    return $result;

  }
  public function img_check() {  
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

  public function comment_insert($id){ 
    $data = array(
           
           'resid' => $id,
           'username' => $this->session->userdata('username'),
           'comment' => $this->input->post('comment')

        );
    $this->db->insert('comments', $data);
  }

  public function fetch_comment($id){
    return  $this->db->select('*')
                  ->from('comments')
                  ->where('resid',$id)
                  ->get()->result_array();
  }

  public function search_restaurant(){
    $search = $this->input->post('search');
    return $this->db->select('r.*, p.name')
                    ->from('addrestaurant r')
                    ->join('restaurantimage p', 'p.username=r.username')
                    ->like('r.resname',$search)
                    ->or_like('r.rescity',$search)
                    ->or_like('r.resadd',$search)
                    ->get();
                  
  }


  public function fetch_my_restaurant(){
    return $this->db->select('*')
                    ->from('addrestaurant')
                    ->where('username',$this->session->userdata('username'))
                    ->get();
  }

  public function fetch_restaurant_image(){

        return $this->db->select('*')
                        ->from('restaurantimage')
                        ->where('username', $this->session->userdata('username'))
                        ->get();
    }


    public function delete_restaurant($rid){
       $this->db->delete('addrestaurant', array('id' => $rid));
       $this->db->delete('restaurantimage', array('username' => $this->session->userdata('username')));
    }


    public function update_restaurant_data(){
        $data = array( 
           'resadd' => $this->input->post('resadd'),
           'rescity' => $this->input->post('rescity'),
           'restag' => $this->input->post('restag'),
           'items' => $this->input->post('items')
        );
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('addrestaurant', $data);
      }

  
}
