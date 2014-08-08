<?php $title="表单"?>
<?php $page="demo"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Form.Form"?>
<?php $unitTest = '../test/form-panel.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '表单' ,
          href : 'form/simple-form.php'
        },
        {
          text : '多列表单',
          href : 'form/h-form.php'
        },
        {
          text : '基础验证',
          href : 'form/basic-valid.php',
          minHeight : 400
        },
        {
          text : '分组验证',
          href : 'form/advalid.php',
          minHeight : 300
        },
        {
          text : '自定义验证规则',
          href : 'form/cvalid.php',
          minHeight : 300
        },
        {
          text : '定义验证信息',
          href : 'form/vaid-message.php',
          minHeight : 300
        },
        {
          text : '异步校验',
          href : 'form/remote.php',
          minHeight : 300
        },
         {
          text : '自定义显示错误',
          href : 'form/error-tip.php',
          minHeight : 500
        },
        {
          text : '表单分组',
          href : 'form/group.php'
        },
        {
          text : '表单依赖',
          href : 'form/depends.php'
        },
        {
          text : '复杂表单',
          href : 'form/adform.php',
          minHeight : 500
        },
        {
          text : '表单异步提交',
          href : 'form/ajax-submit.php',
          minHeight : 500
        },
        {
          text : '表单异步提交,出错',
          href : 'form/error.php',
          minHeight : 500
        },
        {
          text : '表单中的选择框',
          href : 'form/form-select.php',
          minHeight : 500
        },
         {
          text : '表单中的列表',
          href : 'form/list.php',
          minHeight : 500
        },{
          text : '表单中的日历',
          href : 'form/datepicker.php',
          minHeight : 500
        },
         {
          text : '表单和Grid联动',
          href : 'form/form-grid.php',
          minHeight : 500
        },
         {
          text : 'json生成表单',
          href : 'form/form-json.php',
          minHeight : 500
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>