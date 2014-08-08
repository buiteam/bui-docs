<?php $page="scaffolding"?>
<?php $title="布局"?>
<?php include("../templates/header.php"); ?>
<?php $wangwang = 'dxq613' ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'layout/grid.php',
          text : '栅格（24列栅格系统）' 
        },{
          href : 'layout/offsetting-col.php',
          text : '带偏移量的列' 
        },{
          href : 'layout/nesting-col.php',
          text : '嵌套列' 
        },{
          href : 'layout/fluid-gird.php',
          text : '自适应列' 
        },{
          href : 'layout/fluid-nesting.php',
          text : '自适应嵌套' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
