<?php $title="工具栏"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8">
        <h2>一般按钮分组</h2>
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
        //一般按钮分组
        var buttonGroup = new Toolbar.Bar({
          elCls : 'button-group',  //设置工具栏应用的样式
          elTagName : 'div',
          defaultChildCfg : {
            elTagName : 'button',
            elCls : 'button button-small' //设置按钮样式
          },
          children : [ //按钮
            {content : '增加',handler : function(){alert('增加')}}, 
            {content : '修改',handler : function(){alert('修改')}},
            {content : '删除',handler : function(){alert('删除')}}
          ],
          render : '#bar'
        });
   
        buttonGroup.render();
    <?php if($useLoader) {?>
    });
    <?php } ?>
  </script>
<?php include("../../templates/control-footer.php"); ?>

