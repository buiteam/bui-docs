<?php $title="修改模板的列表"?>
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
          elCls:'panel panel-head-borded',//默认是'bui-simple-list'
          width:200,
          tpl : '<h2 class="panel-header">列表</h2><ul class="bui-select-list"></ul>',
          render : '#list1',
          items : items
        });
      list.render();
      list.on('itemclick', function(ev){
        alert(ev.item.text);
      });
    <?php if($useLoader) {?>  
      });
    <?php } ?>  
    </script>
<?php include("../../templates/control-footer.php"); ?>

