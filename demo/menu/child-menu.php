<?php $title="标准菜单"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section well">  
        <h3>直接创建菜单项</h3>
        <div class="row">
            <div id="m1"></div>
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
        var menu1 = new Menu.MenuItem({
            content : '菜单一',
            selected:true
          }),
          menu2 = new Menu.MenuItem({
            id : 'm12',
            content: '菜单二'
          }),
          menu3 = new Menu.MenuItem({
            tpl : '<span><a href="{href}">{text}</a></span>',
            href :'http://www.taobao.com',
            text : '链接'
          });

        var menu = new Menu.Menu({
            render : '#m1',
            width : 200,
            elCls: 'demo-menu',
            children : [
              menu1,menu2,menu3
            ]
        });

        menu.render();
        menu.on('itemselected', function(e){
            console.log(e.item.get('content'));
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>