<?php
  function filled_row($sheet, $row){
    $fields = CSV_FIELDS();

    foreach($fields as $col_index => $name){
      if($col_index != 0){
        $cell_value  = $sheet->getCellByColumnAndRow($col_index, $row)->getValue();    
        $blank = empty($cell_value);
        if(!$blank){ return true; }
      }
    }
    return false;
  }
?>