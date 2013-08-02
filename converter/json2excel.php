<?php
  $json = file_get_contents($TMP_FILE);
  $data = json_decode($json, true);
  $fields = CSV_FIELDS();

  foreach($data as $index => $item){
    foreach($fields as $col_index => $name){
      echo "$name: $item[$name]".PHP_EOL;
    }
    echo PHP_EOL.PHP_EOL;
  }
?>