<?php
class Excel_export_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
     function fetch_data()
     {
      $this->db->order_by("razon_social", "ASC");
      $query = $this->db->get("empresa");
      return $query->result();
     }

 
}