<?php $title="列百分比表格"?>
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
            Format=BUI.Grid.Format,
            Data = BUI.Data;
    <?php }?>
        var Grid = Grid,
            Format=Grid.Format,
          columns = [{
              title : '图标',
              dataIndex :'a',
              renderer : function (value) {
                if(value == '1'){
                  return '<img src="http://img01.taobaocdn.com/tps/i1/T1fpK3XhpmXXXXXXXX-70-30.png"/>'
                }else{
                  return '<img src="http://img04.taobaocdn.com/tps/i4/T1I4YwXkXjXXciAGbm-70-30.png"/>'
                }
              }
            },{
              id: '123',
              title : '日期',
              dataIndex :'b',
              renderer: Format.dateRenderer
            },{
              title : '数字 * 2',
              dataIndex : 'c',
              elCls : 'right',
              renderer : function(value){
                if(value){
                  return value * 2;
                }
                return '--';
              }
          },{
              title : '操作',renderer:function(val,obj){
                if(obj.a === '1'){
                  return '<a href="#">编辑</a>'
                }else{
                  return '<a href="#">删除</a>'
                }
              }
          }],
          data = [{a:'1',c:124},{a:'2',b:1352699233003,c:0},{a:'1',b:1352699233003,c:123,d:2}];

        var grid = new Grid.SimpleGrid({
          render:'#grid',
          columns : columns,
          items : data,
          idField : 'a'
        });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

