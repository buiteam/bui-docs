<?php $title="表单分组"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form">
      <div class="row">
        <div class="span10">
          <h2>指定类型的联动框</h2>
          <p>
            <div class="bui-form-group-select" data-type="city">
              <label>省市联动：</label>
              <select class="input-small" name="province" value="山东省">
                <option>请选择省</option>
              </select>
              <select class="input-small"  name="city"><option>请选择市</option></select>
              <select class="input-small"  name="county"><option>请选择县/区</option></select>
            </div>
          </p>
          <h2>指定url的联动框</h2>
          <p>
            <div class="bui-form-group-select" data-url="city.json">
              <label>省市联动：</label>
              <select class="input-small" name="province1" value="1">
                <option>请选择省</option>
              </select>
              <select class="input-small"  name="city1"><option>请选择市</option></select>
              <select class="input-small"  name="county1"><option>请选择县/区</option></select>
            </div>
          </p>

          <h2>自定义类型的联动框</h2>
          <p>
            <div class="bui-form-group-select" data-type="custom">
              <label>省市联动：</label>
              <select class="input-small" name="province1" value="1">
                <option>请选择省</option>
              </select>
              <select class="input-small"  name="city1"><option>请选择市</option></select>
              <select class="input-small"  name="county1"><option>请选择县/区</option></select>
            </div>
          </p>

        </div>
        <div class="span10">
          <h2>勾选1-2个</h2>
          <div class="bui-form-group-check" data-range="[1,2]" data-messages="{checkRange:'勾选{0}-{1}项'}">
            <label><input name="ck" type="checkbox" value="1" />一</label>
            <label><input name="ck" type="checkbox" value="2" />二</label>
            <label><input name="ck" type="checkbox" value="3" />三</label>
            <label><input name="ck" type="checkbox" value="4" />四</label>
            <label><input name="ck" type="checkbox" value="5" />五</label>
          </div>
          <hr>
          <h2>勾选2-4个</h2>
          <div class="bui-form-group-check" data-range="[2,4]" data-messages="{checkRange:'勾选{0}-{1}项'}">
            <label><input name="ck" type="checkbox" value="1" />一</label>
            <label><input name="ck" type="checkbox" value="2" />二</label>
            <label><input name="ck" type="checkbox" value="3" />三</label>
            <label><input name="ck" type="checkbox" value="4" />四</label>
            <label><input name="ck" type="checkbox" value="5" />五</label>
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

      var data = [{"id" : "1","text":"山东","children":[
        {"id":"11","text":"济南","leaf":false},
        {"id":"12","text":"淄博","leaf":false,"children":[
          {"id":"121","text":"高青","leaf":true}
        ]}
      ]}];
      //定义类型
      BUI.Form.Group.Select.addType('custom',{
        data : data //指定数据
      });
      new Form.Form({
        srcNode : '#J_Form'
      }).render();
    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

