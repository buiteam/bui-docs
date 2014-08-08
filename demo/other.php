<?php $page="demo"?>
<?php $title="其他控件"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Mask"?>
<?php $unitTest = '../test/select.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '简单mask',
          href : 'other/mask.php',
          minHeight : 300
        },{   
          text : '加载提示Mask',
          href : 'other/load-mask.php',
          minHeight : 300
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>