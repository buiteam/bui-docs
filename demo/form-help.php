<?php $title="表单帮助类"?>
<?php $page="demo"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Form.TipItem"?>
<?php $unitTest = '../test/form.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          
          text : '表单获取数据' ,
          href : 'form/get.php'
        },
        {
          text : '表单设置数据',
          href : 'form/set.php'
        },
        {
          text : '表单提示信息',
          href : 'form/tips.php'
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>