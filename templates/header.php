<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<meta name="description" content="BUI是基于JQuery的富客户端UI框架">
<meta name="author" content="dxq613@gmail.com">
<?php include 'config.php'; ?>
<?php if(!isset($base)) $base = ".." ?>
<!-- Le styles -->
<link type="image/x-icon" href="<?php echo $base; ?>/assets/img/favicon.ico" rel="shortcut icon">

<?php

if(isset($_COOKIE['useBs3'])){
    $useBs3 = true;
  }else{
    $useBs3 = false;
  }
?>
<?php if(!$nouseBs3) { ?>
<link href="//g.tbcdn.cn/fi/bui/css/bs3/dpl-min.css" rel="stylesheet"> 
<link href="//g.tbcdn.cn/fi/bui/css/bs3/bui-min.css" rel="stylesheet"> 

<?php } else {?>
<link href="//g.tbcdn.cn/fi/bui/css/dpl.css" rel="stylesheet">
<link href="//g.tbcdn.cn/fi/bui/css/bui.css" rel="stylesheet">
<?php }?>

<link href="<?php echo $base; ?>/assets/code/home.css" rel="stylesheet">
<link href="<?php echo $base; ?>/assets/code/docs.css" rel="stylesheet">
<link href="<?php echo $base; ?>/assets/code/prettify.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<script src="//g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
<script src="//g.tbcdn.cn/fi/bui/seed-min.js"></script>
<!--[if lt IE 9]>
      <link href="<?php echo $base; ?>/assets/code/home-ie.css" rel="stylesheet" />
<![endif]-->
<!---->
<script src="<?php echo $base; ?>/assets/code/prettify.js"></script>
<?php $path = $base.'/download/count.php';
include($path); 
?>
</head>
<body>
  <?php include('ga.php');?>
  <nav class="top-nav clearfix">
    <ul class="clearfix">
      <li class="logo">
        <a href="<?php echo $base; ?>/index.php">
          <img src="http://img03.taobaocdn.com/tps/i3/T1xA24XXljXXXMiNnp-83-45.png" title="BUI" alt="BUI">
        </a>
      </li>
      <li  <?php if(isset($page) && $page == 'scaffolding') echo 'class="current_page"'?>>
        <a href="<?php echo $base; ?>/scaffolding/index.php">
          框架
        </a>
      </li>
      <li  <?php if(isset($page) && $page == 'base') echo 'class="current_page"'?>>
        <a href="<?php echo $base; ?>/base/index.php">
          基础样式
        </a>
      </li>
      <li <?php if(isset($page) && $page == 'form') echo 'class="current_page"'?>>
        <a href="<?php echo $base; ?>/form/index.php">
          表单
        </a>
      </li>
      <li <?php if(isset($page) && $page == 'business') echo 'class="current_page"'?>>
        <a href="<?php echo $base; ?>/business/index.php">
          业务场景
        </a>
      </li>
      <li <?php if(isset($page) && $page == 'demo') echo 'class="current_page"'?>>
        <a href="<?php echo $base; ?>/demo/index.php">
          控件库 Demo
        </a>
      </li>
      <li>
        <a href="http://acharts.github.io/">
          图表
        </a>
      </li>
      <li>
        <a href="<?php echo $base; ?>/docs/api/index.html">
          控件库 API
        </a>
      </li>
      <li <?php if(isset($page) && $page == 'apps') echo 'class="current_page"'?>>
        <a href="<?php echo $base; ?>/application/index.php">
          BUI 应用
        </a>
      </li>
      <li>
        <a href="<?php echo $base; ?>/home.php">
          关于 BUI
        </a>
      </li>
    </ul>
  </nav>
  <div id="container">
    <div class="contain-fl ">
      <div class="contain-fl-main clearfix">
        <div class="col sidebar">
          <nav class="sidebar-section">
          </nav>
        </div>
				<div class="col main">
					<div class="main-section">
						<div class="container">
