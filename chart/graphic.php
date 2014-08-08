<?php $page="chart"?>
<?php $title="基本图形"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Graphic"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '基本图形' ,
          href : 'graphic/shape.php',
          minHeight : 600
        },{
          text : '图形分组' ,
          href : 'graphic/group.php',
          minHeight : 600
        },{
          text : '图形填充' ,
          href : 'graphic/fill.php',
          minHeight : 600
        },{
          text : '动画' ,
          href : 'graphic/animate.php',
          minHeight : 600
        },{
          text : '文本' ,
          href : 'graphic/text.php',
          minHeight : 600
        },
        {
          text : 'Markers' ,
          href : 'graphic/marker.php',
          minHeight : 600
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>