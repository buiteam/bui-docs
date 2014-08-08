<?php $title="标准简单列表"?>
<?php include("../../templates/control-header.php"); ?>
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
          {text:'选项1',value:'a'},
          {text:'选项2',value:'b'},
          {text:'选项3',value:'c'},
          {text:"数字值",value:3}
        ],
        list = new List.SimpleList({
          elCls:'bui-select-list',//默认是'bui-simple-list'
          width:200,
          render : '#list1',
          items : items
        });
      list.render();
      list.on('itemclick', function(ev){
        alert(ev.item.text + '：' + ev.item.value);
      });
    <?php if($useLoader) {?>  
      });
    <?php } ?>  
    </script>
<?php include("../../templates/control-footer.php"); ?>

