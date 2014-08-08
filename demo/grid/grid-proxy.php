<?php $title="异步加载数据,分页"?>
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
          columns = [
            {title : '表头1(10%)',dataIndex :'a', width:'10%'},
            {id: '123',title : '表头2(20%)',dataIndex :'b', width:'20%'},
            {title : '表头3(70%)',dataIndex : 'c',width:'70%'}
          ];

        var store = new Store({
            url : 'data/grid-data.php',
            proxy : {//设置请求相关的参数
              method : 'post',
              //dataType : 'jsonp', //返回数据的类型
              limitParam : 'pageSize', //一页多少条记录
              pageIndexParam : 'pageNum', //页码
              startParam : 'startNum' //起始记录
              
            },
            autoLoad:true,
            pageSize:3  // 配置分页数目
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            loadMask: true,
            store: store,
            // 底部工具栏
            bbar:{
                // pagingBar:表明包含分页栏
                pagingBar:true
            }
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

