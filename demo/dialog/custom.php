<?php $title="自定义按钮"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
  <?php if($useKissy) {?>
  KISSY.use('bui/overlay',function(S,Overlay){
  <?php }else if($useLoader) {?>
  BUI.use('bui/overlay',function(Overlay){
  <?php }else{?>
      var Overlay = BUI.Overlay
  <?php }?>
      var dialog = new Overlay.Dialog({
            title:'自定义按钮',
            width:500,
            height:300,
            mask:false,
            buttons:[
              {
                text:'自定义',
                elCls : 'button button-primary',
                handler : function(){
                  //do some thing
                  this.close();
                }
              },{
                text:'关闭',
                elCls : 'button',
                handler : function(){
                  this.close();
                }
              }
            ],
            
            bodyContent:'<p>这是一个自定义按钮窗口,可以配置事件和文本样式</p>'
          });
      dialog.show();
      $('#btnShow').on('click',function () {
        dialog.show();
      });
  <?php if($useLoader) {?>
  });
  <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>