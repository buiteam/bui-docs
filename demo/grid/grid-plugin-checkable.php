<?php $title="表格多选"?>
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
          columns = [{title : '表头1',dataIndex :'a', width:100},
            {title : '表头2',dataIndex :'b', width:200}, 
            {title : '表头3',dataIndex : 'c', width:200} 
           ],   
           //由于设置了数据跟状态的对应关系，此时状态会反映到Html上面
           //disabled的字段无法被选中
          data = [{a:'123',selected : true},{a:'cdd',b:'edd',disabled:true},{a:'1333',c:'eee',d:2}];

        var store = new Store({
            data : data,
            autoLoad:true
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            itemStatusFields : { //设置数据跟状态的对应关系
              selected : 'selected',
              disabled : 'disabled'
            },
            store : store,
			      plugins : [Grid.Plugins.CheckSelection]	// 插件形式引入多选表格
			//multiSelect: true  // 控制表格是否可以多选，但是这种方式没有前面的复选框 默认为false
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

