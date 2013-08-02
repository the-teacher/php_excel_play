<?php
  $json = file_get_contents($TMP_FILE);
  $data = json_decode($json);

  foreach($data as $item){
    echo($item->{'excel_id'}).PHP_EOL;
  }

  // $ExcelFile = read_excel_2007($TMPL_FILE);
  // $sheet     = $ExcelFile->setActiveSheetIndex(0);

  // $fields = CSV_FIELDS();


  // foreach($fields as $col_index => $name){

  // }
?>