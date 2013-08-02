<?php
  function _log(){
    $args       = func_get_args();
    $args_count = func_num_args();
    for ($i = 0; $i < $args_count; $i++){ print_r($args[$i]); echo "\n"; }
  }
  function rm_file($file_path, $silence = true){
    if($silence){
      if(!file_exists($file_path)){ return false; }
    }
    return unlink($file_path);
  }
  // just play with code
  // use file_get_contents instead
  function get_file_content($file_path){
    if(!file_exists($file_path)){ return false; }
    $tmpf    = fopen($file_path, 'r');
    $content = fread($tmpf, filesize($file_path));
    fclose($tmpf);
    return $content;
  }
?>