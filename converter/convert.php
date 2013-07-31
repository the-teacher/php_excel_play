<?php
  include "$root_path/converter/helpers.php";

  include "$root_path/PHPExcel/Classes/PHPExcel.php";
  include "$root_path/PHPExcel/Classes/PHPExcel/Calculation.php";
  include "$root_path/PHPExcel/Classes/PHPExcel/Cell.php";

  // vars
  $excel_file_type = 'Excel2007';
  $inputFileName   = "$root_path/files/excel_import.xlsx";
  $outputFileName  = "$root_path/files/out_excel_import.xlsx";

  // cleanup
  rm_file($outputFileName);

  // // open and load
  $objReader   = PHPExcel_IOFactory::createReader($excel_file_type);
  $objPHPExcel = $objReader->load($inputFileName);

  // // Set Sheet
  $sheet = $objPHPExcel->setActiveSheetIndex(0);
  $sheet = $objPHPExcel->getActiveSheet();

  // Get value
  // echo $sheet->getCell('A1')->getValue();
  // echo $sheet->getCellByColumnAndRow(0, 1)->getValue();

  // // Set value
  $cell_vall = 'Php Excel Exported';
  // $sheet->setCellValue('A1', $cell_vall);
  $sheet->setCellValueByColumnAndRow(0, 1, $cell_vall);

  // // rows count
  // echo $sheet->getHighestRow();

  // // Create writer and save
  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $excel_file_type);
  $objWriter->save($outputFileName);
?>