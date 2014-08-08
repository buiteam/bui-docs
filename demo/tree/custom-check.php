<?php $title="修改节点图标"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8 offset3">
        <div id="t1">
          
        </div>
        <h2>点击的节点</h2>
        <div class="log well"></div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/tree',function (S,Tree){
    <?php }else{?>
    BUI.use('bui/tree',function (Tree) {
    <?php } ?>
    
      //树节点数据，
      //text : 文本，
      //id : 节点的id,
      //leaf ：标示是否叶子节点，可以不提供，根据childern,是否为空判断
      //expanded ： 是否默认展开
      //checked : 节点是否默认选中,如果存在这个字段，允许勾选，否则不允许勾选
      var data = [ 
          {text : '1',id : '1',checked : true,children: [{text : '11',checked : true,id : '11'}]},
          {text : '2',id : '2',expanded : true,checked : true,children : [
              {text : '21',id : '21',checked : true,children : [{text : '211',checked : true,id : '211'},{text : '212',checked : true,id : '212'}]},
              {text : '22',id : '22'}
          ]},
          {text : '3',id : '3'},
          {text : '4',id : '4'}
        ];
      //由于这个树，不显示根节点，所以可以不指定根节点
      var tree = new Tree.TreeList({
        render : '#t1',
        nodes : data,
        checkType: 'custom', //checkType:勾选模式，提供了4中，all,onlyLeaf,none,custom
        showLine : true //显示连接线
      });
      tree.render();

      tree.on('checkedchange',function(ev){
        var checkedNodes = tree.getCheckedNodes();
        var str = '';
        BUI.each(checkedNodes,function(node){
          str += node.id + ',';
        });
        $('.log').text(str);
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

