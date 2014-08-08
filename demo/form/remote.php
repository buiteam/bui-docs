<?php $title="基础验证规则"?>
<?php include("../../templates/control-header.php"); ?>
    <form id="J_Form">
    
          <p>
            <label>异步验证(必须小于5个字符)：</label><input name="a" data-rules="{required:true}" data-remote="data/remote.php" type="text">
          </p>
          <p>
            <label>js添加验证(必须小于3个字符)：</label><input name="b" data-rules="{required:true}"  type="text">
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
      var form = new Form.Form({
        srcNode : '#J_Form'
      }).render();
      var aField = form.getField('a'),
        bField = form.getField('b');
      bField.set('remote',{
         url : 'data/remote.php',
         dataType:'json',//默认为字符串
         callback : function(data){
           if(data.success){
            return '';
           }else{
            return data.msg;
           }
         }
      });

      aField.on('remotestart',function(ev){ //异步校验前触发，可以附加参数
        var data = ev.data;
        data.appendA = 'a param';
        data.appendB = 'b param';
      });
    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

