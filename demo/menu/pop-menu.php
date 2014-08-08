<?php $title="弹出菜单"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" /> 
    <div class="row">
      <div class="span8"><button id="btn" class="button">点击弹出菜单<span class="x-caret x-caret-down"></span></button></div>
      <div class="span8"><a id="link" href="javascript:void(0);">悬浮弹出菜单</a></div>
    </div>
    <?php include("../../templates/script.php"); ?>  
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/menu',function(S,Menu){
    <?php }else if($useLoader) {?> 
      BUI.use('bui/menu',function(Menu){
    <?php }else{?> 
        var Menu = BUI.Menu
    <?php }?>  
        var dropMenu1 = new Menu.PopMenu({
          trigger : '#btn',
          autoRender : true,
          width : 140,
          children : [{
            id:'m1',
            content : "选项1"
          },{
            content : "选项2"
          },{
            content : "选项3"
          }]
        }),
        dropMenu2 = new Menu.PopMenu({
          trigger : '#link',
          autoRender : true,
          triggerEvent : 'mouseenter',
          triggerHideEvent : 'mouseleave',
          autoHideType:'leave',
          width : 140,
          children : [{
            id:'m5',
            content : "选项1"
          },{
            content : "选项2"
          },{
            content : "选项3"
          }]
        });
        dropMenu1.on('itemselected', function(){
          alert(dropMenu1.getSelectedText() + '：' + dropMenu1.getSelectedValue());
        });
        dropMenu2.on('itemselected', function(){
          alert(dropMenu2.getSelectedText() + '：' + dropMenu2.getSelectedValue());
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>