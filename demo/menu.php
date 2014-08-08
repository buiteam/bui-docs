<?php $page="demo"?>
<?php $title="菜单"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Menu.Menu"?>
<?php $unitTest = '../test/menu.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '标准菜单项' ,
          href : 'menu/normal-menu1.php',
          minHeight : 320
        },
        {   
          text : '个别菜单项自定义' ,
          href : 'menu/normal-menu2.php',
          minHeight : 320
        },
		    {   
          text : '菜单项统一自定义' ,
          href : 'menu/normal-menu3.php',
          minHeight : 320
        },
        {   
          text : '侧边栏菜单' ,
          href : 'menu/sidebar-menu.php',
          minHeight : 320
        },
        {   
          text : '上下文菜单' ,
          href : 'menu/context-menu.php',
          minHeight : 320
        },
        {   
          text : '弹出菜单' ,
          href : 'menu/pop-menu.php',
          minHeight : 320
        },
        {   
          text : '现有的结构和样式菜单' ,
          href : 'menu/status-menu.php',
          minHeight : 320
        },
        {   
          text : '天猫菜单' ,
          maxHeight : 800,
          href : 'menu/tmall-menu.php'
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>