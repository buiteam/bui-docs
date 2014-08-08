<?php $title="表格工具栏"?>
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
  KISSY.use(['bui/grid','bui/data','bui/toolbar','bui/select'],function(S,Grid,Data,Toolbar){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/grid','bui/data','bui/toolbar','bui/select'],function(Grid,Data,Toolbar){
    <?php }else{?>
        var Grid = BUI.Grid,
            Toolbar = BUI.Toolbar,
            Data = BUI.Data;
    <?php }?>
        var Grid = Grid,
          Store = Data.Store,
          columns = [{
              title : '表头1',
              dataIndex :'a',
              width:100
            },{
              title : '表头2',
              dataIndex :'b',
              width:200
            },{
              title : '表头3',
              dataIndex : 'c',
              width:300
          }],
          data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}];

        var store = new Store({
            data : data,
            autoLoad:true,
			      pageSize:1
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            // 顶部工具栏
            tbar:{
                // items:工具栏的项， 可以是按钮(bar-item-button)、 文本(bar-item-text)、 默认(bar-item)、 分隔符(bar-item-separator)以及自定义项 
                items:[{
                    //xclass:'bar-item-button',默认的是按钮
                    btnCls : 'button button-small',
                    text:'命令一'
                }, {
                    xclass:'bar-item-text',
                    text:'<a href="#">链接</a>'
                },{
                  xclass : 'select',
                  elTagName : 'li',
                  items : [{text : '1',value : '1'},{text : '2',value : '2'}],
                  listeners : {
                    change : function(ev){
                      alert(ev.value);
                      //ev.item,ev.text
                    }
                  }
                }]
                // pagingBar:表明包含分页栏
                // pagingBar:true
            },
            // 底部工具栏
            bbar:{
                // pagingBar:表明包含分页栏
                pagingBar:true
            },
            store : store
          });

        grid.render();
        var tbar = grid.get('tbar'),
          searchBar = new Toolbar.Bar({
            elCls : 'pull-right',
            items:[{
                //xclass:'bar-item-button',默认的是按钮
                content : '<input name="name" id="id"/>'
            }, {
                xclass:'bar-item-button',
                btnCls : 'button button-small button-primary',
                text:'搜索'
            }]
          });
        tbar.addChild(searchBar);
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

