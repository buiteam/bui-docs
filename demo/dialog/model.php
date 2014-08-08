<?php $title="模态窗口"?>
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
            title:'模态窗口',
            width:500,
            height:250,
            bodyContent:'<p>这是一个模态窗口,默认带有确认取消按钮</p>',
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