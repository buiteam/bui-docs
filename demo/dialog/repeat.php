<?php $title="异步加载内容"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
  <?php if($useKissy) {?>
  KISSY.use(['bui/overlay','bui/form','bui/mask'],function(S,Overlay,Form){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/overlay','bui/form','bui/mask'],function(Overlay,Form){
  <?php }else{?>
      var Overlay = BUI.Overlay,
        Form = BUI.Form;
  <?php }?>
      var form,
        dialog = new Overlay.Dialog({
            title:'异步加载内容',
            width:500,
            height:320,
            loader : {
              url : 'data/form.php',
              autoLoad : false, //不自动加载
              lazyLoad : false,
              callback : function(){
                var node = dialog.get('el').find('form');//查找内部的表单元素
                form = new Form.HForm({
                  srcNode : node,
                  autoRender : true
                });
              }
            },
            mask:false,
            success : function(){
              //可以直接action 提交
              form && form.submit(); //也可以form.ajaxSubmit(params);
            }
          });
      //dialog.show();
      var count = 0;
      $('#btnShow').on('click',function () {

        form && form.destroy(); //移除掉之前的表单
        dialog.show();
        var params = {a : count}; //加载表单的参数
        dialog.get('loader').load(params);
        count++;
      });
  <?php if($useLoader) {?>
  });
  <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>