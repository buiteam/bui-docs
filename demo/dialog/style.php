<?php $title="自定义样式窗口"?>
<?php include("../../templates/control-header.php"); ?>

    <style type="text/css">
      .custom-dialog{
        border: none;
        -webkit-box-shadow : none;
        box-shadow : none;
      }

      .custom-dialog .bui-stdmod-header,.custom-dialog .bui-stdmod-footer{
        display: none;
      }
     
    </style>
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
      var Overlay = BUI.Overlay;
    <?php }?>
     var dialog = new Overlay.Dialog({
            width:500,
            height:250,
            elCls : 'custom-dialog',
            bodyContent:'<p>这是一个模态窗口,修改dialog样式</p>',
            buttons : []
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
