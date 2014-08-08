<?php $title="日历"?>
<?php include("../../templates/control-header.php"); ?>
    <div id="calendar">
      
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
KISSY.use('bui/calendar',function(S,Calendar){
    <?php }else if($useLoader) {?>
BUI.use('bui/calendar',function(Calendar){
    <?php }else{?>
    var Calendar = BUI.Calendar
    <?php }?>
    var calendar = new Calendar.Calendar({
          render:'#calendar'
        });
        calendar.render();
        calendar.on('selectedchange',function (ev) {
          alert(ev.date);
        });
    <?php if($useLoader || $useKissy) {?>
});
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

