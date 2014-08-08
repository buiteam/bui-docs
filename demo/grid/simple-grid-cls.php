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
  KISSY.use(['bui/grid'],function(S,Grid){
    <?php }else if($useLoader) {?>
    BUI.use('bui/grid',function(Grid){
    <?php }else{?>
        var Grid = BUI.Grid
    <?php }?>
        var Grid = Grid,
            columns = [{
                title : '表头1(居右)',
                dataIndex :'a',
                elCls : 'right'
              },{
                id: '123',
                title : '表头(居中)',
                dataIndex :'b',
                elCls : 'center'
              },{
                title : '表头3(辅助字体)',
                dataIndex : 'c',
                elCls : 'auxiliary-text'
            }],
            data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}];

        var grid = new Grid.SimpleGrid({
              render:'#grid',
              columns : columns,
              items : data,
              idField : 'a'
            });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

