<?php $title="表单分组"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="well">
      <button id="btn" class="button button-small">展开/折叠</button>
      <button id="btn1"  class="button button-small">禁用分组</button>
      <button id="btn2"  class="button button-small">可用分组</button>
      <button id="btn3"  class="button button-small">清空数据</button>
    </div>

    <form id="J_Form" class="form-horizontal" data-depends="{'#btn:click':['toggle'],'#btn3:click':['clearFields']}">
      <div class="row">
        <div class="control-group span8">
          <label class="control-label"><s>*</s>供应商编码：</label>
          <div class="controls">
            <input name="id" type="text" data-rules="{required:true}" class="input-normal control-text">
          </div>
        </div>
        <div class="control-group span8">
          <label class="control-label"><s>*</s>供应商类型：</label>
          <div class="controls">
            <select  data-rules="{required:true}"  name="type" class="input-normal"> 
              <option value="">请选择</option>
              <option value="saler">淘宝卖家</option>
              <option value="large">大厂直供</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="control-group span15 ">
          <label class="control-label">起始日期：</label>
          <div id="range" class="controls bui-form-group" data-depends="{'#btn1:click':['disable'],'#btn2:click':['enable']}">
            <input name="start" class="calendar" type="text"><label> - </label><input name="end" class="calendar" type="text">
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

      new Form.HForm({
        srcNode : '#J_Form'
      }).render();
    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

