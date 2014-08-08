<?php $title="异步加载内容"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
  <?php if($useKissy) {?>
  KISSY.use(['bui/overlay','bui/mask'],function(S,Overlay){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/overlay','bui/mask'],function(Overlay){
  <?php }else{?>
      var Overlay = BUI.Overlay
  <?php }?>
      var dialog = new Overlay.Dialog({
            title:'异步加载内容',
            width:500,
            height:300,
            loader : {
              url : 'data/text.php',
              autoLoad : false, //不自动加载
              params : {a : 'a'},//附加的参数
              lazyLoad : false, //不延迟加载
              /*, //以下是默认选项
              dataType : 'text',   //加载的数据类型
              property : 'bodyContent', //将加载的内容设置到对应的属性
              loadMask : {
                //el , dialog 的body
              },
              lazyLoad : {
                event : 'show', //显示的时候触发加载
                repeat : true //是否重复加载
              },
              callback : function(text){
                var loader = this,
                  target = loader.get('target'); //使用Loader的控件，此处是dialog
                //
              }
              */
            },
            mask:false
          });
      //dialog.show();
      var count = 0;
      $('#btnShow').on('click',function () {
        dialog.show();
        dialog.get('loader').load({a : count});
        count++;
      });
  <?php if($useLoader) {?>
  });
  <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>