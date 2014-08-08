<?php
if(isset($_GET["a"])){
  $a = $_GET["a"];
  
  if($a && strlen($a) < 5){
    echo '';
  }else{
    sleep(3);
    echo '长度不能超出4';
  }

}

if(isset($_GET["b"])){
  $a = $_GET["b"];
  
  if($a && strlen($a) < 4){
    echo '{"success":true}';
  }else{
    sleep(3);
    echo '{"success":false,"msg" : "长度不能超出3"}';
  }

}
?>