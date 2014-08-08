<?php $page="form"?>
<?php $title="表单结构"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'form-struct/button.php',
          text : '表单按钮'
        },{
          href : 'form-struct/search-button.php',
          text : '表单搜索按钮'
        },{
          href : 'form-struct/actions-bar.php',
          text : '底部按钮栏' 
        },{
          href : 'form-struct/inner-actions-bar.php',
          text : '内部按钮栏' 
        },{
          href : 'form-struct/hr.php',
          text : '表单分割线' 
        },{
          href : 'form-struct/required.php',
          text : '表单必填项' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
