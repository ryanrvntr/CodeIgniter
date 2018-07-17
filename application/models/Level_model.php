<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model {

  public function create($data){
    return $this->db->insert('level', $data);
  }


  public function get_all()
  {
    $query = $this->db->get('level');
    return $query->result();
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('level');
  }

  

}

/* End of file Level__model.php */
/* Location: ./application/models/Level__model.php */