<?php $title="表单选择框"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form" action="" class="form-horizontal">

      <div class="control-group">
        <label class="control-label">一般选择框</label>
        <div class="controls">
          <select name="a" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">设置初始值</label>
        <div class="controls">
          <select name="b" value="2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">设置选项</label>
        <div class="controls">
          <select name="c" data-items="{'1' : '1','2' : '2','3':'3','4' : '4'}" value="2">   
          </select>
        </div>
      </div>
      <div class="control-group">
          <label class="control-label">模拟单选下拉</label>
          <div class="controls bui-form-field-select" data-items="{'1':'1班','2' : '2班','3' : '3班'}">
            <input name="d" type="hidden" value="1">
          </div>
        </div>
      <div class="control-group">
        <label class="control-label">模拟多选下拉框</label>
        <div class="controls bui-form-field-select" data-items="{'1':'游泳','2':'跑步','3':'爬山'}" data-select="{multipleSelect:true}">
            <input name="e" type="hidden" value="1,2">
        </div>
      </div>

      <div class="control-group">
          <label class="control-label">模拟单选下拉</label>
          <div id="sel" class="controls bui-form-field-select"  data-items="{'1':'1班','2' : '2班','3' : '3班'}">
            <input name="f" type="hidden">

          </div>
          <button id="btnDisabled" type="button" class="button">禁用</button>
          <button id="btnEnabled" type="button"  class="button">可用</button>
      </div>

      <div class="control-group">
        <label class="control-label">第一级默认提供：</label>
        <div class="controls bui-form-group-select" data-type="custom1">
          <select name="g" class="input-small" value="2"><option>请选择</option></select>&nbsp;&nbsp;
          <select name="h" class="input-small"><option>请选择</option></select>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">级联下拉：</label>
        <div class="controls bui-form-group-select" data-type="city">
          <select class="input-small" value="山东省"><option>省份</option></select>&nbsp;&nbsp;
          <select class="input-small"><option>城市</option></select>
        </div>
      </div>
<!---->
      <div class="control-group">
          <label class="control-label">异步下拉：</label>
          <div class="controls bui-form-field-select" data-loader="{url:'data/select.php',property:'items',dataType:'json'}">
            <input name="d" type="hidden" value="1">
          </div>
      </div>
      
      <div class="row actions-bar">       
          <div class="form-actions span13 offset3">
            <button type="submit" class="button button-primary">保存</button>
            <button type="reset" class="button">重置</button>
          </div>
      </div>       
    </form>
    <div class="log well"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use('bui/form',function(S,Form){
    <?php }else if($useLoader) {?>
  BUI.use('bui/form',function(Form){
    <?php }else{?>  
      var Form = BUI.Form;
    <?php }?>  

      //定义级联下拉框的类型
      BUI.Form.Group.Select.addType('custom1',{
        url : '../tree/data/nodes.php',
        /**/
        root : {
          id : '0',
          children : [
            {id : '1',text : '1',leaf : false}, //leaf=false的，会自动加载下一级
            {id : '2',text : '2',leaf : false},
            {id : '3',text : '3',leaf : false},
            {id : '4',text : '4',leaf : false},
            {id : '5',text : '5',leaf : false},
            {id : '6',text : '6',leaf : false},
            {id : '7',text : '7'}
          ]
        }/**/
      });
      var form =   new Form.Form({
        srcNode : '#J_Form'
      }).render();
      var field = form.getChild('sel');
      $('#btnDisabled').on('click',function(){
        field.disable();
      });

      $('#btnEnabled').on('click',function(){
        field.enable();
      });

      form.on('beforesubmit',function(){
        $('.log').html(BUI.JSON.stringify(form.toObject()));
        return false;
      });
    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

