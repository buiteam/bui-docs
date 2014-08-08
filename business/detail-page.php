<?php $page="business"?>
<?php $title="详情页"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'detail/page-detail.php',
          text : '示例'
        },{
          href : '../demo/grid/simple-grid-percent.php',
          text : '简单表格' 
        },{
          href : '../form/form-field/grid-row.php',
          text : '栅格布局' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
