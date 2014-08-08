<?php $page="business"?>
<?php $title="表单页"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>

<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'form/form-page.php',
          text : '示例'
        },{
          href : '../form/form-field/grid-row.php',
          text : '栅格布局' 
        },{
          href : '../form/form-element/type.php',
          text : '表单元素的种类' 
        },{
          href : '../form/form-element/width.php',
          text : '表单元素的宽度',
        },{
          href : '../form/form-element/custom.php',
          text : '自定义表单控件',
        },{
          href : '../form/form-field/label-width.php',
          text : '表单标签的宽度' 
        },{
          href : '../form/form-field/field-height.php',
          text : '表单字段的高度' 
        },{
          href : '../form/form-field/info.php',
          text : '显示详情信息' 
        },{
          href : '../form/form-field/group.php',
          text : '表单分组' 
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
