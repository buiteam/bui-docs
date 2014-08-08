<?php
  function getCount($fileName,$id){
    $json = readJson($fileName);
    if(empty($json[$id])){
      return 0;
    }else{
      return $json[$id];
    }
  }

  function readJson($fileName){
    $file = fopen($fileName,"r");
    $json = fread($file,1024);
    fclose($file);
    return json_decode($json,true);

  }

  function writeJson($fileName,$json){
    $file = fopen($fileName,"w");
    fwrite($file,json_encode($json),1024);
    fclose($file);
  }

  function addCount($fileName,$id){
    $json = readJson($fileName);
    
    if(empty($json[$id])){
      $json[$id] = 1;
    }else{
      $json[$id] = $json[$id]+1;
    }
    writeJson($fileName,$json);
  }
?>