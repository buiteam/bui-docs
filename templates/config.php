<?php 
  // 站点全局的配置文件

  $assets = "http://g.alicdn.com/bui/bui/1.1.0";

  $useLoader = true;
  $loader = $_GET['loader'];

  if ($loader == 'kissy') {
    $useKissy = true;
  }
  elseif ($loader == 'bui') {
    $useBui = true;
  }
  else {
    $useSeajs = true;
    $loader = 'seajs';
  }
  setcookie('loader', $loader);
?>
