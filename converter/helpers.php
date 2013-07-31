<?php
  function rm_file($file_path, $silence = true){
    if($silence){
      if(!file_exists($file_path)){ return false; }
    }
    return unlink($file_path);
  }

?>