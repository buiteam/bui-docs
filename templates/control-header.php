<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<?php include 'config.php'; ?>
<!-- 此文件为了显示Demo样式，项目中不需要引入 -->
<link href="../../assets/code/demo.css" rel="stylesheet">

<?php if($useBs3) { ?>
  <link href="http://g.alicdn.com/fi/bui/css/bs3/dpl.css" rel="stylesheet">
  <link href="http://g.alicdn.com/fi/bui/css/bs3/bui.css" rel="stylesheet">
<?php } else {?>
  <link href="http://g.alicdn.com/fi/bui/css/dpl.css" rel="stylesheet">
  <link href="http://g.alicdn.com/fi/bui/css/bui.css" rel="stylesheet">
<?php }?>

</head>
<body>
  <?php
  if(!isset($_GET['source'])){
    include('ga.php');
  }
  ?>
<div class="demo-content">
