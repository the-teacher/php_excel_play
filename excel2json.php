#!/usr/bin/php
<?php
  error_reporting(E_ALL);
  $MAIN_FILE = basename($argv[0]);
  $ROOT_PATH = realpath(dirname(__FILE__));
  include "$ROOT_PATH/converter/includes.php";

  $inputFileName = $argv[1];
  include "$ROOT_PATH/converter/excel2json.php";
?>