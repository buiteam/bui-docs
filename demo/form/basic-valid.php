<?php $title="基础验证规则"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form">
      <div class="row">
        <div class="span10">
          <p>
            <label>必填项：</label><input name="a" data-rules="{required:true}" type="text">
          </p>
          <p>
            <label>最大值：</label><input name="b" data-rules="{max:100}" type="text">
          </p>
          
          <p>
            <label>最小值：</label><input name="c" data-rules="{min:10}" type="text">
          </p>
          
          <p>
            <label>最小长度：</label><input name="d" data-rules="{minlength:5}" type="text">
          </p>
         
          <p>
            <label>最大长度：</label><input name="e" data-rules="{maxlength:5}" type="text">
          </p>
         
          <p>
            <label>第一次输入：</label><input id="f1" name="f1" type="text"><br/>
            <label>第二次输入：</label><input name="f2" data-rules="{equalTo:'#f1'}" type="text">
          </p>
      
        </div>
        <div class="span10">
          <p>
            <label>数字值：</label><input name="g" data-rules="{number:true}" type="text">
          </p>
       
          <p>
            <label>日期值：</label><input class="calendar" name="h" data-rules="{date:true}" type="text">
          </p>
      
          <p>
            <label>邮箱值：</label><input name="i" data-rules="{email:true}" type="text">
          </p>
   
          <p>
            <label>正则表达式：</label><input name="j" data-messages="{regexp:'不是有效的数字'}" data-rules="{regexp:/^\d+$/}" type="text">
          </p>
     
          <p>
            <label>最小日期：</label><input class="calendar" name="k" data-rules="{minDate:'2014-01-01'}" type="text">
          </p>

          <p>
            <label>最大日期：</label><input class="calendar" name="l" data-rules="{maxDate:'2012-01-01'}" type="text">
          </p>
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

