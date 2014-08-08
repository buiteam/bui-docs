<?php $title="日期选择器"?>
<?php include("../../templates/control-header.php"); ?>
    <form  method="post">
      <h2>选择日期</h2>
      <p>
        <label>选择日期：</label><input id="t1" type="text" class="calendar" />
      </p>
       <p>
        <label>选择日期：</label><input id="t2" type="text" class="calendar calendar-time" />
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
            trigger:'#t1',
            dateMask : 'yyyy/mm/dd',
            autoRender : true
          });

      var datepicker1 = new Calendar.DatePicker({
            trigger:'#t2',
            showTime : true,
            dateMask : 'yyyy/mm/dd HH:MM:ss',
            autoRender : true
          });
    <?php if($useLoader || $useKissy) {?>
    });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

