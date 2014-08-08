<?php $page="business"?>
<?php $title="简单表单页"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'form/simple-form.php',
          text : '示例' 
        },{
          href : '../base/breadcrumbs/breadcrumbs.php',
          text : '面包屑' 
        },{
          href : '../base/tab/in-form.php',
          text : '切换标签' 
        },{
          href : '../form/form-struct/actions-bar.php',
          text : '底部按钮栏' 
        },{
          href : '../form/form-struct/inner-actions-bar.php',
          text : '表单内按钮栏' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
