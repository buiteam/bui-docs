<?php $title="标准列表"?>
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
            {text:'选项1',value:'a'},
            {text:'选项2',value:'b'},
            {text:'选项3',value:'c'},
            {text:"数字值",value:3}
          ],
          list = new List.List({
              render:'#list1',
              elCls:'bui-select-list',//默认是'bui-list'
              width:200,
              items:items
          });
      list.render();
      list.on('itemclick', function(){
        alert(list.getSelectedText() + '：' + list.getSelectedValue());
      });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

