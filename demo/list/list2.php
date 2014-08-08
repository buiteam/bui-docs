<?php $title="自定义列表"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet">
    <div id="list1"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list'],function(S,List){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list'],function(List){
    <?php }else{?> 
        var List = BUI.List
    <?php }?>  
      var items = [
            {id:100,text:'选项1',value:'a'},
            {id:101,text:'选项2',value:'b'},
            {id:102,text:'选项3',value:'c'},
            {id:103,text:"数字值",value:3}
          ],
          list = new List.List({
              render:'#list1',
              elCls:'bui-select-list',
              width:200,
              items:items,
              itemTpl:'<span class="badge badge-error">{id}</span> <span>{text}</span>',
          });
      list.render();
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

