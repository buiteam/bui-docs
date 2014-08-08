<?php $page="demo"?>
<?php $title="布局控件"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Layout.Abstract"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '边框布局',
          href : 'layout/border.php',
          minHeight : 800
        },{   
          text : '折叠布局',
          href : 'layout/accordion.php',
          minHeight : 800
        },{   
          text : '表格布局',
          href : 'layout/table.php',
          minHeight : 800
        },{   
          text : '列布局',
          href : 'layout/columns.php',
          minHeight : 800
        },{   
          text : '绝对布局',
          href : 'layout/absolute.php',
          minHeight : 800
        },{   
          text : '绝对布局(自适应窗口)',
          href : 'layout/viewport-absolute.php',
          minHeight : 800
        },{   
          text : '流布局',
          href : 'layout/flow.php',
          minHeight : 800
        },{   
          text : '锚定布局',
          href : 'layout/anchor.php',
          minHeight : 800
        },{
          text : '窗口自适应',
          href : 'layout/viewport.php',
          minHeight : 800
        },{
          text : 'tree-tab联用',
          href : 'layout/mix.php',
          minHeight : 800
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>