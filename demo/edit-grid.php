<?php $page="demo"?>
<?php $title="可编辑表格"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Grid.Plugins.CellEditing"?>
<?php $unitTest = '../test/grid-editor.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '表格单元格编辑' ,
          href : 'edit-grid/cell.php',
          minHeight : 420
        },
        {
          text : '表格行编辑',
          href : 'edit-grid/row.php',
          minHeight : 420
        },{
          text : '更改触发方式行编辑',
          href : 'edit-grid/row-editor.php',
          minHeight : 420
        },
        {
          text : '表格弹出框编辑',
          href : 'edit-grid/dialog.php',
          minHeight : 520
        },
        {
          text : '自动保存数据',
          href : 'edit-grid/autoSave.php',
          minHeight : 520
        },
        {
          text : '弹出框异步提交',
          href : 'edit-grid/dialog-commit.php',
          minHeight : 520
        },
        {
          text : '自定义编辑' ,
          href : 'edit-grid/custom-editor.php',
          minHeight : 320
        },
        {
          text : 'readonly字段' ,
          href : 'edit-grid/readonly.php',
          minHeight : 520
        },{
          text : '级联选择' ,
          href : 'edit-grid/cascade.php',
          minHeight : 320
        },
        {
          text : '编辑汇总' ,
          href : 'edit-grid/summary.php',
          minHeight : 320
        },
        {
          text : '基本编辑器' ,
          href : 'editor/base.php',
          minHeight : 320
        },
        {
          text : '行编辑器' ,
          href : 'editor/record.php',
          minHeight : 320
        },
        {
          text : '弹出编辑器' ,
          href : 'editor/dialog.php',
          minHeight : 320
        }/**/
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>