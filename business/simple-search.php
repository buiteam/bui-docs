<?php $page="business"?>
<?php $title="简单搜索页"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'search/simple-search.php',
          text : '示例' 
        },{
          href : '../base/breadcrumbs/breadcrumbs.php',
          text : '面包屑' 
        },{
          href : '../base/button/button.php',
          text : '各类按钮' 
        },{
          href : '../form/form-layout/form-panel.php',
          text : '表单面板' 
        },{
          href : '../base/table/table-bordered.php',
          text : '有边框的表格' 
        },{
          href : '../base/toolbar/toolbar.php',
          text : '工具栏' 
        },{
          href : '../base/toolbar/page.php',
          text : '分页栏' 
        },{
          href : '../demo/calendar/picker.php',
          text : '日历控件',
          minHeight: 320
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
