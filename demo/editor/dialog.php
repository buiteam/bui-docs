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

     <div id="c1" style="display:none">
      <form id="J_Form" class="form-horizontal">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label"><s>*</s>显示的文本：</label>
            <div class="controls">
              <input name="text" type="text" data-rules="{required:true}" class="input-normal control-text">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label"><s>*</s>隐藏的值：</label>
            <div class="controls">
              <input name="value" type="text" data-rules="{required:true}" class="input-normal control-text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15 ">
            <label class="control-label">起始日期：</label>
            <div id="range" class="controls bui-form-group">
              <input name="start" class="calendar" type="text"><label>&nbsp;-&nbsp;</label><input name="end" class="calendar" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">备注：</label>
            <div class="controls control-row4">
              <textarea name="memo" class="input-large" type="text"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
    
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
          items : items,
          itemTpl : '<li>{text}:{value}<span class="pull-right"><i class="icon icon-edit"></i> <i class="icon icon-remove-sign"></i></span></li>'
        });
      list.render();

      //创建编辑器
      var editor = new Editor.DialogEditor({ 
          contentId:'c1',
          width : 500,
          mask : false,
          title : '测试编辑',
          form : {
            srcNode : '#J_Form'
          },
          //mask : false,
          success : function(){
            this.accept();
          }
        });

      editor.render();

      function editItem (item) {
        editor.set('record',item);
        editor.show();
      }

      function delItem (item) {
        if(editor.get('visible')){ //如果当前记录显示，则隐藏掉
          editor.cancel(); 
        }
        
        list.removeItem(item);      
      }

      //点击列表，触发编辑
      list.on('itemclick',function (ev) {
        var item = ev.item,
          sender = $(ev.domTarget);
        if(sender.hasClass('icon-edit')){
          editItem(item);
        }else if(sender.hasClass('icon-remove-sign')){
          delItem(item);
        }
        
      });

      editor.on('accept',function () {
        var record = editor.get('record');
        list.updateItem(record);
      });

      //添加新纪录
      $('#btnAdd').on('click',function(){
        var obj = {'text' : '新建记录',value : ''};
        list.addItem(obj);
        list.setSelected(obj);
        editItem(obj);
      });

      $('#btnDel').on('click',function () {
        
        var item = list.getSelected();
        delItem(item);
      });

    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>