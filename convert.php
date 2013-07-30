#!/usr/bin/php
<?php
  /* User Unix line endings with Sublime [View =>Line Endings => Unix] */

  include './PHPExcel/Classes/PHPExcel.php';
  include './PHPExcel/Classes/PHPExcel/Calculation.php';
  include './PHPExcel/Classes/PHPExcel/Cell.php';

  // vars
  $excel_file_type = 'Excel2007';
  $inputFileName   = './excel_import.xlsx';
  $outputFileName  = './out_excel_import.xlsx';

  // cleanup
  unlink($outputFileName);

  // open and load
  $objReader   = PHPExcel_IOFactory::createReader($excel_file_type);
  $objPHPExcel = $objReader->load($inputFileName);

  // Set Sheet
  $sheet = $objPHPExcel->setActiveSheetIndex(0);
  $sheet = $objPHPExcel->getActiveSheet();

  // Get value
  echo $sheet->getCell('A1')->getValue();
  echo $sheet->getCellByColumnAndRow(0, 1)->getValue();

  // Set value
  $cell_vall = 'Php Excel Exported';
  $sheet->setCellValue('A1', $cell_vall);
  $sheet->setCellValueByColumnAndRow(0, 1, $cell_vall);

  // Create writer and save
  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $excel_file_type);
  $objWriter->save($outputFileName);
?>