<?php $title="树的基本功能"?>
<?php $page="demo"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Tree.TreeList"?>
<?php $unitTest = '../test/tree.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '最简单的树' ,
          href : 'tree/basic.php',
          minHeight : 400
        },
        {
          text : '带有连接线的树',
          href : 'tree/line.php',
          minHeight : 400
        },
        {
          text : '显示根节点',
          href : 'tree/root.php',
          minHeight : 400
        },
        {
          text : '更改图标的树',
          href : 'tree/icon.php',
          minHeight : 400
        },
        {
          text : '自由定制节点图标',
          href : 'tree/custom-icon.php',
          minHeight : 400
        },
        {
          text : '允许勾选的树',
          href : 'tree/check.php',
          minHeight : 400
        },
        {
          text : '仅叶子节点可勾选的树',
          href : 'tree/leaf-check.php',
          minHeight : 400
        },
        {
          text : '节点自定义勾选的树',
          href : 'tree/custom-check.php',
          minHeight : 400
        },
        {
          text : '单独勾选的树',
          href : 'tree/radio.php',
          minHeight : 400
        },{
          text : '不进行级联勾选',
          href : 'tree/no-cascade.php',
          minHeight : 400
        },
        {
          text : '异步加载节点',
          href : 'tree/async.php',
          minHeight : 450
        },{
          text : 'jsonp 加载',
          href : 'tree/jsonp.php',
          minHeight : 450
        },{
          text : '一次性加载树结构',
          href : 'tree/aync-once.php',
          minHeight : 450
        },
        {
          text : '缓存加载，使用pid',
          href : 'tree/pid.php',
          minHeight : 450
        },{
          text : '一次性加载线性结构',
          href : 'tree/async-line.php',
          minHeight : 450
        },
        {
          text : '映射数据',
          href : 'tree/map.php',
          minHeight : 450
        },
        {
          text : 'accordion 树',
          href : 'tree/accodion.php',
          minHeight : 450
        },
        {
          text : '增删改树节点',
          href : 'tree/edit.php',
          minHeight : 300
        },{
          text : 'tree grid联动',
          href : 'tree/with-grid.php',
          minHeight: 300
        },{
          text : 'tree-grid',
          href : 'tree/treegrid.php',
          minHeight: 300
        },{
          text : '无样式的tree menu',
          minHeight : 300,
          href : 'tree/tree-menu.php'
        },{
          text : '左侧菜单',
          minHeight : 300,
          href : 'tree/tree-side-menu.php'
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>