<?php $title="表格单元格分割线"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <button id="J_Search" class="button button-primary">查询</button>
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
          ],
          data = [];

        var store = new Store({
            //data : data,
            url : 'data/grid-empty.php',
            autoLoad:true
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            emptyDataTpl : '<div class="centered"><img alt="Crying" src="http://img03.taobaocdn.com/tps/i3/T1amCdXhXqXXXXXXXX-60-67.png"><h2>查询的数据不存在</h2></div>',
            store : store
          });

        grid.render();
        $('#J_Search').on('click',function(){
          store.load();
        });
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

