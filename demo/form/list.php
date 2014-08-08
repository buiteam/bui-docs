<?php $title="获取表单数据"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form" class="form-horizontal">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label">供应商编码：</label>
            <div class="controls">
              <input name="id" type="text" data-rules="{required:true}" data-messages="{required:'供应商编码不能为空'}" class="input-normal control-text" data-tip="{text:'请输入供应商编码'}">
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
          <div class="control-group span8">
            <label class="control-label">列表一</label>
            <div class="controls bui-form-field-list bui-select-list control-row-auto" style="width:150px;"  data-items="{'1':'选项一','2' : '选项二','3' : '选项三'}">
              <input name="list1" type="hidden" value="1">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label">列表二</label>
            <div class="controls bui-form-field-list control-row-auto" style="width:150px;">
              <ul class="bui-simple-list  bui-select-list">
                <li data-value="1">选项一</li>
                <li data-value="2">选项二</li>
                <li data-value="3">选项三</li>
              </ul>
              <input name="list2" type="hidden" value="2">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">勾选列表</label>
            <div class="controls bui-form-field-checklist" data-items="{'1':'选项一','2' : '选项二','3' : '选项三'}">
              <input name="list3" type="hidden" value="1">
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">单选列表</label>
            <div class="controls bui-form-field-radiolist" data-items="{'1':'1','2' : '2','3' : '3'}">
              <input name="list4" type="hidden" value="1">
            </div>
          </div>
        </div>
        <div class="row form-actions actions-bar">
            <div class="span13 offset3 ">
              <button type="submit" class="button button-primary">保存</button>
              <button type="reset" class="button">重置</button>
              <button type="button" id="btnDisable" class="button">禁用/可用</button>
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
      var Form = BUI.Form
    <?php }?>
     var form =  new Form.HForm({
        srcNode : '#J_Form'
      }).render();

      $('#btnDisable').on('click',function(){
        form.set('disabled',!form.get('disabled'));
      })
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

