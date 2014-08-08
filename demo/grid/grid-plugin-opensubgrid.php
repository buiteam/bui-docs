<?php $title="表格展开子表格"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .inner-grid{
      padding:10px 20px;
    }
  </style>
    <div class="row">
      <div class="span16">
        <div id="grid">
          
        </div>
		<button id="btnRemove" class="button button-primary">重置</button>
		<button id="btnDel" class="button button-primary">删除一行</button>
		<button id="btnExpand" class="button button-primary">展开所有</button>
		<button id="btnCollapse" class="button button-primary">折叠所有</button>
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
              width:200,
  			      showMenu: true
          }],
          data = [{a:'123',records:[{a:'123'},{b:'2334'}]},{a:'cdd',b:'edd',records:[{a:'123'},{b:'2334'}]},{a:'1333',c:'eee',d:2,records:[{a:'123'},{b:'2334'}]}];

          // 实例化 Grid.Plugins.Cascade 插件
      var cascade = new Grid.Plugins.Cascade({
  			renderer : function(record){
  				return '<div class="inner-grid"></div>';	//生成简单表格的容器
  			}
  		}),
  		//简单表格的配置信息
  		simpleGridConfig = {
  			autoRender:true,                 //自动生成
  			columns:BUI.cloneObject(columns)//这里为了简单起见，复制了配置信息，应用中需要自己配置
      };
  	
      var store = new Store({
          data : data,
          autoLoad:true
        }),
        grid = new Grid.Grid({
          render:'#grid',
          columns : columns,
          store: store,
  	      plugins: [cascade]	// Grid.Plugins.Cascade 插件
        });

      grid.render();

  	  cascade.on('expand',function(ev){
  		var data = ev.record,
  		  row = ev.row,
  		  sgrid = $(row).data('sub-grid');
  		if(!sgrid){
  		  var container = $(row).find('.inner-grid'),
  			  gridConfig = BUI.cloneObject(simpleGridConfig);
  		  gridConfig.render = container;

  		  sgrid = new Grid.SimpleGrid(gridConfig);
  		  sgrid.showData(data.records);
  		  $(row).data('sub-grid',sgrid);
  		}  
  	  });

  	  cascade.on('removed',function(ev){
  		var data = ev.record,
  		  row = ev.row,
  		  sgrid = $(row).data('sub-grid');
  		if(sgrid){
  		  sgrid.destroy();
  		}
  	  });

  	  $('#btnRemove').on('click',function(){
    		store.setResult([]); //清除记录
    		store.setResult(data); //重新添加纪录
  	  });
  	  $('#btnDel').on('click',function(){
    		var record = store.getResult()[0];
    		if(record){
    		  store.remove(record);
    		}
  	  });
  	  $('#btnExpand').on('click',function(){
  		  cascade.expandAll();
  	  });
  	  $('#btnCollapse').on('click',function(){
  		  cascade.collapseAll();
  	  });
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

