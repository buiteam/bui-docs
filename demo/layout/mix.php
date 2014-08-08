<?php $title="复杂布局"?>
<?php include("../../templates/control-header.php"); ?>
<link rel="stylesheet" href="http://g.tbcdn.cn/fi/bui/css/layout-min.css">

    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/layout','bui/tab','bui/data','bui/tree'],function (S,Layout,Tab,Data,Tree){
    <?php }else{?>
    BUI.use(['bui/layout','bui/tab','bui/data','bui/tree'],function (Layout,Tab,Data,Tree) {
    <?php } ?>

    var 
        nodes = [ 
          {text : '1',id : '1',children: [{text : '11',id : '11',href:'11.html'}]},
          {text : '2',id : '2',expanded : true,children : [
              {text : '21',id : '21',children : [{text : '211',id : '211',href:'211.html'},{text : '212',id : '212',href:'212.html'}]},
              {text : '22',id : '22',href:'22.html'}
          ]},
          {text : '3',id : '3',href:'3.html'},
          {text : '4',id : '4',href:'4.html'}
        ];
      var control = new Layout.Viewport({
          width:600,
          height:500,
          elCls : 'ext-border-layout',
          children : [{
            layout : {
              title : 'north',
              region : 'north',
              height : 100
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
            layout : {
              region : 'west',
              fit : 'both', //height,width,both,none
              title : '目录',
              collapsable : true,
              width : 250
            },
            xclass : 'tree-list',//生成tree
            id : 'mytree',
            nodes : nodes
            
          },{
            xclass : 'nav-tab', //Grid
            layout : {
              region : 'center',
              title : '内容',
              fit : 'both'
            },
            id : 'tab'
          }],
          plugins : [Layout.Border]
      });

      control.render();
      var tab = control.getChild('tab'),//通过id获取
        tree = control.getChild('mytree',true);  //级联查找树节点

      tree.on('itemclick',function (ev) {
        var node = ev.item,
          id = node.id,
          text = node.text,
          href = node.href;
        tab.addTab({
          title : text,
          href : href,
          id : id
        });
      });
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>