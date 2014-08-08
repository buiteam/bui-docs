<?php $title="表格行编辑"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <button id="btn" class="button">destroy</button>
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
          enumObj = {"1" : "选项一","2" : "选项二","3" : "选项三"},
          columns = [
            {title : '文本',dataIndex :'a',editor : {xtype : 'text'}}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '数字', dataIndex :'b',editor : {xtype : 'number',rules : {required : true}}},
            {title : '日期',dataIndex :'c',width:120, editor : {xtype : 'date',datePicker : {showTime : true}},renderer : Grid.Format.datetimeRenderer},
            {title : '单选',dataIndex : 'd', editor : {xtype :'select',items : enumObj},renderer : Grid.Format.enumRenderer(enumObj)},
            {title : '操作',dataIndex:'e',renderer : function(){
              return '<span class="grid-command btn-edit">编辑</span>'
            }}
          ],
          data = [{a:'123'},{a:'cdd',c:1363924044176},{a:'1333',b:2222,d:2}];

        var editing = new Grid.Plugins.RowEditing({
          triggerCls : 'btn-edit',
          triggerSelected : false

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

        editing.on('editorshow',function(ev){
          var editor = editing.get('curEditor');
          editor.set('errorAlign',{
            points :['br','tr'] ,
            offset: [0, 10]
          });
        });

        $('#btn').on('click',function(){
          grid.destroy();
        })

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

