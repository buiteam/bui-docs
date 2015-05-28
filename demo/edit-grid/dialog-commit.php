<?php $title="表格使用弹出框编辑"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span16">
        <div id="grid">
          
        </div>
      </div>
    </div>
    <!-- 初始隐藏 dialog内容 -->
    <div id="content" class="hide">
      <form class="form-horizontal" method="post">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label"><s>*</s>文本：</label>
            <div class="controls">
              <input name="a" type="text" data-rules="{required:true}" class="input-normal control-text">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label"><s>*</s>数字：</label>
            <div class="controls">
              <input name="b" type="text" data-rules="{required:true,number : true}" class="input-normal control-text">
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="control-group span8 ">
            <label class="control-label">日期：</label>
            <div id="range" class="controls">
              <input name="c" class="calendar" type="text">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label">选择：</label>
            <div class="controls">
              <div class="controls bui-form-field-select" data-items="{'1':'选项一','2' : '选项二','3' : '选项三'}">
                <input name="d" type="hidden">
              </div>
            </div>
          </div>
       
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">备注：</label>
            <div class="controls control-row4">
              <textarea name="e" class="input-large" type="text"></textarea>
            </div>
          </div>
        </div>
      </form>
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
            {title : '文本',dataIndex :'a'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '数字', dataIndex :'b'},
            {title : '日期',dataIndex :'c'},
            {title : '单选',dataIndex : 'd'},
            {title : '操作',renderer : function(){
              return '<span class="grid-command btn-edit">编辑</span>'
            }}
          ];

        var editing = new Grid.Plugins.DialogEditing({
            contentId : 'content', //设置隐藏的Dialog内容
            triggerCls : 'btn-edit', //触发显示Dialog的样式
            editor : {
              title: '编辑'
              success : function(){
                var edtor = this,
                  form = edtor.get('form'),
                  editType = editing.get('editType'),//add 或者 edit
                  url = 'data/save.php'; 
                /*if(editType == 'add'){ //可以根据编辑类型决定url
                  url = 'xxx';
                }else{
                  url = 'xxxxx';
                }*/
                url += '?saveType=' + editType;

                //检验
                form.valid();
                if(form.isValid()){
                  form.ajaxSubmit({ //表单异步提交
                    url : url,
                    success : function(data){
                      if(editType == 'add'){
                        //do something
                      }else{
                        //do other
                      }
                      //将a 改成 1 测试一下显示错误
                      if(data.hasError){ //返回的数据是 {hasError : fasle,error : 'xxxx',field : 'xxx'},也可以是任意格式的数据如 ： {success : false,'error' : 'xxxxx'}
                        var field = data.field;
                        form.getField(field).showErrors([data.error]); //也可以多个字段的错误信息 例如 errors : [{field : 'a',error: 'addd'},{field : 'a',error: 'addd'}]
                      }else{
                        edtor.accept();
                      }
                      
                    },
                    error : function(){
                      //do something
                    }
                  });
                }
              }
            }
          }),
          store = new Store({
            url : 'data/records.php',
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

        //添加记录
        function addFunction(){
          var newData = {b : 0};
          
          editing.add(newData,'a',0); //添加记录后，直接编辑
        }
        //删除选中的记录
        function delFunction(){
          var selections = grid.getSelection();
          //此处删除,项目中需要自己实现ajax 请求
          store.remove(selections);
        }          
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

