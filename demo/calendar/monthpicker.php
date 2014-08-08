<?php $title="日历"?>
<?php include("../../templates/control-header.php"); ?>
    <p>
      <input type="text" id="J_Month" value="2012-02">
    </p>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use('bui/calendar',function(S,Calendar){
    <?php }else if($useLoader) {?>
  BUI.use('bui/calendar',function(Calendar){
    <?php }else{?>
      var Calendar = BUI.Calendar
    <?php }?>
      var inputEl = $('#J_Month'),
        monthpicker = new BUI.Calendar.MonthPicker({
          trigger : inputEl,
         // month:1, //月份从0开始，11结束
          autoHide : true,
          align : {
            points:['bl','tl']
          },
          //year:2000,
          success:function(){
            var month = this.get('month'),
              year = this.get('year');
            inputEl.val(year + '-' + (month + 1));//月份从0开始，11结束
            this.hide();
          }
        });
        monthpicker.render();
        monthpicker.on('show',function(ev){
          var val = inputEl.val(),
            arr,month,year;
          if(val){
            arr = val.split('-'); //分割年月
            year = parseInt(arr[0]);
            month = parseInt(arr[1]);
            monthpicker.set('year',year);
            monthpicker.set('month',month - 1);
          }
        });
    <?php if($useLoader || $useKissy) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

