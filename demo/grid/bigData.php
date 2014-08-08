<?php $title="异步加载数据,分页"?>
<?php include("../../templates/control-header.php"); ?>
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
          columns = [{title:'a',dataIndex:'a'},{title:'b',dataIndex:'b'},{title:'c',dataIndex:'c'},{title:'d',dataIndex:'d'},{title:'e',dataIndex:'e'},{title:'f',dataIndex:'f'},{title:'g',dataIndex:'g'}];

        var store = new Store({
            url : 'data/big-data.php',
            autoLoad:true
          }),
          grid = new Grid.Grid({
            render:'#grid',
            forceFit:true,
            columns : columns,
            focusable : true,
            loadMask: true,
            store: store
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

