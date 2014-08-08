<?php $title="选择器"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="text" id="show" name="show">
  <input type="hidden" id="hide" value="b" name="hide">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
    KISSY.use(['bui/picker','bui/list'],function(S,Picker,List){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/picker','bui/list'],function(Picker,List){
<?php }else{?> 
    var Picker = BUI.Picker,
      List = BUI.List;
<?php }?>  
    var items = [
          {text:'选项1',value:'a'},
          {text:'选项2',value:'b'},
          {text:'选项3',value:'c'}
        ],
      list = new List.SimpleList({
        elCls:'bui-select-list',
        items : items
      }),
      picker = new Picker.ListPicker({
        trigger : '#show',  
        valueField : '#hide', //如果需要列表返回的value，放在隐藏域，那么指定隐藏域
        width:100,  //指定宽度
        children : [list] //配置picker内的列表 //也可以不直接声明list 使用 children:[{elCls:'bui-select-list',items : items}]
        
      });
    picker.render();

       
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>