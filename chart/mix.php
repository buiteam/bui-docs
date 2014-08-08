<?php $page="chart"?>
<?php $title="图表集成"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Chart.Series.Line"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '折线图与区域图' ,
          href : 'mix/line-area.php',
          minHeight : 600
        },{
          text : '折线图与柱状图' ,
          href : 'mix/line-column.php',
          minHeight : 600
        },{
          text : '折线图与柱状图多Y轴' ,
          href : 'mix/multiple-y.php',
          minHeight : 600
        },
        {
          text : '多个图形' ,
          href : 'mix/multiple.php',
          minHeight : 600
        },
        {
          text : '饼图与表格' ,
          href : 'mix/pie-grid.php',
          minHeight : 600
        }/*,{
          text : '雷达图与表单' ,
          href : 'mix/radar-form.php',
          minHeight : 600
        },{
          text : '柱状图与表格' ,
          href : 'mix/column-grid.php',
          minHeight : 600
        }*/,{
          text : '多种图表与表格' ,
          href : 'mix/mix.php',
          minHeight : 1000
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>