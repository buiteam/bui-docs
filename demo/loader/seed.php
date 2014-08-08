<?php $title="加载seed"?>
<?php include("../../templates/control-header.php"); ?>
  <h2></h2>
     <form  method="post">
      <h2>选择日期</h2>
      <p>
        <label>选择日期：</label><input type="text" class="calendar" />
      </p>
       <p>
        <label>选择日期：</label><input type="text" class="calendar" />
      </p>

    </form>
  <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
  <script src="http://g.tbcdn.cn/fi/bui/seed-min.js"></script>  
  <script type="text/javascript">
  BUI.use('bui/calendar',function(Calendar){
    var datepicker = new Calendar.DatePicker({
        trigger:'.calendar',
        autoRender : true
      });
  });
  </script>
<?php include("../../templates/control-footer.php"); ?>

