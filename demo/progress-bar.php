<?php $page="demo"?>
<?php $title="进度条"?>
<?php $wangwang = 'yizhishu110' ?>
<?php $api="../docs/api/index.html#!/api/BUI.ProgressBar.Base"?>
<?php $unitTest = '../test/progressbar.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {   
          text : '进度条应用',
          href : 'progressbar/progress-bar.php',
          minHeight:300
        },
        {   
          text : '多值进度条应用',
          href : 'progressbar/multi-progress-bar.php',
          minHeight:300
        },
        {   
          text : '异步加载进度条应用',
          href : 'progressbar/load-progress-bar.php',
          minHeight:300
        },
        {   
          text : '不同状态的进度条',
          href : 'progressbar/progress-status.php',
          minHeight:300
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
