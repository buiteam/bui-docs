<?php $title="可关闭浮层"?>
<?php include("../../templates/control-header.php"); ?>
    <style>
      .cutom {
        padding: 15px;
        border:1px solid #ddd;
      }

      .cutom .x-close{
        position: absolute;
        top:5px;
        right: 5px;
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
      closeable : true,
      closeTpl : '<a class="x-close" href="javascript:void(0);"><i class="icon icon-remove-sign"></i></a>',
      align : {
        //node : '',//对齐的元素，由于使用了trigger，默认跟trigger对齐
        points : ['tr','tl'], //对齐方式
        offset : [5,5] //偏移量
      },
      width:100,
      elCls : 'bordered cutom'
    });

    overlay.render();

  <?php if($useLoader) {?>
  });
  <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>