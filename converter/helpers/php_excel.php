<?php
  function read_excel_2007($file_path){
    $objReader   = PHPExcel_IOFactory::createReader('Excel2007');
    return $objReader->load($file_path);
  }
  function write_excel_2007($data, $file_path){
    $objWriter = PHPExcel_IOFactory::createWriter($data, 'Excel2007');
    $objWriter->save($file_path);
    return true;
  }
?>