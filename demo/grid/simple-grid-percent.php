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
          columns = [
            {title : '表头1(10%)',dataIndex :'a', width:'10%'},
            {id: '123',title : '表头2(20%)',dataIndex :'b', width:'20%'},
            {title : '表头3(70%)',dataIndex : 'c',width:'70%'}
          ],
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

