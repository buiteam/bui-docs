<?php $title="显示连接线的树"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-tree-list{
      overflow: auto;
    }
  </style>
    <div class="row">
      <div class="span8 offset3">
        <div>
          <button id="reload" class="button">重新加载</button>
        </div>
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
    
      //数据缓冲类
      var store = new Data.TreeStore({
          root : {
            id : '0',
            text : '0',
            checked : false
          },
          pidField : 'pid',
          url : 'data/nodes.php'/*,
          autoLoad : true*/
        });
        
      var tree = new Tree.TreeList({
        render : '#t1',
        showLine : true,
        height:300,
        store : store,
        checkType : 'all',
        showRoot : true
      });
      tree.render();
      

      tree.on('itemclick',function(ev){
        var item = ev.item;
        $('.log').text(item.text);
      });
      $('#reload').on('click',function(){
        var node = tree.getSelected();
        if(node){
          /*tree.collapseNode(node);
          node.children = [];
          node.loaded = false;
          
         node.expanded = false;*/
          store.reloadNode(node);
        } 
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

