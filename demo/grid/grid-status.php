<?php $title="自定义状态"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  /** read状态 **/
  .bui-grid-row-read{
    color: red;
  }

  .bui-grid-row-disabled{
    color: #999;
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
          columns = [
            {title : '表头1',dataIndex :'a', width:100},
            {id: '123',title : '表头2',dataIndex :'b', width:100},
            {title : '表头3',dataIndex : 'c',width:200}
          ];

        var store = new Store({
            data : [{a : '11111',b:'22222',c:'33333',readed : true},{a : '11111',b:'22222',c:'33333',disabled : true},{a : '11111',b:'22222',c:'33333'},{a : '11111',b:'22222',c:'33333',readed : true}]
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            itemStatusFields : { //设置数据跟状态的对应关系
              disabled : 'disabled',
              read : 'readed' //如果readed : true,则附加 bui-grid-row-read 样式
            },
            store : store
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

