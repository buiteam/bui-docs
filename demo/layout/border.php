<?php $title="边框布局"?>
<?php include("../../templates/control-header.php"); ?>
<link rel="stylesheet" href="http://g.tbcdn.cn/fi/bui/css/layout-min.css">
<style type="text/css">
   
</style>
    <div class="detail-section">  
      <h2>边框布局</h2>
      <div class="row">
        <div id="J_Layout" class="span16">
          
        </div>
      </div>
      <p>
        <button id="J_BtnBig" class="button">变大</button>
        <button id="J_BtnSmall" class="button">变小</button>
      </p>
    </div>
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/layout','bui/grid','bui/data','bui/tree'],function (S,Layout,Grid,Data,Tree){
    <?php }else{?>
    BUI.use(['bui/layout','bui/grid','bui/data','bui/tree'],function (Layout,Grid,Data,Tree) {
    <?php } ?>

    var Store = Data.Store,
        columns = [{
            title : '表头1',
            dataIndex :'a'          
          },{
            id: '123',
            title : '表头2',
            dataIndex :'b'
          },{
            title : '表头3',
            dataIndex : 'c'
        }],
        data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}],
        nodes = [ 
          {text : '1',id : '1',children: [{text : '11',id : '11'}]},
          {text : '2',id : '2',expanded : true,children : [
              {text : '21',id : '21',children : [{text : '211',id : '211'},{text : '212',id : '212'}]},
              {text : '22',id : '22'}
          ]},
          {text : '3',id : '3'},
          {text : '4',id : '4'}
        ];

      var store = new Store({
          data : data
        });
      
      var control = new BUI.Component.Controller({
          width:600,
          height:500,
          render : '#J_Layout',
          elCls : 'ext-border-layout',
          children : [{
            layout : {
              title : 'north',
              region : 'north',
              height : 50
            },
            xclass : 'controller',
            content : "顶部可以放logo，图片"
          },{
            xclass : 'controller',
            layout : {
              region : 'south',
              title : 'south',
              fit : 'height',
              
              height : 50
            },
            width : 250,
            content : '底部信息'
          },{
            xclass : 'controller',
            layout : {
              region : 'east',
              fit : 'both',
              collapsable : true,
              collapsed : true,
              title : '默认收缩',
              width : 150
            },
            elCls : 'red',
            content : "三 自适应宽高"
          },{
            xclass : 'tree-list', //生成tree
            layout : {
              region : 'west',
              fit : 'both', //height,width,both,none
              title : '目录',
              collapsable : true,
              width : 100
            },
            id : 'mytree',
            nodes : nodes
          },{
            xclass : 'grid', //Grid
            layout : {
              region : 'center',
              title : '内容',
              fit : 'both'
            },
            id : 'grid',
            columns : columns,
            store : store
          }],
          plugins : [Layout.Border]
      });

      control.render();
      var grid = control.getChild('grid'),//通过id获取
        tree = control.getChild('mytree'); 

      $('#J_BtnBig').on('click',function() {
        var width = control.get('width'),
          height = control.get('height');
        control.set('width',width + 100);
        control.set('height',height + 100);
      });

      $('#J_BtnSmall').on('click',function() {
        var width = control.get('width'),
          height = control.get('height');
        control.set('width',width - 100);
        control.set('height',height - 100);
      });
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>