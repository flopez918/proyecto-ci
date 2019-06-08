<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Nombre del archivo: empresa
 * Realizado: 27 de febrero de 2019
 * Versión: 1
 * Modificado: 1 de marzo de 2019.
 * Autor: xxxxxxxxxxxxxxxxxxx
 */
class Empresa extends CI_Controller {

    function __construct() {
        parent::__construct();

        //Carga del Modelo
        $this->load->model('mempresa');
        
    }

    function _load_layout($template, $data = '') {
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        // vista de contenido
        $this->load->view($template, $data);
        $this->load->view('layout/footer');
    }

    public function index() {
        //if ($this->session->userdata('email_per')) {            
            
            
            $data["empresa_data"] = $this->mempresa->obtener_datos();
            $this->_load_layout("lista_empresas", $data);
            //$this->_load_layout('lista_empresas');
        /*} else {
            redirect('/inicio');
        }*/
    }
    
    
    public function editar_empresa($id) {
        //if ($this->session->userdata('email_per')) {            
            
            
            $data["empresa_data"] = $this->mempresa->consultar_una_empresa($id);
            $this->_load_layout("editar_empresa", $data);
            //$this->_load_layout('lista_empresas');
        /*} else {
            redirect('/inicio');
        }*/
    }
    
    
    public function eliminar_empresa($id) {
        //if ($this->session->userdata('email_per')) {            
            
            
            $this->mempresa->eliminar_una_empresa($id);
            redirect('/empresa');
            
        /*} else {
            redirect('/inicio');
        }*/
    }
    
    public function actualizar_empresa() {
     
        
        //$this->_validateprop();
        $data = array(
            //'id_empresa' => $this->input->post('id_empresa'),
            'razon_social' => $this->input->post('razon_social'),
            'ubicacion' => $this->input->post('ubicacion'),
            'telefono' => $this->input->post('telefono'),
        );
        $this->mempresa->upd_empresa(array('id_empresa' => $this->input->post('id_empresa')), $data);
        redirect('/empresa');
    }
    
    public function vista_adicionar() {
        // if ($this->session->userdata('email_per')) {
        
        $this->_load_layout("adicionar_empresa");
        
        /*} else {
            redirect('/inicio');
        }*/
    }
    
     public function adicionar_empresa() {
        // if ($this->session->userdata('email_per')) {
        
        $this->mempresa->add_empresa();
         redirect('/empresa');
        /*} else {
            redirect('/inicio');
        }*/
    }
    
    
    
    function action()
     {
          //$this->load->model("excel_export_model");
          $this->load->library("excel");
          $object = new PHPExcel();

          $object->setActiveSheetIndex(0);

          $table_columns = array("Nit", "Nombre", "Ubicación", "Teléfono");

          $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $empresa_data = $this->mempresa->obtener_datos();

          $excel_row = 2;

          foreach($empresa_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id_empresa);
           $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->razon_social);
           $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->ubicacion);
           $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->telefono);      

           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Empresa Data.xls"');
          $object_writer->save('php://output');
     }
    
    

    
}
