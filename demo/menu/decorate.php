<?php $title="标准栏菜单"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section well">  
        <h3>生成菜单</h3>
        <div class="row">
            <ul id="m1" class="demo-menu">
                <li class="bui-menu-item" data-id="1">菜单一</li>
                <li class="bui-menu-item" data-id="2">菜单二</li>
                <li class="bui-menu-item" data-id="3">菜单三</li>
            </ul>
        </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/menu',function(S,Menu){
    <?php }else if($useLoader) {?>
      BUI.use('bui/menu',function(Menu){
    <?php }else{?> 
        var Menu = BUI.Menu;
    <?php }?>  
        var menu = new Menu.Menu({
            srcNode : '#m1',
            isDecorateChild : true,
            width : 200
        });

        menu.render();
        menu.on('itemselected', function(e){
            alert(e.item.get('id'));
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>