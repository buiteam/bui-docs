<?php $title="表格单元格编辑"?>
<?php include("../../templates/control-header.php"); ?>
    <p>仅当文本字段有值时，数字字段才能填写</p>
    <div class="row">
      <div class="span16">
        <div id="grid">
          
        </div>
      </div>
    </div>
    <p class="row">
      <form class="span8 offset3" id="J_Form" action="" method="post">
        <input type="hidden" name="gridValue">
        <button type="sumbmit" class="button button-primary">提交</button>
      </form>
    </p>
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
        var 
          Store = Data.Store,
          enumObj = {"1" : "选项一","2" : "选项二","3" : "选项三"},
          columns = [
            {title : '文本',dataIndex :'a',editor : {xtype : 'text',validator : validFn}}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '数字', dataIndex :'b',editor : {xtype : 'number',rules : {required : true},editableFn : function(value,record){
              if(record.a){
                return true;
              }
              return false;
            }}},
            {title : '日期',dataIndex :'c', editor : {xtype : 'date'},renderer : Grid.Format.dateRenderer},
            {title : '单选',dataIndex : 'd', editor : {id:'mySelect',xtype :'select',items : enumObj,rules : {required : true},validator : valid},renderer : Grid.Format.enumRenderer(enumObj)},
            {title : '多选',dataIndex : 'e', editor : {xtype :'select',select:{multipleSelect : true},items : enumObj},renderer : Grid.Format.multipleItemsRenderer(enumObj)}
          ],
          data = [{a:'123',e:'2,3'},{a:'cdd',c:1363924044176},{a:'1333',b:2222,d:2}];
        function valid(value){
          if(value === '1'){
            return '不能选择1';
          }
        }
        var editing = new Grid.Plugins.CellEditing({
          triggerSelected : false //触发编辑的时候不选中行
        }),
          store = new Store({
            data : data,
            autoLoad:true
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            width : 700,
            forceFit : true,
            tbar:{ //添加、删除
                items : [{
                  btnCls : 'button button-small',
                  text : '<i class="icon-plus"></i>添加',
                  listeners : {
                    'click' : addFunction
                  }
                },
                {
                  btnCls : 'button button-small',
                  text : '<i class="icon-remove"></i>删除',
                  listeners : {
                    'click' : delFunction
                  }
                }]
            },
            plugins : [editing,Grid.Plugins.CheckSelection],
            store : store
          });

        grid.render();

        

        function validFn (value,obj) {
          var records = store.getResult(),
            rst = '';
          BUI.each(records,function (record) {
            if(record.a == value && obj != record){
              rst = '文本不能重复';
              return false;
            }
          });
          return rst;
        }

        //添加记录
        function addFunction(){
          var newData = {b : 0};
          store.addAt(newData,0);
          editing.edit(newData,'a'); //添加记录后，直接编辑
        }
        //删除选中的记录
        function delFunction(){
          var selections = grid.getSelection();
          store.remove(selections);
        }          
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

