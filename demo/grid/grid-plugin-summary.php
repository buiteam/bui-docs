<?php $title="表格汇总"?>
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
              summary : true,
              width:200
            },{
              title : '表头3',
              dataIndex : 'c',
              summary : true,
              width:200
          }];

        /**
         * 返回的数据：
         * {
          "rows":[{"a":"名称1","b":200,"c":100,"d":100},
            {"a":"名称2","b":100,"c":100,"d":100},
            {"a":"名称3","b":100,"c":100,"d":100},
            {"a":"名称4","b":100,"c":100,"d":100},
            {"a":"名称5","b":100,"c":100,"d":100},
            {"a":"名称6","b":100,"c":100,"d":100},
            {"a":"名称7","b":100,"c":100,"d":100},
            {"a":"名称8","b":100,"c":100,"d":100},
            {"a":"名称9","b":100,"c":100,"d":100},
            {"a":"名称10","b":100,"c":100,"d":100}],
          "results": 40,
          "summary": {"b":20000,"c":4000,"d":2000}
          }
         */

        var store = new Store({
            url : 'data/summary.json',
            pageSize : 10,
            autoLoad:true
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            store: store,
            bbar : {pagingBar : true},
            plugins : [Grid.Plugins.Summary] // 插件形式引入单选表格
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

