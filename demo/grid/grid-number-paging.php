<?php $title="数据分页"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  .bui-pagingbar-number .active a{
    color: #f60;
  }
</style>
    <div class="row">
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
              width:300
          }];

        var store = new Store({
            autoLoad:true,
            remoteSort : true,
            url : 'data/grid-data.php',
            pageSize:1    // 需要在store中 配置pageSize
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            // 底部工具栏
            bbar:{
              pagingBar: {
                xclass: 'pagingbar-number'         
              }   
            },
            store : store
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

