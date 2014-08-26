<?php $page="chart"?>
<?php $title="动态图表"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Series.Line"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '折线图' ,
          href : 'dynamic/line.php',
          minHeight : 600
        },{
          text : '柱状图' ,
          href : 'dynamic/column.php',
          minHeight : 600
        },
        {
          text : '多个折线' ,
          href : 'dynamic/multiple-line.php',
          minHeight : 600
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>