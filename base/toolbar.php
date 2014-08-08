<?php $page="base"?>
<?php $title="工具栏"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

  <?php include("nav.php"); ?>
  <script type="text/javascript">
    var menus = [
        {
          href : 'toolbar/button.php',
          text : '按钮类型' 
        },{
          href : 'toolbar/toolbar.php',
          text : '一般工具栏' 
        },
        {
          href : 'toolbar/page.php',
          text : '分页栏' 
        },
        {
          href : 'toolbar/table.php',
          text : '表格工具栏' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
