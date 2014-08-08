<?php $title="Tree Menu"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8 offset3">
        <div id="t1">
          
        </div>
        <h2>点击的节点</h2>
        <div class="log well"></div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/tree',function (S,Tree){
    <?php }else{?>
    BUI.use('bui/tree',function (Tree) {
    <?php } ?>
      
      //利用侧边菜单的样式来构造树形菜单
      var menu = new Tree.TreeMenu({
        render : '#t1',
        elCls : 'bui-side-menu',  // BUI默认未提供树形菜单的样式，可以自己覆写样式或者传入选项的模板
        itemCls : 'bui-menu-item',
        expandAnimate : true,
        showIcons : false,
        dirTpl : '<li class="menu-second"><div class="bui-menu-title"><s></s><span class="bui-menu-title-text">{text}</span></div></li>',
        leafTpl : '<li class="menu-leaf"><a href="{href}"><em>{text}</em></a></li>',
        nodes : [
          {id : '1',text : '首页内容',expanded : true,children : [
            {id:'code',text:'首页代码',href:'main/code.html'},
            {id:'main-menu',text:'顶部导航',href:'main/menu.html'},
            {id:'second-menu',text:'右边菜单',href:'main/second-menu.html',children : [
              {id:'operation',text:'页面常见操作',href:'main/operation.html'},
              {id:'quick',text:'页面操作快捷方式',href:'main/quick.html'}  
            ]},
            {id:'dyna-menu',text:'动态菜单',href:'main/dyna-menu.html'}
          ]},
          {id:'2',text : '页面操作',expanded : true,children : [
            {id:'operation',text:'页面常见操作',href:'main/operation.html'},
            {id:'quick',text:'页面操作快捷方式',href:'main/quick.html'}  

          ]},
          {text : '文件结构',expanded : true,children : [
            {id:'resource',text:'资源文件结构',href:'main/resource.html'},
            {id:'loader',text:'引入JS方式',href:'main/loader.html'} 
          ]}
        ]
      });
      menu.render();

      menu.on('itemclick',function(ev){
        $('.log').text(ev.item.text);
      });
      
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

