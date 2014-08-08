<?php $title="简单列表"?>
<?php include("../../templates/control-header.php"); ?>
    <div  id="list1" class="row">
      <ul class="bui-select-list span8">
        <li class="bui-list-item" data-value="1">选项1</li>
        <li class="bui-list-item" data-value="2">选项2</li>
        <li class="bui-list-item" data-value="3">选项3</li>
        <li class="bui-list-item" data-value="4">选项4</li>
      </ul>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list'],function(S,List){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list'],function(List){
    <?php }else{?> 
        var List = BUI.List;
    <?php }?>  
        var list = new List.SimpleList({
            width:200,
            srcNode : '#list1'
          });
          
        list.render();
        list.on('itemclick', function(ev){
          var item = ev.item;
          alert(item.text + '：' + item.value);
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?>  
    </script>
<?php include("../../templates/control-footer.php"); ?>

