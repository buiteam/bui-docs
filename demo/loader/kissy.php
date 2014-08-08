<?php $title="加载kissy"?>
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
  <script src="http://a.tbcdn.cn/s/kissy/1.3.0/kissy-min.js"></script>
  <script src="http://g.tbcdn.cn/fi/bui/adapter.js"></script>
  <script type="text/javascript">
 
  KISSY.use('bui/calendar',function(S,Calendar){
    var datepicker = new Calendar.DatePicker({
        trigger:'.calendar',
        autoRender : true
      });
  });
  </script>
<?php include("../../templates/control-footer.php"); ?>