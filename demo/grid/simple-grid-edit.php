<?php $title="列百分比表格"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    form h3{
      margin: 20px 0 10px 0;
    }

    .price{
      color: red;
    }

    .table th, .table td{
      line-height: 26px;
    }

    .bui-grid-cell-text .x-icon{
      margin-left: 5px;
    }
  </style>
  <form id="J_Form" action="" class="form-horizontal">
    <h3>联系人信息</h3>
    <hr/>
    <div class="control-group">
      <label class="control-label"><s>*</s>姓名：</label>
      <div class="controls">
        <input type="text" class="input-large" data-rules="{required:[true,'姓名不能为空！']}">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">备注：</label>
      <div class="controls">
        <input type="text" class="input-large"  data-rules="{required:true}">
      </div>
    </div>
    
    <h3>输入联系人信息</h3>
    <hr/>
    <ul class="toolbar"> 
      <li><button id="J_BtnSelect" type="button" class="button button-info"><i class="icon icon-white icon-envelope"></i> 选择联系人</button></li>
    </ul>
    <div id="grid"></div>
    
    <h3>付款设置</h3>
    <hr/>
    <div class="control-group">
      <label class="control-label">应付金额（元）：</label>
      <div class="controls">
        <span class="price">5000元</span>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label"><s>*</s>付款时间：</label>
      <div class="controls">
        <input type="text" class="input-large calendar calendar-time" readonly  data-rules="{required:true}">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label">备注</label>
      <div class="controls">
        <input type="text" class="input-large">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label">手机验证码</label>
      <div class="controls control-row1">
        <input name="validCode" type="text" data-cfg="{validEvent:'blur'}" data-rules="{required:true,regexp:[/^\d{6}$/,'验证码必须6位数字']}">
        <button  class="button button-small">发送验证码</button>
      </div>
    </div>

    <div class="row actions-bar">
      <div class="form-actions span8 offset3">
         <button  id="J_BtnSave" class="button button-large button-warning" title="暂存数据，不发生校验" type="button">保存</button>
         <button class="button button-large button-warning" type="submit">确认并提交</button>
      </div>
    </div>


  </form>

  <div id="J_Content" class="hide">
    <div id="J_ContentGrid"></div>
  </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use['bui/form','bui/grid','bui/data','bui/overlay','bui/tooltip'],function (S,Form,Grid,Data,Overlay,Tooltip) {
    <?php }else if($useLoader) {?>
    BUI.use(['bui/form','bui/grid','bui/data','bui/overlay','bui/tooltip'],function (Form,Grid,Data,Overlay,Tooltip) {
    <?php }else{?>
        var Grid = BUI.Grid,
          Form = BUI.Form,
          Data = BUI.Data,
          Overlay = BUI.Overlay,
          Tooltip = BUI.Tooltip;
    <?php }?>
        var form = new Form.HForm({
        srcNode : '#J_Form'
        //errorTpl : '<p><span class="x-icon x-icon-small x-icon-error">!</span>{error}</p>'
      }).render();

      //点击字段时清除错误 
      var validField = form.getField('validCode');
      validField.get('el').on('focus',function(){
        validField.clearErrors();
      });

      //生成输入框或者直接显示记录
      function getRender(name,rules){
        return  function defRender(value,obj){
          if(!obj){
            return;
          }
          if(obj.operation){
            return '<input type="text" name="' + name + '" data-rules="' + rules + '">'
          }
          return value;
        };
      }
      

      var  Store = Data.Store,   
        columns = [
            {title : 'XXX人',dataIndex :'a',width : 200,renderer : getRender('a',"{required : true}")}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : 'XXX账户', dataIndex :'b',width : 200,renderer : getRender('b',"{required : true}")},
            {title : '手机号',dataIndex :'c',width : 200,renderer : getRender('c',"{required : true}")},
            {title:'金额（元）',dataIndex:'d',width : 200,renderer : function(value,obj){
              value = value || '';
              if(obj.operation){ //如果是操作行
                return '<input type="text" name="d" data-rules="{required : true}">';
              }
              return '<input type="text" name="amount_'+obj.id+'"  data-rules="{required : true}" value="' + value + '"/>'
            }},
            {title : '操作',width : 100,dataIndex:'e',renderer : function(value,obj){

              if(obj.operation){//如果是操作行
                return '<a href="#" class="grid-command btn-add"><i class="icon icon-ok"></i> 确认添加</a>'
              }
              return '<a  href="#" class="grid-command btn-del"><i class="icon icon-trash"></i> 删除</a>'
            }}
          ],
          data = [{id:'1222',a:'赵XXX',b:'sssssaasd@sina.com',c:13812345678,d:5000}];
 
        var store = new Store({
            data : data,
            autoLoad:true
          }),
          grid = new Grid.SimpleGrid({ //使用简单表格
            render:'#grid',
            columns : columns,
            tableCls:'table table-bordered',  //定义表格样式
            width : '100%',
            store : store
          });


        var addPersonGroup, //用于添加记录的输入
          errorTpl='<span class="x-icon x-icon-small x-icon-error" data-title="{error}">!</span>';

        grid.on('itemrendered',function(ev){
          var item = ev.item,
            itemEl = $(ev.element);
          //如果是添加记录的行
          if(item.operation){
            addPersonGroup = new Form.Group({ //创建表单分组，此分组不在表单form对象中，所以不影响校验
              srcNode : itemEl,
              elCls:'',
              errorTpl : errorTpl,
              showError : false,
              defaultChildCfg : {
                elCls : ''
              }
            });
            addPersonGroup.render();
          }else{ //如果是普通的行
            var input = itemEl.find('input');
            form.addChild({
              xclass : 'form-field',
              errorTpl : errorTpl,
              srcNode : input
            });
          }
        });

          
        grid.render();

        //添加最后一条记录，用于输入记录
        store.add({operation : true});

        //序列化添加的记录
        function serializeAdd(){
          return addPersonGroup.get('record');
        }

        //验证添加的记录
        function validAdd(){
          addPersonGroup.valid();
          return addPersonGroup.isValid();
        }
        
        //清除添加
        function clearAdd(){
           addPersonGroup.set('record',{}); //设置记录时会触发校验
           addPersonGroup.clearErrors(); //清除错误信息
        }

        //清除点击链接的默认事件
        grid.get('el').delegate('.grid-command','click',function(ev){
          ev.preventDefault();
        });


        //点击操作
        grid.on('itemclick',function(ev){
          var sender = $(ev.domTarget),
            itemEl = $(ev.element),
            item = ev.item;

          if(sender.hasClass('btn-del')){ //点击删除操作
            delFunction(item,itemEl);
            
          }else if(sender.hasClass('btn-add')){ //点击编辑操作
            addFunction(item,itemEl);
          }
         
        });

        

        //添加记录
        function addFunction(item,itemEl){
          var index = store.findIndexBy(item);
            if(validAdd()){
              var record = serializeAdd(); //获取添加的信息

              submitPerson(record,function(data){ //发送异步请求，返回添加的记录编号
                record.id = data.id;
                store.addAt(record,index);
                clearAdd();
              });
            }
        }

        //删除选中的记录
        function delFunction(item,itemEl){
          BUI.Message.Confirm('确认删除记录？',function(){
            var input = itemEl.find('input'),
              name = itemEl.attr('name');
            if(name){
              form.getField(name).remove();
            }

            store.remove(item);
          },'question');
        }     

        //提交员工
        function submitPerson(person,callback){
          //此处编写异步请求
          //自己完成

          //异步请求的回调函数里调用传入的回调函数
          callback({id : 'test'});
        }     


        /** 批量导入 **/
        var selColumns = [
            {title : 'XXX名称',dataIndex :'a', width:100},
            {title : '邮箱',dataIndex :'b', width:100}
          ];
 
        var selStore = new Store({
            url : 'data/persons.json',
            pageSize:20 // 配置分页数目
          }),
          selGrid = new Grid.Grid({
            render:'#J_ContentGrid',
            columns : selColumns,
            width:650,
            height:350,
            loadMask: true,
            store: selStore,
            plugins : [Grid.Plugins.CheckSelection],
            // 底部工具栏
            bbar:{
                // pagingBar:表明包含分页栏
                pagingBar:true
            }
          });
 
        selGrid.render();


        //添加选中的人员
        function addPersons(){
          var persons = selGrid.getSelection();
          
          BUI.each(persons,function(person){
            var count = store.getCount();
            //添加记录到倒数第二个，同时防止添加重复的记录
            store.addAt(person,count - 1,true,function(obj1,obj2){
              return obj1.id == obj2.id;
            });
          });
          
        }

        //创建弹出框，延迟创建
        function createDialog(){
          return new Overlay.Dialog({
            title:'选择联系人',
            //配置DOM容器的编号
            height:460,
            contentId:'J_Content',
            success:function () {
              addPersons();
              this.close();
            }
          });
        }
        var dialog;

        $('#J_BtnSelect').on('click',function () {
          if(!dialog){
            dialog = createDialog();
          }
          dialog.show();
          selStore.load({start : 0});
        });

        //暂存信息
        $('#J_BtnSave').on('click',function(){
          var info = form.serializeToObject();
          //异步保存
          //自己实现
        });


        //不使用模板的，左侧显示
        var tips = new Tooltip.Tips({
          tip : {
            trigger : '.x-icon-error', //出现此样式的元素显示tip
            alignType : 'top', //默认方向
            elCls : 'tips tips-warning tips-no-icon tip1',
            offset : 10 //距离左边的距离
          }
        });
        tips.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

