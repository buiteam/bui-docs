<?php $title="表格工具栏"?>
<?php include("../../templates/control-header.php"); ?>
<div class="row">
  <div class="span16">
    <div id="grid"> </div>
    <div id="bar" class=""></div>
  </div>
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
  KISSY.use(['bui/toolbar','bui/data','bui/grid'],function(S,Toolbar,Data,Grid){
<?php }else if($useLoader) {?>
  BUI.use(['bui/toolbar','bui/data','bui/grid'],function(Toolbar,Data,Grid){ 
<?php }else{?>
    var Toolbar = BUI.Toolbar,
      Data = BUI.Data,
      Grid = BUI.Grid;
<?php }?>
    var NumerPBar = Toolbar.NumberPagingBar,
      Store = Data.Store,
      columns = [{
          title : '表头1',
          dataIndex :'a',   
          width:100
        },{
          title : '表头2',
          dataIndex :'b',
          width:200
        },{
          title : '表头3',
          dataIndex : 'c',
          width:300
        }];

    var store = new Store({
        url : 'data/data.php',
        autoLoad:true,
        pageSize:1  // 配置分页数目
      });
    var bar = new NumerPBar({
        render : '#bar',
        elCls : 'pagination pull-right',
        store : store
      }),
      grid = new Grid.SimpleGrid({
        render:'#grid',
        columns : columns,
        innerBorder : false,
        tableCls:'table table-bordered table-striped', 
        store : store 
      }); 
    bar.render();
    grid.render();
<?php if($useLoader) {?>
  });
<?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

