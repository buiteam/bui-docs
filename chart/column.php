<?php $page="chart"?>
<?php $title="柱状图"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Series.Column"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '基本柱状图' ,
          href : 'column/base.php',
          minHeight : 600
        },{
          text : '点击事件' ,
          href : 'column/event.php',
          minHeight : 600
        },{
          text : '时间坐标轴' ,
          href : 'column/time.php',
          minHeight : 600
        },{
          text : '时间分类坐标轴' ,
          href : 'column/time-category.php',
          minHeight : 600
        },{
          text : '多个柱状图' ,
          href : 'column/columns.php',
          minHeight : 600
        },{
          text : '断点柱状图' ,
          href : 'column/break.php',
          minHeight : 600
        },
        {
          text : '自定义宽度' ,
          href : 'column/width.php',
          minHeight : 600
        },
        {
          text : '层叠柱状图' ,
          href : 'column/stacked.php',
          minHeight : 600
        },
        {
          text : '层叠百分比' ,
          href : 'column/percent.php',
          minHeight : 600
        },
        {
          text : '使用store' ,
          href : 'column/store.php',
          minHeight : 600
        },
        {
          text : '翻转坐标轴' ,
          href : 'column/bar.php',
          minHeight : 600
        },
        {
          text : '翻转层叠' ,
          href : 'column/bar-stacked.php',
          minHeight : 600
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>