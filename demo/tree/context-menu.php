<?php $title="右键彩电"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8 offset3">
        <div id="t1">
          
        </div>
       
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/tree','bui/menu'],function (S,Tree,Menu){
    <?php }else{?>
    BUI.use(['bui/tree','bui/menu'],function (Tree,Menu) {
    <?php } ?>
    
      //树节点数据，
      //text : 文本，
      //id : 节点的id,
      //leaf ：标示是否叶子节点，可以不提供，根据childern,是否为空判断
      //expanded ： 是否默认展开
      var data = [ 
          {text : '1',id : '1',children: [{text : '11',id : '11'}]},
          {text : '2',id : '2',expanded : true,children : [
              {text : '21',id : '21',children : [{text : '211',id : '211'},{text : '212',id : '212'}]},
              {text : '22',id : '22'}
          ]},
          {text : '3',id : '3'},
          {text : '4',id : '4'}
        ];
      //由于这个树，不显示根节点，所以可以不指定根节点
      var tree = new Tree.TreeList({
        render : '#t1',
        root : {                  //由于要显示根节点，所以需要配置根节点
          id : '0',
          text : '根节点',
          expanded : true,
          children : data
        },
        showLine : true, //显示连接线
        showRoot : true
      });
      tree.render();

      var itemClick = function(){
        console.log('right click');
        //menu.hide();
      }
      var menu = new Menu.ContextMenu({
        children : [
          {
            iconCls:' icon-plus',
            text : '新建',
            listeners:{
              'click':itemClick
            }
          },
          {xclass:'menu-item-sparator'},
          {
            iconCls:'icon-remove',
            text: '删除'
          },
          {
            iconCls:'icon-pencil',
            text : '编辑',
            listeners:{
              'click':itemClick
            }
          }
        ]
      });

      tree.on('itemcontextmenu',function(ev){
        var item = ev.item;
        tree.setSelected(item);
        menu.set('xy',[ev.pageX,ev.pageY]);

        menu.show();
        
        return false; //prevent the default menu
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

