<?php $title="表格操作"?>
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
        var Store = Data.Store,
          columns = [
            {title : '表头1',dataIndex :'a', width:100},
            {id: '123',title : '表头2',dataIndex :'b', width:100},
            {title : '表头3',dataIndex : 'c',width:100},
            {title : '操作',dataIndex : 'd',width:200,renderer : function (value,obj) {
              if(obj.a == '123'){
                return '<span class="grid-command btn1">操作1</span>';
              }

              if(obj.c){
                return '<span class="grid-command btn2">操作2</span>';
              }
              return '<span class="grid-command btn1">操作1</span> <span class="grid-command btn2">操作2</span>';
            }}
          ],
          data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}];

        var store = new Store({
            data : data
          }),
          grid = new Grid.Grid({
            render:'#grid',
            forceFit : true,
            columns : columns,
            store : store
          });

        grid.render();

        grid.on('cellclick',function  (ev) {
          var record = ev.record, //点击行的记录
            field = ev.field, //点击对应列的dataIndex
            target = $(ev.domTarget); //点击的元素
          if(target.hasClass('btn1')){
            alert('操作1');
          }

          if(target.hasClass('btn2')){
            alert('操作2');
          }

        });
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

