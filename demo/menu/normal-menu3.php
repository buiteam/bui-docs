<?php $title="标准栏菜单"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section well">  
      <h3>菜单项统一自定义</h3>
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
        var Menu = BUI.Menu
    <?php }?>  
        var menu = new Menu.Menu({
          render : '#m1',
          width : 200,
          elCls: 'demo-menu',
          children : [
            {
              href :'http://www.taobao.com',
              text : '链接1',
              selected:true
            },
            {
              id : 'm12',
              href :'http://www.taobao.com',
              text : '链接2'
            },
            {
              href :'http://www.taobao.com',
              text : '链接3'
            }
          ],
          itemTpl:'<span><label>▶ </label><a href="{href}">{text}</a></span>'
        });
        menu.render();
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>