<?php $page="demo"?>
<?php $title="选择框"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Select.Select"?>
<?php $unitTest = '../test/select.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '标准Select',
          href : 'select/select.php',
          minHeight : 300
        },{   
          text : 'select 列表高度',
          href : 'select/height.php',
          minHeight : 300
        },{   
          text : '多选Select',
          href : 'select/multiple-select.php',
          minHeight : 300
        },{   
          text : 'Select 异步数据',
          href : 'select/select-store.php',
          minHeight : 300
        },{   
          text : '标准Combox',
          href : 'select/combox.php',
          minHeight : 300
        },{   
          text : '带有tag的Combox',
          href : 'select/combox-tag.php',
          minHeight : 300
        },{   
          text : 'tag 使用 id',
          href : 'select/tag-id.php',
          minHeight : 300
        },{   
          text : '提示框（from server）',
          href : 'select/suggest1.php',
          minHeight : 300
        },{   
          text : '提示框（use static data）',
          href : 'select/suggest2.php',
          minHeight : 300
        }/*,{   
          text : '提示框tag',
          href : 'select/suggest-tag.php',
          minHeight : 300
        }*/,{   
          text : '自定义选择器',
          href : 'picker/picker.php',
          minHeight : 300
        },{   
          text : '自定义选择器-多选',
          href : 'picker/multiple-picker.php',
          minHeight : 300
        },{   
          text : '表格选择数据',
          href : 'picker/grid-picker.php',
          minHeight : 300
        },{   
          text : '表格多选',
          href : 'picker/grid-multiple-picker.php',
          minHeight : 300
        },{   
          text : '替换Select的内容',
          href : 'select/select-picker.php',
          minHeight : 300
        },{   
          text : '自定义列表',
          href : 'select/custom-list.php',
          minHeight : 300
        },
        {   
          text : 'suggest 和 grid联用',
          href : 'select/suggest-grid.php',
          minHeight : 300
        },
        {   
          text : '树选择数据',
          href : 'picker/tree-picker.php',
          minHeight : 300
        },
        {   
          text : '异步树选择数据',
          href : 'picker/tree-async.php',
          minHeight : 300
        },
        {   
          text : '树多选',
          href : 'picker/tree-mul-picker.php',
          minHeight : 300
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>