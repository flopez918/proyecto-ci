<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Nombre del archivo: experiencias
 * Realizado: 27 de febrero de 2019
 * Versión: 1
 * Modificado: 1 de marzo de 2019.
 * Autor: xxxxxxxxxxxxxxxxxxx
 */

class Mempresa extends CI_Model {

    var $order = array('razon_social' => 'asc');
    
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
        date_default_timezone_set("america/bogota");
    }
    
    function obtener_datos()
    {
          $this->db->order_by("razon_social", "ASC");
          $query = $this->db->get("empresa");
          return $query->result();
    }
    
    function consultar_una_empresa($id) {
        $this->db->select('*');
        $this->db->from('empresa');
        $this->db->where('id_empresa', $id);
        return $query = $this->db->get();
    }
    
    function add_empresa() {
        $data = array(
            'id_empresa' => $this->input->post('id_empresa'),
            'razon_social' => $this->input->post('razon_social'),
            'ubicacion' => $this->input->post('ubicacion'),
            'telefono' => $this->input->post('telefono'),
        );
        // inserta en la base de datos
        $this->db->insert('empresa', $data);
    }
    
    function upd_empresa($where, $data) {        
        $this->db->update('empresa', $data, $where);
        return $this->db->affected_rows();
        
    }
    
    function eliminar_una_empresa($id) {        
        $this->db->where('id_empresa', $id);
        $this->db->delete('empresa');
        return $this->db->affected_rows();
        
    }
 
    
    
}
