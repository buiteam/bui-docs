<?php $title="后台排序"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <h2>点击表头排序</h2>
      <div class="span16">
        <div id="grid">
          
        </div>
      </div>
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
          columns = [{
              title : '表头1',
              dataIndex :'a',
              width:100
            },{
              title : '表头2',
              dataIndex :'b',
              width:200
            },{
              title : '表头3',
              dataIndex : 'c',
              width:200
          }];

        /**
         * 此时除了start,limit和pageIndex 3个参数外也会传递一下2个参数：
         *   1. field（排序字段）
         *   2. direction（排序方向
         */
        var store = new Store({
            url : 'data/grid-data.php',
            autoLoad:true,
            sortInfo : {
              field : 'a',
              direction : 'ASC' //升序ASC，降序DESC
            },  
            remoteSort: true	// 开启异步排序
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            loadMask: true,
            store: store,
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

