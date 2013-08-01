#!/usr/bin/php
<?php
  error_reporting(E_ALL);
  $MAIN_FILE = basename($argv[0]);
  $ROOT_PATH = realpath(dirname(__FILE__));
  include "$ROOT_PATH/converter/includes.php";

  $inputFileName  = "$ROOT_PATH/files/$argv[1]";
  $outputFileName = "$ROOT_PATH/files/$argv[2]";

  include "$ROOT_PATH/converter/convert.php";
?>