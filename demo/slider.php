<?php $page="demo"?>
<?php $title="滑块"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Slider.Slider"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '基本滑块',
          href : 'slider/slider.php',
          minHeight: 200
        },
        {   
          text : '垂直滑块',
          href : 'slider/vertical.php',
          minHeight: 200
        },
        {   
          text : '滑动分块',
          href : 'slider/step.php',
          minHeight: 200
        },
        {   
          text : '自定义样式',
          href : 'slider/custom.php',
          minHeight: 200
        },
        {   
          text : '滑动颜色',
          href : 'slider/color.php',
          minHeight: 200
        },
        {   
          text : '定义滑动数据区域',
          href : 'slider/number.php',
          minHeight: 200
        },
        {   
          text : '滑动范围',
          href : 'slider/range.php',
          minHeight: 200
        },
        {   
          text : '垂直滑动范围',
          href : 'slider/vertical-range.php',
          minHeight: 200
        }
       
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>