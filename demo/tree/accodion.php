<?php $title="仅展开一个节点"?>
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
      var data = [ 
          {text : '1',id : '1',children: [{text : '11',id : '11'}]},
          {text : '2',id : '2',expanded : true,children : [
              {text : '21',id : '21',children : [{text : '211',id : '211'},{text : '212',id : '212'}]},
              {text : '22',id : '22',children : [{text : '221',id : '221'},{text : '222',id : '222'}]}
          ]},
          {text : '3',id : '3',children : [{text : '31',id : '31'},{text : '32',id : '32'}]},
          {text : '4',id : '4'}
        ];
      //由于这个树，不显示根节点，所以可以不指定根节点
      var tree = new Tree.TreeList({
        render : '#t1',
        accordion : true, //设置手风琴效果
        expandEvent : 'itemclick', //单击展开节点
        collapseEvent : null,  //点击收缩效果去除，展开的icon依然生效
        nodes : data
      });
      tree.render();

      tree.on('itemclick',function(ev){
        var item = ev.item;
        $('.log').text(item.text);
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

