<?php $title="错误信息"?>
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
  KISSY.use(['bui/grid','bui/data','bui/overlay'],function(S,Grid,Data){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/grid','bui/data','bui/overlay'],function(Grid,Data){
    <?php }else{?>
        var Grid = BUI.Grid,
            Data = BUI.Data;
    <?php }?>
        var Store = Data.Store,
           columns = [
            {title : '表头1',dataIndex :'a', width:100},
            {id: '123',title : '表头2',dataIndex :'b', width:100},
            {title : '表头3',dataIndex : 'c',width:200}
          ];
          //{"hasError":true,"error" : "请求数据错误"},返回的数据
        var store = new Store({
            url : 'data/grid-error.php'

          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            store : store
          });
        store.on('exception',function (ev) {
          BUI.Message.Alert(ev.error);
        });
        grid.render();
        store.load();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

