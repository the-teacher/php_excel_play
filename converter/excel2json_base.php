#!/usr/bin/php
<?php
  error_reporting(E_ALL);

  $ROOT_PATH = $argv[1];
  $SRC_FILE  = $argv[2];
  $TMP_FILE  = $argv[3];

  include "$ROOT_PATH/converter/includes.php";
  include "$ROOT_PATH/converter/excel2json.php";
?>