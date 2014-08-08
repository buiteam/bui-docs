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
    
      //一次性异步加载所有数据
      var store = new Data.TreeStore({
          url : 'data/nodes1.php', //返回的数据如果数据有children字段，且children.length == 0 ，则认为存在未加载的子节点
                                    //leaf = false，没有children字段也会认为子节点未加载，展开时会自动加载
          autoLoad : true
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
    </script>
<?php include("../../templates/control-footer.php"); ?>

