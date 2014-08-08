<?php $title="Tree Grid"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span16">
        <div class="panel panel-head-borded panel-small">
          <div class="panel-header">树列表</div>
          <div id="t1">
            
          </div>
        </div>
        
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/extensions/treegrid'],function (S,TreeGrid){
    <?php }else{?>
    BUI.use(['bui/extensions/treegrid'],function (TreeGrid) {
    <?php } ?>

      var data = [ 
          {text : '1',id : '1',a:'a1',b:'b1',children: [{text : '11',id : '11',a:'a11',b:'b11'}]},
          {text : '2',id : '2',a:'a2',b:'b2',expanded : true,children : [
              {text : '21',id : '21',a:'a21',b:'b21',children : [{text : '211',id : '211',a:'a211',b:'b211'},{text : '212',id : '212',a:'a212',b:'b212'}]},
              {text : '22',id : '22',a:'a22',b:'b22'}
          ]},
          {text : '3',id : '3',a:'a3',b:'b3'},
          {text : '4',id : '4',a:'a4',b:'b4'}
        ];
      //由于这个树，不显示根节点，所以可以不指定根节点
      var tree = new TreeGrid({
        render : '#t1',
        nodes : data,
        columns : [
          {title : '表头1',dataIndex :'text',width:300}, 
          {title : '表头2',dataIndex :'a',width:100}, 
          {title : '表头3',dataIndex : 'b',width:100}
        ],
        height:250
      });
      tree.render();
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

