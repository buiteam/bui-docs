<?php 
  // 站点全局的配置文件

  $assets = "http://g.alicdn.com/bui/bui/1.1.2";

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


  if(isset($_COOKIE['useBs3'])){
    $useBs3 = true;
  }else{
    $useBs3 = false;
  }
  //setcookie('loader', $loader);
?>
