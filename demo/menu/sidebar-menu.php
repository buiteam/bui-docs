<?php $title="侧边栏菜单"?>
<?php include("../../templates/control-header.php"); ?>
    <div id="m2"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/menu',function(S,Menu){
    <?php }else if($useLoader) {?>
      BUI.use('bui/menu',function(Menu){
    <?php }else{?> 
        var Menu = BUI.Menu
    <?php }?>  
        var sideMenu = new Menu.SideMenu({
          render:'#m2',
          width:200,
          items : [
            {text:'基本结构',
              items:[
              {
                text : '上部导航',
                href:'1.php'
              },
              {
                id:'ss1',
                text:'左边导航',
                href:'2.php'
              }
            ]},
            {
              text:'常用页面',
              collapsed:true,
              items:[
                {
                  text : '上部导航',
                  href:'1.php'
                },{
                  text:'左边导航',
                  href:'2.php'
                }
              ]
            }
          ]
        });

        sideMenu.render();
        sideMenu.on('menuclick', function(e){
          console.log(e.item.get('href'));
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>