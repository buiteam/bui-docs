<?php $title="自定义按钮"?>
<?php include("../../templates/control-header.php"); ?>
    <style>
      .cutom {
        padding: 5px;
        border:1px solid #cdcdcd;
        background-color: red;
        color: #fff;
        width:50px;
        height: 50px;
      }
    </style>
    <div id="align" class="well" style="height:100px;width:100px"></div>
    <p>
      <select id="J_Type">
        <option value="none">none</option>
        <option value="linear">linear</option>
        <option value="fade">fade</option>
        <option value="slide">slide</option>
      </select>
      <button id="btnShow" class="button button-primary">显示</button>
    </p>
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
      content : '<p>这是内容</p>',
      align : {
        node : '#align',//对齐的元素，由于使用了trigger，默认跟trigger对齐
        points : ['tl','tl'], //对齐方式
        offset : [5,5] //偏移量
      },
      elCls : 'bordered cutom',
      autoHide : true //点击overlay外面，overlay 会自动隐藏
    });

    overlay.render();

    $('#btnShow').on('click',function(){
      var type = $('#J_Type').val(),
        effect = {
          effect : type,
          duration : 500,
          callback : function(){
            console && console.log('show end');
          }
        };
      overlay.set('effect',effect);
      overlay.show();
    });

  <?php if($useLoader) {?>
  });
  <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>