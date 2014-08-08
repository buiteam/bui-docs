<?php $title="表单和Grid联用"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .panel .form-horizontal{
      padding-top:15px;
    }
    .panel .actions-bar{
      margin-bottom: 0;
    }
  </style>
    <div class="row">
      <div class="span14 panel panel-head-borded panel-small">
        
          <div class="panel-header">
            <h2>表格</h2>
          </div>
          <div id="grid">
          
          </div>
      </div>
      <div class="span8 panel panel-small">
        <div class="panel-header">
           <h2>表单</h2>
        </div>
        <form id="J_Form" class="form-horizontal" action="data/success.php" method="post">
          <div class="control-group">
            <label class="control-label"><s>*</s>供应商编码：</label>
            <div class="controls">
              <input name="id" type="text" data-rules="{required:true}" data-messages="{required:'供应商编码不能为空'}" class="input-normal control-text" readonly>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">供应商类型：</label>
            <div class="controls">
              <select name="type" class="input-normal"> 
                <option value="saler">淘宝卖家</option>
                <option value="large">大厂直供</option>
              </select>
            </div>
          </div>
          <div class="bui-form-group" data-rules="{dateRange : true}">
            <div class="control-group">
              <label class="control-label"><s>*</s>开始日期：</label>
              <div class="controls">
                <input name="start" data-tip="{text : '起始日期'}" data-rules="{required:true}" data-messages="{required:'起始日期不能为空'}" class="input-small calendar" type="text">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"><s>*</s>结束日期：</label>
              <div class="controls">
                <input name="end" data-rules="{required:true}" data-messages="{required:'结束日期不能为空'}" class="input-small calendar" type="text">
              </div>
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label">备注：</label>
            <div class="controls control-row4">
              <textarea name="memo" class="input-normal" type="text"></textarea>
            </div>
          </div>
          <div class="form-actions actions-bar centered">
              <button id="J_Add" type="button" class="button button-primary">添加</button>
              <button type="submit" class="button button-primary">保存</button>
              <button id="J_Reset" type="button" class="button">重置</button>
          </div>
        </form>
      </div>
      
    </div>
      
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use(['bui/form','bui/grid','bui/data'],function(S,Form,Grid,Data){
    <?php }else if($useLoader) {?>
  BUI.use(['bui/form','bui/grid','bui/data'],function(Form,Grid,Data){
    <?php }else{?>
      var Form = BUI.Form,
        Grid = BUI.Grid,
        Data = BUI.Data;
    <?php }?>
      var  Store = Data.Store,
        columns = [{title : '编码',dataIndex : 'id'},
          {title : '类型',dataIndex : 'type',renderer : Grid.Format.enumRenderer({saler : '卖家',large : '大厂直供'})},
          {title : '开始日期',dataIndex : 'start'},
          {title : '结束日期',dataIndex : 'end'},
          {title : '备注',dataIndex : 'memo'}
          ],
        data = [
        {id : '123',type : 'saler',start : '2010-01-01',end : '2011-01-01'},
        {id : '234',type : 'large',start : '2010-05-01',end : '2012-03-02'}
        ],
        store = new Store({
          data : data,
          matchFunction : function(obj1,obj2){ //用于比较2个对象是否相等
            return obj1.id == obj2.id;
          }
        }),
        grid = new Grid.Grid({ //创建Grid 
          render : '#grid',
          columns : columns,
          height:340,
          store : store
        });
      grid.render();

      var form = new Form.HForm({ //创建表单
        srcNode : '#J_Form',
        submitType : 'ajax',
        callback : function(data){
          if(data.success){
            if(data.isNew){ //如果是增加数据
              var idField = form.getField('id'); //新增记录时，服务器端返回id
              idField.enable();
              idField.set('value',data.id);
              var record = this.serializeToObject();
              store.add(record,true); //第二个参数标示不允许添加重复的记录，以匹配函数为标准

            }else{ //编辑数据
              var record = this.serializeToObject();
              store.update(record,true); //第二个参数标示使用匹配函数
            }
          }
          
        }
      }).render();

      $('#J_Reset').on('click',function(){
        form.reset();
      });

      $('#J_Add').on('click',function(){
        var idField = form.getField('id');
        idField.set('value','');
        idField.disable(); //添加的记录不需要添加编号，禁用，不参与校验
        form.submit({data : {isNew : true}});
      });

      grid.on('rowselected',function(ev){
        var record = ev.record;
        form.getField('id').enable();
        form.set('initRecord',record); //也可以使用form.setRecord()，但是form.reset()方法会无效
      });
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

