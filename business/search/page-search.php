<?php $title="搜索页"?>
<?php include("../../templates/control-header.php"); ?>    
<!-- 搜索页 ================================================== -->
    <div class="row">
      <div class="span24">
        <h2>示例</h2>
        <form id="searchForm" class="form-horizontal" tabindex="0" style="outline: none;">
          <div class="row">
            <div class="control-group span8">
              <label class="control-label">供应商编码：</label>
              <div class="controls">
                <input type="text" name="a" class="control-text">
              </div>
            </div>
            <div class="control-group span8">
              <label class="control-label">供应商编码：</label>
              <div class="controls">
                <input type="text" name="b" class="control-text">
              </div>
            </div>
            <div class="control-group span8">
              <label class="control-label">供应商编码：</label>
              <div class="controls">
                <input type="text" name="c" class="control-text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="control-group span10">
              <label class="control-label">起始日期：</label>
              <div class="controls bui-form-group" data-rules="{dateRange : true}">
                <input name="start" data-tip="{text : '起始日期'}" data-rules="{required:true}" data-messages="{required:'起始日期不能为空'}" class="input-small calendar" type="text"><label>&nbsp;-&nbsp;</label>
                <input name="end" data-rules="{required:true}" data-messages="{required:'结束日期不能为空'}" class="input-small calendar" type="text">
              </div>
            </div>
            <div class="form-actions span5">
              <button id="btnSearch" type="submit" class="button button-primary">搜索</button>
            </div>
          </div>
          
        </form>
        
      </div>
    </div> 
    <div class="search-grid-container">
      <div id="grid">
    </div>
    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
    <script src="http://g.tbcdn.cn/fi/bui/bui-min.js?t=201309041336"></script> 
    <script type="text/javascript">
        var Grid = BUI.Grid,
          Store = BUI.Data.Store,
          columns = [
            { title: '供货商编码',width: 100,  sortable: false, dataIndex: 'a'},
            { title: '供货商姓名', width: 100, sortable: true, dataIndex: 'b', selectable: true },
            { title: '供货商来源', width: 150, sortable: false, dataIndex: 'c', selectable: true ,renderer:function(value,obj){
                return value+':'+obj.d;
            }},
            { title: '渠道ID',width: 100, sortable: true,  dataIndex: 'd',  showTip: true },
            { title: '供货商地址', width: 100,sortable: true,  dataIndex: 'e'},
            { title: '联系方式',width: 100, sortable: true,  dataIndex: 'f'},
            { title: '操作', width: 300, dataIndex: 'g',renderer:function(value,obj){
            
              return '<span class="grid-command">删除</span>';
            }}
          ];
 
        var store = new Store({
            url : 'data.php',
            autoLoad:true,
            pageSize:10
          }),
          grid = new Grid.Grid({
            render:'#grid',
            loadMask: true,
            forceFit:true,
            columns : columns,
            store: store,
            plugins : [Grid.Plugins.CheckSelection,Grid.Plugins.AutoFit], //勾选插件、自适应宽度插件
            // 底部工具栏
            tbar:{
             items:[{
                    btnCls : 'button button-primary button-small',
                    text:'命令一',
                    handler : function(){
                      alert('命令一')
                    }
                }]
            },
            // 顶部工具栏
            bbar : {
              //items 也可以在此配置
              // pagingBar:表明包含分页栏
              pagingBar:true
            }
          });
 
        grid.render();

        //创建表单，表单中的日历，不需要单独初始化
        var form = new BUI.Form.HForm({
          srcNode : '#searchForm'
        }).render();

        form.on('beforesubmit',function(ev) {
          //序列化成对象
          var obj = form.serializeToObject();
          obj.start = 0; //返回第一页
          store.load(obj);
          return false;
        });
    </script>
<?php include("../../templates/control-footer.php"); ?>       