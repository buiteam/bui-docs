<?php $page="base"?>
<?php $title="面板"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
  <script type="text/javascript">
    var menus = [
        {
          href : 'panel/base.php',
          text : '简单面板' 
        },
        {
          href : 'panel/operation.php',
          text : '面板操作' 
        },
        {
          href : 'panel/small.php',
          text : '小面板' 
        },
        {
          href : 'panel/header-bord.php',
          text : 'body 无边框' 
        },
        {
          href : 'panel/header-color.php',
          text : '有意义的替换' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>
<?php  include("../templates/footer.php"); ?>
