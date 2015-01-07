
<?php $title="弹出框"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Overlay.Dialog"?>
<?php $unitTest = '../test/dialog.php';?>
<?php $page="demo"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          
          text : '非模态窗口' ,
          href : 'dialog/no-model.php',
          minHeight : 420
        },
        {
          text : '模态窗口',
          href : 'dialog/model.php',
          minHeight : 400
        },
        {
          text : '自定义按钮',
          href : 'dialog/custom.php',
          minHeight : 400
        },{
          text : '自定义对齐位置',
          href : 'dialog/align.php',
          minHeight : 400
        },
        {
          text : '设置html',
          href : 'dialog/html.php',
          minHeight : 400
          
        },{
          text : '显示隐藏效果',
          href : 'dialog/effect.php',
          minHeight : 400
          
        },
        {
          text : '子控件',
          href : 'dialog/child.php',
          minHeight : 400
          
        },
        {
          
          text : '设置页面DOM',
          href : 'dialog/dom.php',
          minHeight : 400
        },{
          
          text : '修改默认样式',
          href : 'dialog/style.php',
          minHeight : 400
        },
        {
          
          text : '关闭删除Dialog',
          href : 'dialog/destroy.php',
          minHeight : 400
        },
        {
          
          text : '异步加载内容',
          href : 'dialog/remote.php',
          minHeight : 400
        },
        {
          
          text : '异步重复加载',
          href : 'dialog/repeat.php',
          minHeight : 400
        },
        {
          
          text : '内部滚动条',
          href : 'dialog/scroll.php',
          minHeight : 400
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>