<?php $title="分组验证规则"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form">

      <h2>自定义基本验证</h2>
      <p>
        <label>学生编号(5位数字)：</label><input data-rules="{required:true,sid:5}" type="text">   
      </p>
      <p>
        <label>学生编号(6位数字)：</label><input data-rules="{required:true,sid:6}" type="text">   
      </p>       
      <h2>自定义分组验证</h2>
      <p>
        <div class="bui-form-group" data-rules="{cube : 100}">
          <label>体积：</label>
          <input class="input-small" data-rules="{number:true,required : true}" type="text">
          <input class="input-small" data-rules="{number:true,required : true}" type="text">   
          <input class="input-small" data-rules="{number:true,required : true}" type="text">      
        </div>
      </p>
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
      //添加 名字为 sid的校验规则
      Form.Rules.add({
        name : 'sid',  //规则名称
        msg : '请填写{0}数字的学生编号。',//默认显示的错误信息
        validator : function(value,baseValue,formatMsg){ //验证函数，验证值、基准值、格式化后的错误信息
          var regexp = new RegExp('^\\d{' + baseValue + '}$');
          if(value && !regexp.test(value)){
            return formatMsg;
          }
        }
      }); 
      //添加分组
      Form.Rules.add({
        name : 'cube',  //规则名称
        msg : '体积不能大于{0}。',//默认显示的错误信息
        validator : function(value,baseValue,formatMsg,group){ //验证函数，验证值、基准值、格式化后的错误信息、goup控件
          var fields = group.getFields(),
            cube = 1;
          BUI.each(fields,function(field){
            cube *= field.get('value');
          });
          if(cube > baseValue){
            return formatMsg;
          }
        }
      }); 


      new Form.Form({
        srcNode : '#J_Form'
      }).render();
    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

