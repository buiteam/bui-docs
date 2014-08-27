<?php $page="chart"?>
<?php $title="散列/气泡图"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Series.Scatter"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '散列图' ,
          href : 'scatter/base.php',
          minHeight : 600
        },{
          text : '气泡图' ,
          href : 'bubble/base.php',
          minHeight : 600
        },{
          text : '渐变气泡图' ,
          href : 'bubble/gradual.php',
          minHeight : 600
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>