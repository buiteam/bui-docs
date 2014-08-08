<?php $title="表格自适应"?>
<?php include("../../templates/control-header.php"); ?> 
  <style>
    .bui-drag-line{
      position: absolute;
      border-left: 1px solid #ccc;
    }
  </style>
    <p>拖拽改变列宽度</p>
    <div id="grid">
          
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use(['bui/grid','bui/data'],function(S,Grid,Data){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    <?php }else{?>
        var Grid = BUI.Grid,
            Data = BUI.Data;
    <?php }?>
        var Grid = Grid,
          Store = Data.Store,
          columns = [
            {title : '表头1',dataIndex :'a', width:100},
            {id: '123',title : '表头2',dataIndex :'b', width:100},
            {title : '表头3',dataIndex : 'c',width:200}
          ];

        var store = new Data.Store({
            sortInfo : { //需要设置排序字段和排序方向
              field : 'a',
              direction : 'ASC'
            },
            url : 'data/group.php',
            autoLoad : true
          }),
          group = new Grid.Plugins.RowGroup({ //文本和分组
            renderer : function(text,group){ //group : 包括 value,text和items
              var items = group.items,
                sum = store.sum('b',items);
              return text + '（'+items.length+'）- total : ' + sum;
            }
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            store: store,
            forceFit : true,
            plugins : [group]  // 插件形式引入行分组，如果不需要格式化可以直接传入 Grid.Plugins.RowGroup
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

