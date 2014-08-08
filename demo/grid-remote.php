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
          text : '异步加载数据,分页' ,
          href : 'grid/grid-remote.php',
          minHeight : 300
        },
        {
          text : '自定义请求参数' ,
          href : 'grid/grid-proxy.php',
          minHeight : 300
        },
         {
          text : '自定义ajax参数' ,
          href : 'grid/grid-ajax.php',
          minHeight : 300
        },
        {
          text : '分页从1开始' ,
          href : 'grid/grid-page.php',
          minHeight : 300
        }, 
        {
          text : '自定义返回数据格式',
          href : 'grid/grid-remote-params.php',
          minHeight : 300
        },
        {
          text : '后台排序',
          href : 'grid/grid-remote-sort.php',
          minHeight : 300
        },
        {
          text : '错误信息',
          href : 'grid/grid-exception.php',
          minHeight : 300
        },
        {
          text : '数字分页栏',
          href : 'grid/grid-number-paging.php',
          minHeight : 300
        },
        {
          text : '自定义样式的分页栏',
          href : 'grid/grid-number-bar.php',
          minHeight : 300
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>