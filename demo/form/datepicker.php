<?php $title="表单日期"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form" action="" class="form-horizontal">

      <div class="control-group">
        <label class="control-label">一般日期控件</label>
        <div class="controls">
          <input type="text" class="calendar" value="2010-01-02">
        </div>
      </div>

       <div class="control-group">
        <label class="control-label">日期时间控件</label>
        <div class="controls">
          <input type="text" class="calendar calendar-time">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label">起始日期：</label>
        <div class="controls bui-form-group" data-rules="{dateRange : true}">
          <input name="start" data-tip="{text : '起始日期'}" data-rules="{required:true}" data-messages="{required:'起始日期不能为空'}" class="input-small calendar" type="text"><label>&nbsp;-&nbsp;</label>
          <input name="end" data-rules="{required:true}" data-messages="{required:'结束日期不能为空'}" class="input-small calendar" type="text">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">限制日期</label>
        <div class="controls">
          <input type="text" class="calendar" data-cfg="{datePicker : {minDate : '2014-01-01',maxDate : '2014-05-01'}}">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">锁定分秒</label>
        <div class="controls">
          <input type="text" class="calendar calendar-time" data-cfg="{datePicker : {lockTime : {minute:30,second : 0 }}}">
        </div>
      </div>      

      <div class="control-group">
        <label class="control-label">日期格式</label>
        <div class="controls">
          <input type="text" class="calendar" data-cfg="{datePicker : {dateMask : 'yyyy/mm/dd'}}">
        </div>
      </div>  
      
      <div class="row actions-bar">       
          <div class="form-actions span13 offset3">
            <button type="submit" class="button button-primary">保存</button>
            <button type="reset" class="button">重置</button>
          </div>
      </div>       
    </form>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use('bui/form',function(S,Form){
    <?php }else if($useLoader) {?>
  BUI.use('bui/form',function(Form){
    <?php }else{?>  
      var Form = BUI.Form;
    <?php }?>  
      
      new Form.Form({
        srcNode : '#J_Form'
      }).render();
    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

