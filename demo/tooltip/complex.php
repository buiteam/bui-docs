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
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/grid','bui/tooltip'],function (S,Grid,Tooltip){
    <?php }else{?>
    BUI.use(['bui/grid','bui/tooltip'],function (Grid,Tooltip) {
    <?php } ?>
      var Grid = Grid,
            columns = [{
                title : '表头1',
                dataIndex :'a',
                width:'10%'
              },{
                id: '123',
                title : '表头2',
                dataIndex :'b',
                width:'20%',
                renderer : function(value,obj){
                  var objStr = BUI.JSON.stringify(obj).replace(/\"/g,"'");
                  return '<span class="grid-command" data-title="'+objStr+'">' + value + '</span>'
                }
              },{
                title : '表头3',
                dataIndex : 'c',
                width:'70%'
            }],
            data = [{a:'123',b:'23ww'},{a:'cdd',b:'edd'},{a:'1333',b:'ipowww',c:'eee',d:2}];
 
      var grid = new Grid.SimpleGrid({
        render:'#grid',
        columns : columns,
        items : data,
        idField : 'a'
      });

      grid.render();

        //不使用模板的，左侧显示
      var tips1 = new Tooltip.Tips({
        tip : {
          trigger : '.grid-command', //出现此样式的元素显示tip
          alignType : 'bottom-left', //默认方向
          elCls : 'panel',
          width: 200,
          titleTpl : '<div class="panel-header">\
                        <h3>提示标题</h3>\
                      </div>\
                      <div class="panel-body">\
                        <p>a:{a}</p><p>b:{b}</p><p>c:{c}</p>\
                      </div>',
          offset : 10 //距离左边的距离
        }
      });
      tips1.render();

    });
  </script>
<?php include("../../templates/control-footer.php"); ?>