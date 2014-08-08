<?php $page="demo"?>
<?php $title="提示框/确认框"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Message"?>
<?php $unitTest = '../test/message.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        { 
          text : '信息提示' ,
          href : 'message/info.php',
          minHeight : 400
        },
        {
          text : '成功信息',
          href : 'message/success.php',
          minHeight : 400
        },
        {
          text : '警告信息',
          href : 'message/warning.php',
          minHeight : 400
        },
        {
          text : '错误信息',
          href : 'message/error.php',
          minHeight : 400
        },
        {          
          text : '确认信息',
          href : 'message/question.php',
          minHeight : 400
        },
        {          
          text : '回调函数',
          href : 'message/callback.php',
          minHeight : 400
        },
        {          
          text : '复杂提示信息',
          href : 'message/custom.php',
          minHeight : 400
        },
	       {          
          text : '自定义显示信息',
          href : 'message/show.php',
          minHeight : 400
        },
        {          
          text : '自动隐藏',
          href : 'message/autohide.php',
          minHeight : 400
        },
        {          
          text : '确认框',
          href : 'message/confirm.php',
          minHeight : 400
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>