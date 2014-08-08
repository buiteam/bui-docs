<?php $title="侧边栏菜单"?>
<?php include("../../templates/control-header.php"); ?>
    <h3>点击下方灰色区域</h3>
    <div class="well" id="content" style="width:100px;height:100px;"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/menu',function(S,Menu){
    <?php }else if($useLoader) {?>
      BUI.use('bui/menu',function(Menu){
    <?php }else{?> 
        var Menu = BUI.Menu
    <?php }?>  
        var subMenu = new Menu.ContextMenu({
          children : [
            {
              iconCls:'icon-refresh',
              text : '刷新'

            },
            {xclass:'menu-item-sparator'},
            {
              id : 'm13',
              iconCls:'icon-remove',
              text: '关闭'
            },
            {
              iconCls:'icon-remove-sign',
              text : '关闭所有'
            }
          ]
        }),
        menu = new Menu.ContextMenu({
          children : [
            {
              iconCls:'icon-refresh',
              text : '刷新',
              listeners:{
                'click':itemClick
              }
            },
            {xclass:'menu-item-sparator'},
            {
              id : 'm12',
              iconCls:'icon-remove',
              text: '关闭',
              subMenu : subMenu
            },
            {
              iconCls:'icon-remove-sign',
              text : '关闭所有',
              listeners:{
                'click':itemClick
              }
            }
          ]
        });

        var contentEl = $('#content');
        contentEl.on('click',function(e){
          menu.set('xy',[e.pageX,e.pageY]);
          menu.show();
        });

        function itemClick(e){
          var target = e.target;
          alert(target.get('text'));
        }

        subMenu.on('itemclick', function(){
          alert(subMenu.getSelectedText());
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>