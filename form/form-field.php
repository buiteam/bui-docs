<?php $page="form"?>
<?php $title="表单字段"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>


 <div class="page-header">
    <h1>  表单字段 <small>一个字段在表单中的表现形式</small></h1>
 </div>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'form-field/grid-row.php',
          text : '栅格布局（行模式）' 
        },{
          href : 'form-field/grid-col.php',
          text : '栅格布局（列模式）' 
        },{
          href : 'form-field/label-width.php',
          text : '表单标签的宽度' 
        },{
          href : 'form-field/field-height.php',
          text : '表单字段的高度' 
        },{
          href : 'form-field/info.php',
          text : '显示详情信息' 
        },{
          href : 'form-field/group.php',
          text : '表单分组' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
