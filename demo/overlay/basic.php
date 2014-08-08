<?php $title="自定义按钮"?>
<?php include("../../templates/control-header.php"); ?>
    <style>
      .cutom {
        padding: 5px;
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
      var Overlay = BUI.Overlay
  <?php }?>
    //点击#btn，显示overlay
    var overlay = new Overlay.Overlay({
      trigger : '#btnShow',
      content : '这是内容',
      align : {
        //node : '',//对齐的元素，由于使用了trigger，默认跟trigger对齐
        points : ['tr','tl'], //对齐方式
        offset : [5,5] //偏移量
      },
      elCls : 'bordered cutom',
      autoHide : true //点击overlay外面，overlay 会自动隐藏
    });

    overlay.render();

  <?php if($useLoader) {?>
  });
  <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>