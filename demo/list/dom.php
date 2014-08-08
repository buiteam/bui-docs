<?php $title="标准简单列表"?>
<?php include("../../templates/control-header.php"); ?>
    <div >
      <ul id="list1"  class="bui-select-list">
        <li data-value="1">选项一</li>
        <li data-value="2">选项二</li>
        <li data-value="3">选项三</li>
      </ul>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list'],function(S,List){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list'],function(List){
    <?php }else{?> 
        var List = BUI.List
    <?php }?>  
      var 
        list = new List.SimpleList({
          width:200,
          srcNode : '#list1'
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

