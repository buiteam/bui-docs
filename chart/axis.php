<?php $page="chart"?>
<?php $title="坐标轴"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Axis"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '分类坐标轴' ,
          href : 'axis/category.php',
          minHeight : 600
        },{
          text : '数字坐标轴' ,
          href : 'axis/number.php',
          minHeight : 600
        },{
          text : '时间坐标轴' ,
          href : 'axis/time.php',
          minHeight : 600
        },
        ,{
          text : '圆/半径坐标轴' ,
          href : 'axis/circle.php',
          minHeight : 600
        },
        {
          text : '各种位置' ,
          href : 'axis/align.php',
          minHeight : 600
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>