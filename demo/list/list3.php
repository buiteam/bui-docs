<?php $title="使用Store的List"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet">
    <div id="list1"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/List','bui/data'],function(S,List,Data){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/List','bui/data'],function(List,Data){
    <?php }else{?> 
        var List = BUI.List,
          Data = BUI.Data;
    <?php }?> 
      var store = new Data.Store({
            url:'list3.json',
            autoLoad:true
          }),
          list = new List.List({
            elCls:'bui-select-list',
            width:'200',
            render : '#list1',
            idField:'value',
            store:store
          });
      list.render();
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

