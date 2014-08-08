<?php $title="修改错误样式"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form" action="" class="form-horizontal">
      <div class="control-group">
        <label class="control-label">城市：</label>
        <div class="controls bui-form-group-select" data-type="city">
          <select class="input-small"><option>省份</option></select>&nbsp;&nbsp;
          <select class="input-small"><option>城市</option></select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"><s>*</s>店铺名称：</label>
        <div class="controls">
          <input name="sname" type="text" class="input-large" data-rules="{required : true}">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"><s>*</s>地址：</label>
        <div class="controls">
          <input type="text" class="input-large" data-rules="{required : true}">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"><s>*</s>电话：</label>
        <div class="controls">
          <input type="text" class="input-large" data-rules="{required : true}">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">公交：</label>
        <div class="controls  control-row-auto">
          <textarea name="" id="" class="control-row4 input-large"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">地图坐标：</label>
        <div class="controls  control-row-auto">
          <div class="bordered span-width span8" style="height:200px;"></div>
          <div class="actions-bar actions-bar-small centered"><button type="button" class="button button-small">修改坐标</button></div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">其他：</label>
        <div class="controls">
          <label class="radio" for=""><input type="radio">规则未执行等同执行失败</label>&nbsp;&nbsp;&nbsp;
          <label class="radio" for=""><input type="radio">规则未执行等同执行成功</label>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"><s>*</s>店铺类型：</label>
        <div class="controls bui-form-group"  data-rules="{checkRange:1}" data-messages="{checkRange:'至少勾选一项！'}" >
          <label class="checkbox" for=""><input name="stype" value="1" type="checkbox">集市</label>
          <label class="checkbox" for=""><input name="stype" value="2" type="checkbox">商城</label>
          <label class="checkbox" for=""><input name="stype" value="3" type="checkbox">无名良品</label>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">使用营销工具：</label>
        <div class="controls">
          <label class="checkbox" for=""><input type="checkbox">店铺优惠券<i class=""></i></label>
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
  KISSY.use(['bui/form','bui/tooltip'],function(S,Form,Tooltip){
    <?php }else if($useLoader) {?>
  BUI.use(['bui/form','bui/tooltip'],function(Form,Tooltip){
    <?php }else{?>  
      var Form = BUI.Form,
        Tooltip = BUI.Tooltip;
    <?php }?>  
      new Form.Form({
        srcNode : '#J_Form',
        errorTpl : '<span class="x-icon x-icon-small x-icon-error" data-title="{error}">!</span>'
      }).render();

      //不使用模板的，左侧显示
      var tips = new Tooltip.Tips({
        tip : {
          trigger : '.x-icon-error', //出现此样式的元素显示tip
          alignType : 'top', //默认方向
          elCls : 'tips tips-warning tips-no-icon tip1',
          offset : 10 //距离左边的距离
        }
      });
      tips.render();

    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

