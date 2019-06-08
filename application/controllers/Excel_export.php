<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {
 
 function index()
 {
      $this->load->model("excel_export_model");
      $data["empresa_data"] = $this->excel_export_model->fetch_data();
      $this->load->view("excel_export_view", $data);
 }

 function action()
 {
      $this->load->model("excel_export_model");
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

      $empresa_data = $this->excel_export_model->fetch_data();

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
      header('Content-Disposition: attachment;filename="Employee Data.xls"');
      $object_writer->save('php://output');
 }

 
 
}
