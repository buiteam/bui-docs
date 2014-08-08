<?php $title="基础验证规则"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form">
      <div class="row">
        <div class="span10">
          <p>
            <label>必填：</label><input name="a" data-rules="{required:true}" data-messages="{required:'xxx选项不能为空'}" type="text">
          </p>
          <p>
            <label>最大值：</label><input name="b" data-rules="{max:[100,'xxx不能大于{0}']}" type="text">
          </p>

          <p>
            <label>正则表达式：</label><input name="j" data-rules="{regexp:[/^\d+$/,'这里不是有效的数字']}" type="text">
          </p>
      
        </div>
        <div class="span10">
           <div class="control-group">
            <label class="control-label">日期范围：</label>
            <div class="bui-form-group controls" data-rules="{dateRange : [true,'begin date can not big than end date']}">
              <input name="start" type="text" class="calendar"/> - <input name="end" type="text" class="calendar"/>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">勾选2个：</label>
            <div class="bui-form-group controls" data-rules="{checkRange:[[2,2],'only two!']}">
              <label class="checkbox"><input name="ck" type="checkbox" value="1" />一</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="2" />二</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="3" />三</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="4" />四</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="5" />五</label>
            </div>
          </div>
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

