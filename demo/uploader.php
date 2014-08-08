<?php $title="文件上传的使用"?>
<?php $page="demo"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Tree.TreeList"?>
<?php $unitTest = '../test/tree.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '简单的上传方式' ,
          href : 'uploader/simple.php',
          minHeight : 200
        },
        {
          text : '使用flash上传' ,
          href : 'uploader/flash.php',
          minHeight : 200
        },
        {
          text : '使用iframe上传' ,
          href : 'uploader/iframe.php',
          minHeight : 200
        },
        {
          text : '自定义上传主题' ,
          href : 'uploader/theme.php',
          minHeight : 200
        },
        {
          text : '文件校验' ,
          href : 'uploader/validator.php',
          minHeight : 200
        },
        {
          text : '上传的事件' ,
          href : 'uploader/event.php',
          minHeight : 200
        },
        {
          text : '判断是否上传成功' ,
          href : 'uploader/checkSuccess.php',
          minHeight : 200
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>