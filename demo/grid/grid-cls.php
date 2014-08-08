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
        var Grid = Grid,
          Store = Data.Store,
          columns = [{
              title : '表头1(居右)',
              dataIndex :'a',
              elCls : 'right',
              width:150
            },{
              id: '123',
              title : '表头(居中)',
              dataIndex :'b',
              elCls : 'center',
              width:200
            },{
              title : '表头3(辅助字体)',
              dataIndex : 'c',
              elCls : 'auxiliary-text',
              width:200
          }],
          data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}];

        var store = new Store({
            data : data,
            autoLoad:true
          }),
          grid = new Grid.Grid({
          render:'#grid',
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

