<?php $page="form"?>
<?php $title="表单元素"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>


  <div class="page-header">
    <h1> 表单元素  <small>用于输入输出的表单控件</small></h1>
  </div>
 
 <?php include("nav.php"); ?> 
<script type="text/javascript">
    var menus = [
        {
          href : 'form-element/type.php',
          text : '表单元素的种类'
        },{
          href : 'form-element/width.php',
          text : '表单元素的宽度' 
        },{
          href : 'form-element/custom.php',
          text : '自定义表单控件' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
