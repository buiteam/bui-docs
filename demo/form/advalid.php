<?php $title="分组验证规则"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form">
      <div class="row">
        <div class="span10">
          <div class="control-group">
            <label class="control-label">日期范围：</label>
            <div class="bui-form-group controls" data-rules="{dateRange : true}">
              <input name="start" type="text" class="calendar"/> - <input name="end" type="text" class="calendar"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">年龄范围：</label>
            <div class="bui-form-group controls" data-rules="{numberRange : true}">
              <input name="start" type="number" class="input-small"/> - <input name="end" type="number" class="input-small"/>
            </div>
          </div>
        </div>
        <div class="span10">
          <div class="control-group">
            <label class="control-label">勾选2个：</label>
            <div class="bui-form-group controls" data-rules="{checkRange:[2,2]}" data-messages="{checkRange:'只能选择2个'}">
              <label class="checkbox"><input name="ck" type="checkbox" value="1" />一</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="2" />二</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="3" />三</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="4" />四</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="5" />五</label>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">勾选2-4个：</label>
            <div class="bui-form-group controls" data-rules="{checkRange:[2,4]}" data-messages="{checkRange:'可以勾选{0}-{1}个选项！'}">
              <label class="checkbox"><input name="ck" type="checkbox" value="1" />一</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="2" />二</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="3" />三</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="4" />四</label>
              <label class="checkbox"><input name="ck" type="checkbox" value="5" />五</label>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">最少选择一项：</label>
            <div class="bui-form-group controls" data-rules="{checkRange:1}" data-messages="{checkRange:'至少选择一项！'}">
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

