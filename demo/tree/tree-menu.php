<?php $title="Tree Menu"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  .test-menu .x-tree-elbow-expander{
    display:inline-block;
    width: 16px;
    height: 10px;
   background: url("http://bits.wikimedia.org/static-1.23wmf1/skins/vector/images/arrow-collapsed-ltr.png") left center no-repeat;
  }

  .test-menu .bui-tree-item-expanded .x-tree-elbow-expander{
    display:inline-block;
    width: 16px;
    height: 10px;
   background: url("http://bits.wikimedia.org/static-1.23wmf1/skins/vector/images/arrow-expanded.png") left center no-repeat;
  }
  .test-menu .x-tree-elbow-empty{
    display:inline-block;
    width: 8px;
    height: 10px;
  }

  .bui-tree-menu .bui-menu-title s{
    background-position:0 -30px;
  }

   .bui-tree-menu .bui-menu-item-expanded .bui-menu-title s{
    background-position:0 -71px;
  }
</style>
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
    
      var menu = new Tree.TreeMenu({
        render : '#t1',
        elCls : 'test-menu', // BUI默认未提供树形菜单的样式，可以自己覆写样式或者传入选项的模板
        nodes : [
          {text : '1',id : '1',leaf : false,children: []},
          {text : '2',id : '2',expanded : true,children : [
              {text : '21',id : '21',children : [{text : '211',id : '211'},{text : '212',id : '212',children : [{text : '2121',id : '2121'},{text : '2122',id : '2122'}]}]},
              {text : '22',id : '22'}
          ]},
          {text : '3',id : '3'},
          {text : '4',id : '4'}
        ]
      });
      menu.render();

      menu.on('itemclick',function(ev){
        $('.log').text(ev.item.text);
      });
      
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

