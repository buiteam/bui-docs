<?php $title="工具栏"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span16">
        <div id="bar">
          
        </div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/toolbar',function(S,Toolbar){
    <?php }else if($useLoader) {?>
      BUI.use('bui/toolbar',function(Toolbar){
    <?php }else{?>
        var Toolbar = BUI.Toolbar;
    <?php }?>
        var bar = new Toolbar.Bar({
            render : '#bar',
            elCls: 'toolbar',
            children : [
              {
                content:'<label class="checkbox"><input type="checkbox">全选</label>'
              },
              {
                xtype:'text',
                text : '文本内容'
              },
              {
                xtype:'separator'
              },
              {
                xtype:'button',
                btnCls : 'button button-success',
                text:'审核通过'
              },{
                xtype:'spacer',
                width : 20
              },
              {
                xtype:'button',
                btnCls : 'button button-inverse',
                text:'审核不通过'
              }
            ]
          });
          bar.render();
    <?php if($useLoader) {?>
    });
    <?php } ?>
  </script>
<?php include("../../templates/control-footer.php"); ?>

