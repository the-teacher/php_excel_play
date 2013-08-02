#!/usr/bin/php
<?php
  error_reporting(E_ALL);

  $ROOT_PATH = $argv[1];
  $TMP_FILE  = $argv[2];
  $TMPL_FILE = $argv[3];
  $OUT_FILE  = $argv[4];

  include "$ROOT_PATH/converter/includes.php";
  include "$ROOT_PATH/converter/json2excel.php";
?>