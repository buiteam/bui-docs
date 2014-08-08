<?php $page="demo"?>
<?php $title="表格扩展"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Grid.Plugins.Cascade"?>
<?php $unitTest = '../test/grid-plugin.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '表格多选' ,
          href : 'grid/grid-plugin-checkable.php',
          minHeight: 300
        },
        {
          text : '表格多选(限制选中)' ,
          href : 'grid/grid-plugin-checkonly.php',
          minHeight: 300
        },
        {
          text : '表格单选',
          href : 'grid/grid-plugin-radio.php',
          minHeight: 300
        },
        {
          text : '表格自适应宽度',
          href : 'grid/grid-plugin-fit.php',
          minHeight: 300
        },
        {
          text : '表格菜单',
          href : 'grid/grid-plugin-menu.php',
          minHeight : 320
        },
        {
          text : '表格行号',
          href : 'grid/grid-rownumber.php',
          minHeight : 320
        },
        {
          text : '表格展开行',
          href : 'grid/grid-plugin-openrow.php',
          minHeight : 320
        },
        {
          text : '表格展开子表格',
          href : 'grid/grid-plugin-opensubgrid.php',
          minHeight : 320
        },
        {
          text : '表格汇总',
          href : 'grid/grid-plugin-summary.php',
          minHeight : 400
        },
        {
          text : '表格列分组',
          href : 'grid/grid-col-group.php',
          minHeight : 400
        },
        {
          text : '表格行分组',
          href : 'grid/grid-rowgroup.php',
          minHeight : 400
        },
        {
          text : '拖拽改变列宽度',
          href : 'grid/grid-colresize.php',
          minHeight : 400
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>