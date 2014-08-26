<?php $page="chart"?>
<?php $title="雷达图"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Axis.Circle"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '折线图' ,
          href : 'radar/line.php',
          minHeight : 600
        },{
          text : '区域图' ,
          href : 'radar/area.php',
          minHeight : 600
        },
        {
          text : '层叠区域图' ,
          href : 'radar/area-stacked.php',
          minHeight : 600
        },{
          text : '层叠区域图百分比' ,
          href : 'radar/area-percent.php',
          minHeight : 600
        },{
          text : '柱状图' ,
          href : 'radar/column.php',
          minHeight : 600
        },{
          text : '多个柱状图' ,
          href : 'radar/columns.php',
          minHeight : 600
        },
        {
          text : '层叠柱状图' ,
          href : 'radar/column-stacked.php',
          minHeight : 600
        },
        {
          text : '层叠柱状图百分比' ,
          href : 'radar/column-percent.php',
          minHeight : 600
        },
        {
          text : '混杂图' ,
          href : 'radar/mix.php',
          minHeight : 600
        },
        {
          text : '圆形栅格线' ,
          href : 'radar/circle.php',
          minHeight : 600
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>