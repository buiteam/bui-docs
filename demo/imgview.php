<?php $page="demo"?>
<?php $title="图片浏览器"?>
<?php $wangwang = '写轮' ?>
<?php $api="../docs/api/index.html#!/api/BUI.List.List"?>
<?php $unitTest = '../test/list.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
  var menus = [{
    text: '图片基础容器',
    href: 'imgview/viewcontent.php',
    minHeight:300
  },{
    text: '自动包含控制条',
    href: 'imgview/imgview.php',
    minHeight: 600
  },{
    text: '自定义动作条+切换回掉',
    href: 'imgview/imgview2.php',
    minHeight: 600
  },{
    text: '跟弹出层联用',
    href: 'imgview/imgview3.php',
    minHeight: 600
  }];
</script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
