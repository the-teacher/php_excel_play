<?php
  // config vars
  $res_json     = array();
  $shiftFromTop = 10;
  
  // read file, set sheet
  $ExcelFile = read_excel_2007($SRC_FILE);
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

  $json = json_encode($res_json);
  $tmpf = fopen($TMP_FILE, 'w');
  fwrite($tmpf, $json);
?>