<?php $title="表格多选"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  /**
   * bs3的新样式存在bug，后期修正
   */
  .bui-grid-group-header .bui-grid-hd-empty {
    display: none;
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
          columns = [{title : '表头1',dataIndex :'a', width:100},
            {title : '表头2',dataIndex :'b'}, 
            {title : '表头3',dataIndex : 'c'},
            {title : '表头4',dataIndex : 'd'},
            {title : '表头5',dataIndex : 'e'},
            {title : '表头6',dataIndex : 'd'} 
           ],   
           //由于设置了数据跟状态的对应关系，此时状态会反映到Html上面
           //disabled的字段无法被选中
          data = [{a:'123',selected : true},{a:'cdd',b:'edd',disabled:true},{a:'1333',c:'eee',d:2}];

          //表头分组注意事项：
          //1. 需要标明分组的 from to
          //2. 不要交叉
          //3. 注意其他插件增加列后的 索引值
          //4. 表格必须使用forceFit : true,同时不能设置高度
          
        var colGroup = new Grid.Plugins.ColumnGroup({
            groups : [{
              title : '分组1',
              from : 1,
              to : 2
            },{
              title : '分组2',
              from : 4,
              to : 5
            }]
          }),
          store = new Store({
            data : data,
            autoLoad:true
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            forceFit : true,
            store : store,
            plugins : [Grid.Plugins.CheckSelection,colGroup] // 插件形式引入多选表格
          });

        grid.render();

        
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

