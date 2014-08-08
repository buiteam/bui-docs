<?php $page="demo"?>
<?php $title="列表"?>
<?php $wangwang = 'yizhishu110' ?>
<?php $api="../docs/api/index.html#!/api/BUI.List.List"?>
<?php $unitTest = '../test/list.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '标准SimpleList',
          href : 'list/simple-list1.php',
          minHeight:300
        },{   
          text : '自定义SimpleList',
          href : 'list/simple-list2.php',
          minHeight:300
        },{   
          text : '列表框',
          href : 'list/listbox.php',
          minHeight:300
        },{   
          text : '列表框应用',
          href : 'list/listboxapp.php',
          minHeight:300
        },{   
          text : '使用分页控件的列表',
          href : 'list/paging-list.php',
          minHeight:400
        },{   
          text : '使用现有的dom',
          href : 'list/dom.php'
        },{   
          text : '可勾选列表',
          href : 'list/check.php'
        },{   
          text : '列表状态',
          href : 'list/status.php',
          minHeight:300
        }/**/
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>