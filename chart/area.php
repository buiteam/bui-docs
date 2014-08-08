<?php $page="chart"?>
<?php $title="区域图"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Chart.Series.Area"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '基本区域图' ,
          href : 'area/base.php',
          minHeight : 600
        },{
          text : '时间区域图' ,
          href : 'area/time.php',
          minHeight : 600
        },{
          text : '断点区域图' ,
          href : 'area/break.php',
          minHeight : 600
        },
        {
          text : '层叠区域图' ,
          href : 'area/stacked.php',
          minHeight : 600
        },
        {
          text : '层叠百分比' ,
          href : 'area/percent.php',
          minHeight : 600
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>