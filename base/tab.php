<?php $page="base"?>
<?php $title="标签切换"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
  <script type="text/javascript">
    var menus = [
        {
          href : 'tab/nav.php',
          text : '导航tab' 
        },{
          href : 'tab/button.php',
          text : '按钮tab' 
        },
        {
          href : 'tab/link.php',
          text : '链接标签' 
        },
        {
          href : 'tab/in-form.php',
          text : '表单中' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>
<?php  include("../templates/footer.php"); ?>
