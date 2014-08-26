<?php $page="chart"?>
<?php $title="饼图"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="http://acharts.github.io/acharts-api/api/index.html#!/api/Chart.Series.Pie"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '基本饼图' ,
          href : 'pie/base.php',
          minHeight : 600
        },{
          text : '多文本饼图' ,
          href : 'pie/text.php',
          minHeight : 600
        },
        {
          text : '内部显示文本' ,
          href : 'pie/inner-text.php',
          minHeight : 600
        },{
          text : '环形图' ,
          href : 'pie/ring.php',
          minHeight : 600
        },{
          text : '半饼图' ,
          href : 'pie/half.php',
          minHeight : 600
        },
        {
          text : '不可选中的饼图' ,
          href : 'pie/select.php',
          minHeight : 600
        },
        {
          text : '更改颜色' ,
          href : 'pie/colors.php',
          minHeight : 600
        },
         {
          text : '自定义文本' ,
          href : 'pie/custom-labels.php',
          minHeight : 600
        },
        {
          text : '嵌套的饼图' ,
          href : 'pie/stacked.php',
          minHeight : 600
        },{
          text : '多层嵌套饼图' ,
          href : 'pie/placeholder.php',
          minHeight : 600
        },
        {
          text : '计算起始位置' ,
          href : 'pie/start.php',
          minHeight : 600
        },
        {
          text : '多层嵌套饼图（逆时针）' ,
          href : 'pie/clockwise.php',
          minHeight : 600
        },
        {
          text : '使用store' ,
          href : 'pie/store.php',
          minHeight : 600
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>