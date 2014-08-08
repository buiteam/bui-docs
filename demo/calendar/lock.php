<?php $title="锁定时间"?>
<?php include("../../templates/control-header.php"); ?>
    <form  method="post">
      <h2>选择日期</h2>
      <p>
        <label>选择日期：</label><input type="text" class="calendar calendar-time" />
      </p>
       <p>
        <label>选择日期：</label><input type="text" class="calendar  calendar-time" />
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
            trigger:'.calendar',
            showTime : true,
            lockTime : { //可以锁定时间，hour,minute,second
              //hour : 12,
              minute:30,
              second : 30
            },
            autoRender : true
          });
    <?php if($useLoader || $useKissy) {?>
    });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

