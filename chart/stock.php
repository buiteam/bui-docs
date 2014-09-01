<?php $page="chart"?>
<?php $title="大数据（股票类）图表"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Theme"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
            text : '基本图表' ,
            href : 'stock/default.php',
            minHeight : 600
        },
        {
          text : '异步数据源',
          href : 'stock/async.php',
          minHeight : 600
        },
        {
          text : '指定初始范围',
          href : 'stock/range.php',
          minHeight : 600
        },
        {
          text : '存在断点的折线图' ,
          href : 'stock/break.php',
          minHeight : 600
        },{
          text : '区域图' ,
          href : 'stock/area.php',
          minHeight : 600
        }/*,
        {
            text : '柱状图' ,
            href : 'stock/column.php',
            minHeight : 600
        }*/,
        {
          text : '多条折线' ,
          href : 'stock/multiple.php',
          minHeight : 600
        },
        {
          text : '使用flag' ,
          href : 'stock/flag.php',
          minHeight : 600
        },{
          text : '超大数据' ,
          href : 'stock/large.php',
          minHeight : 600
        },{
          text : '动态更新' ,
          href : 'stock/dynamic.php',
          minHeight : 600
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>