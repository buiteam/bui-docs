<?php $page="demo"?>
<?php $title="加载BUI"?>
<?php $wangwang = 'dxq613' ?>
<?php $unitTest = '../test/loader.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '加载seed' ,
          href : 'loader/seed.php',
          minHeight : 320
        },
        {   
          text : '加载全部模块' ,
          href : 'loader/bui.php',
          minHeight : 320
        },
        {   
          text : '使用kissy' ,
          href : 'loader/kissy.php',
          minHeight : 320
        },
        {   
          text : '使用seajs' ,
          href : 'loader/seajs.php',
          minHeight : 320
        },
        {   
          text : '使用seajs 1.3' ,
          href : 'loader/seajs-1.3.php',
          minHeight : 320
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>