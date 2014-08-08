<?php $page="demo"?>
<?php $title="切换标签"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Tab.NavTab"?>
<?php $unitTest = '../test/tab.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '导航标签' ,
          href : 'tab/nav.php'
        },
        {   
          text : '自适应宽度的标签' ,
          href : 'tab/noscroll.php'
        },
        {   
          text : '切换标签' ,
          href : 'tab/nav-button.php'
        },
        {   
          text : '带内容的切换标签' ,
          href : 'tab/tab-panel.php'
        },
        {
          text : '切换标签，生成容器',
          href : 'tab/tab-panel-create.php'
        },
        {
          text : '使用Html生成',
          href : 'tab/tab-panel-src.php'
        },
        {   
          text : '按钮标签' ,
          href : 'tab/button.php'
        },
        {   
          text : '链接式标签' ,
          href : 'tab/link.php'
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>