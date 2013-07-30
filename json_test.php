#!/usr/bin/php
<?php
  error_reporting(E_ALL);
  include 'table_fields.php';

  echo json_encode($CSV_FIELDS);
  echo json_encode(array('Hello world!' => 'Привет мир!'));
?>