<?php $title="直接配置html"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <div class="contentId">
      <iframe src="" frameborder="0"></iframe>
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
            //配置文本
            bodyContent:'<p>这里是配置的html:<a href="http://taobao.com">任意的链接</a></p><p>下一段文本</p>',
            success:function () {
              alert('确认');
              this.close();
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