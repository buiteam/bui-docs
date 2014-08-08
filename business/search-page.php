<?php $page="business"?>
<?php $title="搜索页"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'search/page-search.php',
          text : '示例',
          minHeight:600
        },{
          href : '../form/form-struct/search-button.php',
          text : '表单搜索按钮' 
        },{
          href : '../demo/grid/grid-remote.php',
          text : '异步加载数据，分页',
          minHeight:300 
        },{
          href : '../form/form-field/grid-row.php',
          text : '栅格布局' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
