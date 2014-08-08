<?php $title="表格单元格编辑"?>
<?php include("../../templates/control-header.php"); ?>
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
          items = [{
            text : '选项1',
            value : "1",
            children : [{
              text : '选项11',
              value : "11"
            },{
              text : '选项12',
              value : "12"
            },{
              text : '选项13',
              value : "13"
            }]
          },{
            text : '选项2',
            value : "2",
            children : [{
              text : '选项21',
              value : "21"
            },{
              text : '选项22',
              value : "22"
            },{
              text : '选项23',
              value : "23"
            }]
          },{
            text : '选项3',
            value : "3",
            children : [{
              text : '选项31',
              value : "31"
            },{
              text : '选项32',
              value : "32"
            },{
              text : '选项33',
              value : "33"
            }]
          }],
          renderer = function(value){
              var item = findItem(value,items);
              if(item){
                return item.text;
              }
          },
          columns = [
            {title : '选项1',dataIndex : 'a', editor : {xtype :'select',items : items},renderer : renderer},
            {title : '选项2',dataIndex : 'b', editor : {xtype :'select'},renderer : renderer}
          ],
          data = [{a:'1',b : '12'},{a:'2',b:'22'}];
       
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

        //更改数据时
        store.on('update',function(ev){ //第一项改变时，清空第二项
          var record = ev.record,
            field = ev.field;
          if(field == 'a'){
            store.setValue(record,'b','');
            editing.edit(record,'b'); //第一项修改后，显示第二项编辑
          }
        });

        //监听编辑器出现
        editing.on('editorshow',function(ev){
          var editor = ev.editor,
            record = editing.get('record'),
            field = editor.get('field'); //编辑器的输入控件，此处是select
          if(field.get('name') == 'b'){ //如果是显示第二个选择框
            var aValue = record.a, //第一项的值
              item = findItem(aValue,items); //对应的选择框
            if(item){
              field.set('items',item.children);
              field.set('value',record.b); //设置选中的值
            }
          }
        });

        function findItem(value,arr){
          var rst = null;
          BUI.each(arr,function(item){
            if(item.value == value){
              rst = item;
            }else if(item.children){
              rst = findItem(value,item.children);
            }
            if(rst){
              return false;
            }
          });
          return rst;
        }
        //添加记录
        function addFunction(){
          var newData = {a: '1'};
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

