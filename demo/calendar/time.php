<?php $title="日期时间选择器"?>
<?php include("../../templates/control-header.php"); ?>
    <form  method="post">
      <h2>选择时间：</h2>
      <p>
        <label>选择时间：</label><input type="text" class="calendar calendar-time" />
      </p>
       <p>
        <label>选择时间：</label><input type="text" class="calendar calendar-time" />
      </p>

    </form>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use('bui/calendar',function(S,Calendar){
    <?php }else if($useLoader) {?>
    BUI.use('bui/calendar',function(Calendar){
    <?php }else{?>
        var Calendar = BUI.Calendar
    <?php }?>
        var datepicker = new Calendar.DatePicker({
              trigger:'.calendar-time',
              showTime:true,
              autoRender : true
            });
    <?php if($useLoader || $useKissy) {?>
    });
    <?php } ?>
  </script>
<?php include("../../templates/control-footer.php"); ?>

