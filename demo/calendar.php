<?php $title="日历"?>
<?php $wangwang = 'dxq613' ?>
<?php $page="demo"?>
<?php $api="../docs/api/index.html#!/api/BUI.Calendar.Calendar";?>
<?php $unitTest = '../test/calendar.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        
        {
          href : 'calendar/picker.php',
          text : '日历选择器',
          minHeight : 420
        },
        {
          href : 'calendar/time.php',
          text : '时间选择',
          minHeight : 420
        },{
          href : 'calendar/delegate.php',
          text : '委托显示日期',
          minHeight : 420
        },
        {
          href : 'calendar/range.php',
          text : '选择范围',
          minHeight : 420
        },
        {
          href : 'calendar/mask.php',
          text : '自定义格式',
          minHeight : 420
        },
        {
          href : 'calendar/lock.php',
          text : '锁定时间',
          minHeight : 420
        },
        {
          href : 'calendar/calendar.php',
          text : '一般日历' ,
          minHeight : 420
        },{
          href : 'calendar/month.php',
          text : '月份',
          minHeight : 420
        },{
          href : 'calendar/monthpicker.php',
          text : '选择月份',
          minHeight : 420
        }
        
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>