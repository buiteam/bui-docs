<?php $title="编辑器"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .edit-text{
      border: 1px solid red;
    }
  </style>
    <p>点击编辑下面的文本</p>
    <div class="row">
      <div id="list1" class="span8">
        
      </div>
    </div>
    <p>
      <button id="btnAdd" class="button">添加</button>
      <button id="btnDel" class="button">删除</button>
    </p>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/editor','bui/list'],function(S,Editor,List){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/editor','bui/list'],function(Editor,List){
    <?php }else{?>
      var Editor = BUI.Editor,
        List = BUI.List;
    <?php }?>
      var items = [
          {text:'选项1',value:'a'},
          {text:'选项2',value:'b'},
          {text:'选项3',value:'c'},
          {text:"数字值",value:3}
        ],
        list = new List.SimpleList({ //创建列表
          elCls:'bui-select-list',//默认是'bui-simple-list'
          width:200,
          render : '#list1',
          items : items
        });
      list.render();

      //创建编辑器
      var editor = new Editor.RecordEditor({ 
          form : { //内部创建表单
            children : [
              {name : 'text',rules :{required:true}},
              {name : 'value',rules :{required:true}}
            ],
            //底部工具栏
            buttonBar : {
              elCls : 'centered toolbar'
            }
          }
        });

      editor.render();

      function editItem (item,dom) {
        editor.set('record',item);
        editor.set('align',{
          node : dom,
          points :['tl','tl']
        });
        editor.show();
      }

      //点击列表，触发编辑
      list.on('itemclick',function (ev) {
        var item = ev.item,
          dom = ev.domTarget;
        editItem(item,dom);
      });

      editor.on('accept',function () {
        var record = editor.get('record');
        list.updateItem(record);
      });

      //添加新纪录
      $('#btnAdd').on('click',function(){
        var obj = {'text' : '新建记录',value : ''};
        list.addItem(obj);
        var dom = list.findElement(obj);
        editItem(obj,dom);
      });

      $('#btnDel').on('click',function () {
        if(editor.get('visible')){ //如果当前记录显示，则隐藏掉
          editor.cancel(); 
        }
        var item = list.getSelected();
        list.removeItem(item);
      });

    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>