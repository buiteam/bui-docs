<?php $page="chart"?>
<?php $title="自定义皮肤"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Theme"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '更改颜色' ,
          href : 'theme/colors.php',
          minHeight : 600
        },{
          text : '更改栅格、背景' ,
          href : 'theme/back.php',
          minHeight : 600
        },{
          text : '默认皮肤' ,
          href : 'theme/default.php',
          minHeight : 600
        }{
          text : '扩展皮肤' ,
          href : 'theme/extend.php',
          minHeight : 600
        },
        ,{
          text : '栅格背景皮肤' ,
          href : 'theme/grid.php',
          minHeight : 600
        },
        {
          text : '深蓝背景' ,
          href : 'theme/blue.php',
          minHeight : 600
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>