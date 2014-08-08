<?php $title="列百分比表格"?>
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
        var Store = Data.Store,
          columns = [
            {title : '表头1',dataIndex :'a', width:100},
            {id: '123',title : '表头2',dataIndex :'b', width:100},
            {title : '表头3',dataIndex : 'c',width:200}
          ],
          data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}];

        var store = new Store({
            data : data
          }),
          grid = new Grid.Grid({
            render:'#grid',
            width:'100%',//如果表格使用百分比，这个属性一定要设置
            columns : columns,
            idField : 'a',
            store : store
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

