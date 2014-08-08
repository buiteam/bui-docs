<?php $title="Grid中使用提示信息"?>
<?php include("../../templates/control-header.php"); ?>
<style type="text/css">
.panel{
  background: #fff;
}
</style>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section">  
      <h2>提示信息</h2>
      
        <div id="grid">
       
        </div>
      
    </div>
    <div id="tip" class="panel" style="visibility:hidden">
      <div class="panel-header"><h3>提示中的表格</h3></div>
      <div class="panel-body">
        <div id="sgrid"></div>
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/grid','bui/tooltip'],function (S,Grid,Tooltip){
    <?php }else{?>
    BUI.use(['bui/grid','bui/tooltip'],function (Grid,Tooltip) {
    <?php } ?>
      var columns = [{
                title : '表头1',
                dataIndex :'a',
                width:'10%'
              },{
                id: '123',
                title : '表头2',
                dataIndex :'b',
                width:'20%',
                renderer : function(value,obj){
                  var id = obj.a;
                  return '<span class="grid-command" data-id="' + id + '">' + value + '</span>'
                }
              },{
                title : '表头3',
                dataIndex : 'c',
                width:'70%'
            }],
            data = [{a:'123',b:'23ww',items: [{a:'11111',b:'22222'},{a:'11111',b:'22222'},{a:'11111',b:'22222'}]},
            {a:'cdd',b:'edd',items: [{a:'22222',b:'33333'},{a:'22222',b:'33333'},{a:'22222',b:'33333'},{a:'22222',b:'33333'}]},
            {a:'1333',b:'ipowww',c:'eee',d:2,items: [{a:'4444',b:'55555'},{a:'4444',b:'55555'},{a:'4444',b:'55555'},{a:'4444',b:'55555'}]}];
 
        var grid = new Grid.SimpleGrid({
          render:'#grid',
          columns : columns,
          items : data,
          idField : 'a'
        });
 
        grid.render();

        var grid1 =  new Grid.SimpleGrid({
          render:'#sgrid',
          innerBorder : false,
          tableCls : 'table',
          columns : [
            {title : '表头1',dataIndex :'a'},
            {title : '表头2',dataIndex :'b'}
          ]
        });

        grid1.render();

        //不使用模板的，左侧显示
      var tip = new Tooltip.Tip({
          srcNode : '#tip',
          trigger : '.grid-command', //出现此样式的元素显示tip
          alignType : 'bottom-left', //默认方向
          width: 200,
          offset : 10 //距离左边的距离
      });
      tip.render();
      tip.on('triggerchange',function(ev){
        var curTrigger = $(ev.curTrigger),
          id = curTrigger.attr('data-id'),
          item = grid.getItem(id);
        if(item){
          grid1.showData(item.items);
        }
      });

    });
  </script>
<?php include("../../templates/control-footer.php"); ?>