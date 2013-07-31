<?php
  include "$root_path/converter/table_fields.php";
  include "$root_path/converter/helpers/common.php";
  include "$root_path/converter/helpers/php_excel.php";
  include "$root_path/converter/helpers/converter.php";

  include "$root_path/PHPExcel/Classes/PHPExcel.php";
  include "$root_path/PHPExcel/Classes/PHPExcel/Calculation.php";
  include "$root_path/PHPExcel/Classes/PHPExcel/Cell.php";

  // config vars
  $res_json     = array();
  $shiftFromTop = 10;

  $inputFileName   = "$root_path/files/excel_import.xlsx";
  $outputFileName  = "$root_path/files/out_excel_import.xlsx";

  // cleanup
  rm_file($outputFileName);
  
  // read file, set sheet
  $ExcelFile = read_excel_2007($inputFileName);
  $sheet     = $ExcelFile->setActiveSheetIndex(0);

  // rows count
  $rows_count = $sheet->getHighestRow();

  // Build JSON
  for($row = $shiftFromTop; $row <= $rows_count; $row++){
    $filled = filled_row($sheet, $row);

    if($filled){
      $fields = CSV_FIELDS();
      $res_json[$row] = array();

      foreach($fields as $col_index => $name){
        $cell_value = $sheet->getCellByColumnAndRow($col_index, $row)->getValue();  
        $res_json[$row][$name] = $cell_value;
      }
    }
  }

  echo json_encode($res_json);
?>