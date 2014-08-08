<?php $title="显示连接线的树"?>
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
    KISSY.use(['bui/tree','bui/data','bui/mask'],function (S,Tree,Data,Mask){
    <?php }else{?>
    BUI.use(['bui/tree','bui/data','bui/mask'],function (Tree,Data,Mask) {
    <?php } ?>
    
      //数据缓冲类
      var store = new Data.TreeStore({
          proxy : {
            url : 'http://lp.taobao.com/go/rgn/citydistrictdata.php',
            dataType : 'jsonp'
          },
          map : {
            isleaf : 'leaf',
            value : 'text'
          },
          autoLoad : true
        });
        
      var tree = new Tree.TreeList({
        render : '#t1',
        showLine : true,
        height:300,
        loadMask : new Mask.LoadMask({el : '#t1'}),
        store : store,
        checkType : 'all',
        multipleCheck : false
      });
      tree.render();
      

      tree.on('itemclick',function(ev){
        var item = ev.item;
        $('.log').text(item.path);
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

