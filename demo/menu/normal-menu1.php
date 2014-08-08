<?php $title="标准栏菜单"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section well">  
      <h3>默认菜单项</h3>
      <div class="row">
        <div id="m1"></div>
      </div>
      <div class="row" style="margin-top: 10px;">
        <button id="J_BtnAdd" type="button" class="button">添加一项</button>
        <button id="J_BtnRemove" type="button" class="button">移除选中项</button>
      </div>
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
        var menu = new Menu.Menu({
          render : '#m1',
          width : 200,
          elCls: 'demo-menu',
          children : [
            {
              content : '菜单一',
              selected:true
            },
            {
              id : 'm12',
              content: '菜单二'
            },
            {
              content : '菜单三'
            }
          ]
        });

        menu.render();
        $('#J_BtnAdd').on('click', function(){
          if(menu.getItemCount() === 5){
            alert('最多5个菜单项');
            return;
          }
          menu.addChild({
            content : '新增菜单'
          });
        });
        $('#J_BtnRemove').on('click', function(){
          if(menu.getItemCount() === 1){
            alert('至少1个菜单项');
            return;
          }
          menu.removeItem(menu.getSelected());
          menu.setSelected(menu.getFirstItem());
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>