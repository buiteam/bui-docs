<?php $title="表单提示"?>
<?php include("../../templates/control-header.php"); ?>
    <form class="form-horizontal">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label">供应商编码：</label>
            <div class="controls">
              <input name="id"  data-tip='{"text":"供应商编码","iconCls":"icon icon-user"}'  type="text" class="input-normal control-text">
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
            <label class="control-label">起始日期：</label>
            <div class="controls">
              <input name="start"  data-tip='{"text":"起始日期"}' class="input-small calendar" type="text"><label>&nbsp;-&nbsp;</label><input name="end" data-tip='{"text":"结束日期"}'  class="input-small calendar" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">备注：</label>
            <div class="controls control-row4">
              <textarea name="memo"  data-tip='{"text":"请填写备注"}' class="input-large" type="text"></textarea>
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
    <div class="row">
     
      <div class="span16">
        <div id="J_Log" class="well"></div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use(['bui/calendar','bui/form'],function(S,Calendar,Form){
    <?php }else if($useLoader) {?>
  BUI.use(['bui/calendar','bui/form'],function(Calendar,Form){
    <?php }else{?>
      var Calendar = BUI.Calendar,
          Form = BUI.Form;
    <?php }?>
      var datepicker = new Calendar.DatePicker({
            trigger:'.calendar',
            autoRender : true
          });

        var form = $('form')[0],
          tips = Form.Tips({
            form : form
          });
        tips.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

