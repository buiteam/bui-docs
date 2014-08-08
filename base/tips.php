<?php $page="base"?>
<?php $title="提示信息"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'tips/tips-small.php',
          text : '简单提示' 
        },{
          href : 'tips/tips.php',
          text : '复杂提示' 
        },{
          href : 'tips/no-icon.php',
          text : '无icon提示' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>
<?php  include("../templates/footer.php"); ?>
