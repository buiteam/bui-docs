<?php $title="表格展开行"?>
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
              width:200
          }],
          data = [{a:'123',detail:'Samsung/三星Chromebook 11.6寸双核笔记本 美国代购Samsung/三星Chromebook 11.6寸双核笔记本 美国代购Samsung/三星Chromebook 11.6寸双核笔记本 美国代购'},
          {a:'cdd',b:'edd',detail:'详情、详情'},
          {a:'cdd',b:'edd',detail:'详情、详情'},
          {a:'cdd',b:'edd',detail:'详情、详情'},
          {a:'cdd',b:'edd',detail:'详情、详情'},
          {a:'cdd',b:'edd',detail:'详情、详情'},
          {a:'1333',c:'eee',d:2,detail:'jix'}];

          // 实例化 Grid.Plugins.Cascade 插件
        var cascade = new Grid.Plugins.Cascade({
  		    renderer : function(record){
  			    return '<div style="padding: 10px 20px;"><h2>详情信息</h2><p>' + record.detail + '</p></div>';
  		    }
        });
        var store = new Store({
            data : data,
            autoLoad:true
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            idField : 'a',
            store: store,
	          plugins: [cascade]	// Grid.Plugins.Cascade 插件
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

