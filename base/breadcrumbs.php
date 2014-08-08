<?php $page="base"?>
<?php $title="面包屑"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>


<section id="breadcrumbs">
  <div class="page-header">
    <h1>
      面包屑 <small>快速找到使用路径</small>
    </h1>
  </div>


</section>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'breadcrumbs/breadcrumbs.php',
          text : '面包屑' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
