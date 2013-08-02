<?php
  $json   = file_get_contents($TMP_FILE);
  $data   = json_decode($json, true);
  $fields = CSV_FIELDS();

  $ExcelFile = read_excel_2007($TMPL_FILE);
  $sheet = $ExcelFile->setActiveSheetIndex(0);

  foreach($data as $index => $item){
    foreach($fields as $col_index => $col_name){
      $row_index  = $index + 1;
      $cell_value = $item[$col_name];
      $sheet->setCellValueByColumnAndRow($col_index, $row_index, $cell_value);
    }
  }

  write_excel_2007($ExcelFile, $OUT_FILE);
?>