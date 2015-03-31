<?php $title="直接配置html"?>
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
            title:'配置html',
            width:500,
            height:250,
            mask:true, // 显示mask
            zIndex: 1000, // 自定义zindex，比message的更小
            maskShared:false, // 不共用mask
            //配置文本
            bodyContent:'<p>点击确定，显示弹出框，确定dialog隐藏。</p>',
            success:function () {
              BUI.Message.Show({
                msg : '这是一个自定义的提示框?',
                icon : 'question',
                buttons : [
                  {
                    text:'yes',
                    elCls : 'button button-primary',
                    handler : function(){
                      dialog.close();
                      this.close();
                    }
                  },
                  {
                    text:'no',
                    elCls : 'button',
                    handler : function(){
                      this.close();
                    }
                  }
       
                ]
              });
            }
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