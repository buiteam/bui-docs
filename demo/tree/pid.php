<?php $title="显示连接线的树"?>
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
    KISSY.use(['bui/tree','bui/data'],function (S,Tree,Data){
    <?php }else{?>
    BUI.use(['bui/tree','bui/data'],function (Tree,Data) {
    <?php } ?>
    
      var data = [
        {pid : '1',id : '11',text : '11',leaf : false}, //非叶子节点一定要标注
        {pid : '1',id : '12',text : '12'},
        {pid : '11',id : '112',text : '112'},
        {pid : '11',id : '111',text : '111'},
        {pid : '1',id : '13',text : '13',leaf : false},
        {pid : '13',id : '131',text : '131',leaf : false},
        {pid : '131',id : '1311',text : '1311'},
        {pid : '13',id : '132',text : '132'},
        {pid : '131',id : '1312',text : '1312'}
      ],
      store = new Data.TreeStore({
        pidField : 'pid', //设置pid的字段名称
        root : {
          id : '1',
          text : '1'
        },
        data : data
      });

      //由于这个树，不显示根节点，所以可以不指定根节点
      var tree = new Tree.TreeList({
        render : '#t1',
        store : store,
        showLine : true //显示连接线
      });
      tree.render();

      tree.on('itemclick',function(ev){
        var item = ev.item;
        $('.log').text(item.text);
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

