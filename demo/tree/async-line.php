<?php $title="一次异步加载"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-tree-list{
      overflow: auto;
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
    KISSY.use(['bui/tree','bui/data'],function (S,Tree,Data){
    <?php }else{?>
    BUI.use(['bui/tree','bui/data'],function (Tree,Data) {
    <?php } ?>
      //返回数据后创建tree
      $.getJSON('data/line-nodes.php',function(data){

        var store = new Data.TreeStore({
          pidField : 'pid', //设置pid的字段名称
          root : {
            id : '1',
            text : '1'
          },
          data : data
        });
          
        var tree = new Tree.TreeList({
          render : '#t1',
          showLine : true,
          height:300,
          store : store
        });
        tree.render();
        

        tree.on('itemclick',function(ev){
          var item = ev.item;
          $('.log').text(item.text);
        });
      });
      
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

