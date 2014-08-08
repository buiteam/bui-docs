<?php
  $fileName =$_GET['file'].'?useLoader=true&source=true';

  if(stripos($fileName,'http') < 0){
    $fileName = 'http://www.builive.com/'.$fileName;
  }
  $callback = $_GET['callback'];
  $content = file_get_contents($fileName);
  $content = str_ireplace("\r\n","\n",$content);
  $content = str_ireplace("\n","\\n\\\r\n",$content);
  //$content = str_ireplace("\r\n","\\n\\\r\n",$content);
  echo $callback.'("'. htmlspecialchars($content).'")';
?>