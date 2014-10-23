<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php include 'config.php'; ?>
<title><?php echo $title; ?></title>
<?php
  if(isset($_GET['useLoader'])||isset($_POST['useLoader'])){
    $useLoader = true;
  }else{
    $useLoader = false;
  }

  if(isset($_GET['useKissy'])||isset($_POST['useKissy'])){
    $useKissy = true;
    $useLoader = true;
  }else{
    $useKissy = false;
  }

  if(isset($_COOKIE['useBs3'])){
    $useBs3 = true;
  }else{
    $useBs3 = false;
  }


  function getTheme(){
    $rst = "";
    $theme = "Chart.Theme.Smooth1";
    if(isset($_COOKIE['theme'])){
      $theme = $_COOKIE['theme'];
    }
    if($theme != ''){
      $rst = 'theme : '.$theme.',';
    }
    return $rst;
  }

?>

</head>
<body>

  <?php
  if(!isset($_GET['source'])){
    include('ga.php');
  }
  ?>
<div class="demo-content">
