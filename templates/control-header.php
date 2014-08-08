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



<?php if(isset($useKissy) && $useKissy) {?>
  <script src="http://g.tbcdn.cn/kissy/k/1.4.2/seed-min.js"></script>
  <script src="<?php echo $assets; ?>/adapter.js"></script>
<?php }else if(isset($useBui) && $useBui) {?>
  <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
  <script src="<?php echo $assets; ?>/bui.js"></script>
<?php }else{?>
  <!-- 使用seajs方式 -->
  <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
  <script src="http://cdn.staticfile.org/seajs/2.3.0/sea.js"></script>
  <script src="<?php echo $assets; ?>/config.js"></script>
<?php }?>

</head>
<body>
  <?php
  if(!isset($_GET['source'])){
    include('ga.php');
  }
  ?>
<div class="demo-content">
