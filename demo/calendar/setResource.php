<?php $title="日期选择器"?>
<?php include("../../templates/control-header.php"); ?>
    <form  method="post">
      <h2>选择日期</h2>
      <p>
        <label>选择日期：</label><input type="text" class="calendar" />
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
      /*配置语言包，默认配置示例：
      ｛
        yearMonthMask: 'yyyy 年 mm 月',
        months : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],
        weekDays : ['日','一','二','三','四','五','六'],
        today : "今天",
        clean : "清除",
        submit : "确定",
        cancel : "取消"
       ｝
      */
      Calendar.Resource.yearMonthMask = 'yyyy/mm';
      var datepicker = new Calendar.DatePicker({
            trigger:'.calendar',
            autoRender : true
          });
    <?php if($useLoader || $useKissy) {?>
    });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

