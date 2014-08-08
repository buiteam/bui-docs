<?php $title="日历"?>
<?php include("../../templates/control-header.php"); ?>
    <div id="month" style="position:relative;"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use('bui/calendar',function(S,Calendar){
    <?php }else if($useLoader) {?>
  BUI.use('bui/calendar',function(Calendar){
    <?php }else{?>
      var Calendar = BUI.Calendar
    <?php }?>
      var monthpicker = new BUI.Calendar.MonthPicker({
          render:'#month',
          month:1,
          visible:true,
          align : {
            points:['tl','tl']
          },
          year:2000,
          success:function(){
            alert(this.get('year') + ' ' + this.get('month'));
          }
        });
        monthpicker.render();
    <?php if($useLoader || $useKissy) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

