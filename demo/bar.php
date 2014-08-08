<?php $page="demo"?>
<?php $title="工具栏"?>
<?php $wangwang = 'xiaowu881231' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Toolbar.Bar"?>
<?php $unitTest = '../test/bar.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '一般工具栏 toolbar' ,
          href : 'bar/toolbar.php',
          minHeight : 300
        },
        {
          text : '按钮分组' ,
          href : 'bar/button-group.php',
          minHeight : 300
        },
         {
          text : '工具栏嵌套' ,
          href : 'bar/nest-bar.php',
          minHeight : 300
        },
        {
          text : '分页栏 pagingbar',
          href : 'bar/pagingbar.php',
          minHeight : 300
        },
        {
          text : '自定义分页栏文本',
          href : 'bar/pagingbar-text.php',
          minHeight : 300
        },
        {
          text : '自定义分页栏',
          href : 'bar/pagingbar-custom.php',
          minHeight : 300
        },
        {
          text : '数字分页',
          href : 'bar/numberpagingbar.php',
          minHeight : 300
        },
		 {
          text : '数字分页-配置文案 ',
          href : 'bar/numberpagingbar-c.php',
          minHeight : 300
        },
		{
          text : '数字分页-配置分页区间',
          href : 'bar/numberpagingbar-n.php',
          minHeight : 300
        },
		{
          text : '数字分页-简单表格',
          href : 'bar/grid-numberpagingbar.php',
          minHeight : 500
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>