<?php $title="基本的树"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span4">
        <div class="panel panel-head-borded panel-small">
          <div class="panel-header">树列表</div>
          <div id="t1">
            
          </div>
        </div>
        
      </div>
      <div class="span16">
        <div class="panel panel-head-borded panel-small">
          <div class="panel-header">表格</div>
          <div id="g1">
          
          </div>
        </div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/tree','bui/grid','bui/data'],function (S,Tree,Grid,Data){
    <?php }else{?>
    BUI.use(['bui/tree','bui/grid','bui/data'],function (Tree,Grid,Data) {
    <?php } ?>

      var data = [ 
          {text : '1',id : '1',expanded : true,children: [{text : '11',id : '11'}]},
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
        nodes : data,
        showLine : true,
        height:250
      });
      tree.render();

      var store = new Data.Store({
          url : '../grid/data/grid-data.php',
          pageSize : 3
        }),
        columns = [
          {title : '表头1',dataIndex :'a',width:100}, 
          {title : '表头2',dataIndex :'b',width:200}, 
          {title : '表头3',dataIndex : 'c',width:200}
        ],
        grid = new Grid.Grid({
          render:'#g1',
          columns : columns,
          height:250,
          forceFit : true,
          loadMask: true,
          store: store,
          // 底部工具栏
          bbar:{
            // pagingBar:表明包含分页栏
            pagingBar:true
          }
        });
      grid.render();

      tree.on('selectedchange',function(ev){
        var node = ev.item;
        if(node.leaf){ //只有点击叶子节点才能加载Grid
          //加载对应的数据，同时将分页回复到第一页
          store.load({id : node.id,start : 0});
        }
      });
      var firstLeaf = tree.findNode('11'); //获取第一个叶子节点
      tree.setSelected(firstLeaf);
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

