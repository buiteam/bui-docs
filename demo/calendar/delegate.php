<?php $title="日期选择器"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form"  method="post">
      <h2>选择日期</h2>
      

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
            delegateTrigger : true,
            autoRender : true
          });

      $('<p><label>选择日期：</label><input type="text" class="calendar" /></p>').appendTo('#J_Form');
      $('<p><label>选择日期：</label><input type="text" class="calendar" /></p>').appendTo('#J_Form'); 
      
       
    <?php if($useLoader || $useKissy) {?>
    });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

