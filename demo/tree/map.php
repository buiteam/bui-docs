<?php $title="显示连接线的树"?>
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
    KISSY.use(['bui/tree','bui/data'],function (S,Tree,Data){
    <?php }else{?>
    BUI.use(['bui/tree','bui/data'],function (Tree,Data) {
    <?php } ?>
    
      //树节点数据，
      //text : 文本，
      //id : 节点的id,
      //leaf ：标示是否叶子节点，可以不提供，根据childern,是否为空判断
      //expanded ： 是否默认展开
      var data = [ 
          {name : '1',uid : '1',nodes: [{name : '11',uid : '11'}]},
          {name : '2',uid : '2',expanded : true,nodes : [
              {name : '21',uid : '21',nodes : [{name : '211',uid : '211'},{name : '212',uid : '212'}]},
              {name : '22',uid : '22'}
          ]},
          {name : '3',uid : '3'},
          {name : '4',uid : '4'}
        ];
      var store = new Data.TreeStore({
        map : {
          name : 'text',
          uid : 'id',
          nodes : 'children'
        },
        root : {
          children : data
        }
      });

      //由于这个树，不显示根节点，所以可以不指定根节点
      var tree = new Tree.TreeList({
        render : '#t1',
        store : store,
        showLine : true //显示连接线
      });
      tree.render();

      tree.on('itemclick',function(ev){
        var item = ev.item;
        $('.log').text(item.text);
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

