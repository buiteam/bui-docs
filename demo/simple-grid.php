<?php $page="demo"?>
<?php $title="简单表格"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Grid.SimpleGrid"?>
<?php $unitTest = '../test/simple-grid.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '百分比列宽' ,
          href : 'grid/simple-grid-percent.php',
          minHeight: 300
        },
        {
          text : '设置列样式',
          href : 'grid/simple-grid-cls.php',
          minHeight: 300
        },
        {
          text : '格式化数据',
          href : 'grid/simple-grid-format.php',
          minHeight: 300
        },
        {
          text : '修改表格样式',
          href : 'bar/grid-numberpagingbar.php',
          minHeight: 500
        },
        {
          text : '编辑表格内容',
          href : 'grid/simple-grid-edit.php',
          minHeight: 500
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>