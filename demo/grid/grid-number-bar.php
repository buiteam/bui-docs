<?php $title="数据分页"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  .bui-pagingbar-number{
    margin-top: 20px;
  }
</style>
    <div class="row">
      <div class="span16">
        <div id="grid">
          
        </div>
        <div id="bar"></div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use(['bui/grid','bui/data','bui/toolbar'],function(S,Grid,Data,Toolbar){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/grid','bui/data','bui/toolbar'],function(Grid,Data,Toolbar){
    <?php }else{?>
        var Grid = BUI.Grid,
            Toolbar = BUI.Toolbar,
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
            url : 'data/grid-data.php',
            autoLoad:true,
            remoteSort : true,
            pageSize:1    // 需要在store中 配置pageSize
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            store : store
          });

        var bar = new Toolbar.NumberPagingBar({
          render : '#bar',
          elCls : 'pagination pull-right',
          store : store
        });
        bar.render();

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

