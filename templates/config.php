<?php 
  // 站点全局的配置文件

  $assets = "http://g.alicdn.com/bui/bui/1.1.7";

  $useLoader = true;
  $loader = $_GET['loader'];

  if ($loader == 'kissy') {
    $useKissy = true;
  }
  elseif ($loader == 'bui') {
    $useBui = true;
  }
  elseif($loader =='seed'){
    $useSeed = true;
  }else {
    $useSeajs = true;
    $loader = 'seajs';
  }

  

  if(isset($_COOKIE['nouseBs3'])){
    $v =$_COOKIE['nouseBs3'];
    $nouseBs3 = true;
  }else{
    $nouseBs3 = false;
  }
  //setcookie('loader', $loader);
?>
