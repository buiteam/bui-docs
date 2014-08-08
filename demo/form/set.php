<?php $title="设置表单数据"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <h2>表单数据</h2>
      <div class="span16">
        <div id="J_Log" class="well"></div>
      </div>
    </div>

    <form class="form-horizontal">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label">供应商编码：</label>
            <div class="controls">
              <input name="id" type="text" class="input-normal control-text">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label">供应商类型：</label>
            <div class="controls">
              <select name="type" class="input-normal"> 
                <option value="saler">淘宝卖家</option>
                <option value="large">大厂直供</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">选择范围：</label>
            <div class="controls">
              <label class="checkbox"><input name="range" type="checkbox" value="1">范围1</label> 
              <label class="checkbox"><input name="range" type="checkbox" value="2">范围2</label> 
              <label class="checkbox"><input name="range" type="checkbox" value="3">范围3</label> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">起始日期：</label>
            <div class="controls">
              <input name="start" class="input-small calendar" type="text"><label>&nbsp;-&nbsp;</label><input name="end" class="input-small calendar" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">备注：</label>
            <div class="controls control-row4">
              <textarea name="memo" class="input-large" type="text"></textarea>
            </div>
          </div>
        </div>
        <div class="row form-actions actions-bar">
            <div class="span13 offset3 ">
              <button type="submit" class="button button-primary">保存</button>
              <button type="reset" class="button">重置</button>
            </div>
        </div>
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
            autoRender : true
          });

      var data = {"id":"123","type":"saler","start":"2012-11-14","end":"2012-11-21","memo":"ddd","range" : ['1','2']},
          form = $('form')[0],
          logEl = $('#J_Log');
          logEl.text(BUI.JSON.stringify(data));
          BUI.FormHelper.setFields(form,data);
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

