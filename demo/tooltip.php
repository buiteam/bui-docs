<?php $page="demo"?>
<?php $title="提示信息"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Tooltip.Tooltip"?>
<?php $unitTest = '../test/tips.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '基本提示信息',
          href : 'tooltip/single.php',
          minHeight: 400
        },
        {   
          text : '共用的提示信息',
          href : 'tooltip/delegate.php'
        },
        {   
          text : '点击显示提示信息',
          href : 'tooltip/tip-click.php'
        },
        {   
          text : '复杂的提示信息',
          href : 'tooltip/complex.php',
          minHeight: 400
        },
        {   
          text : '提示信息中使用复杂结构',
          href : 'tooltip/tip-grid.php',
          minHeight: 400
        },
        {   
          text : '自定义提示信息' ,
          href : 'tooltip/custom.php',
          minHeight: 400
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>