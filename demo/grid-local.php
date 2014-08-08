<?php $page="demo"?>
<?php $title="表格"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Grid.Grid"?>
<?php $unitTest = '../test/grid.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '百分比列宽' ,
          href : 'grid/grid-percent.php',
          minHeight: 300
        },
        {
          text : '设置列样式',
          href : 'grid/grid-cls.php',
          minHeight: 300
        },{
          text : '添加列',
          href : 'grid/grid-columns.php',
          minHeight: 300
        },
        {
          text : '表格宽度自适应',
          href : 'grid/grid-width.php',
          minHeight: 300
        },
        {
          text : '表格高度',
          href : 'grid/grid-height.php',
          minHeight: 300
        },
        {
          text : '表格宽度高度',
          href : 'grid/grid-width-height.php',
          minHeight: 300
        },
        {
          text : '表格自定义状态',
          href : 'grid/grid-status.php',
          minHeight: 300
        },
        {
          text : '表格单元格去除分割线',
          href : 'grid/grid-border.php',
          minHeight: 300
        },
        {
          text : '表格去除奇偶线',
          href : 'grid/grid-strip.php',
          minHeight: 300
        },
        {
          text : '格式化数据',
          href : 'grid/grid-format.php',
          minHeight: 300
        },
        {
          text : '内存数据分页',
          href : 'grid/grid-local-page.php',
          minHeight: 300
        },
        {
          text : '表格点击操作',
          href : 'grid/grid-oprate.php',
          minHeight: 300
        },
        {
          text : '表格工具栏',
          href : 'grid/grid-bar.php',
          minHeight: 300
        },
        {
          text : '无数据提示信息',
          href : 'grid/grid-empty.php',
          minHeight: 300
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>