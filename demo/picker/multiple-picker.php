<?php $title="选择器"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="text" id="show" name="show">
  <input type="hidden" id="hide" value="" name="hide">
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
      list = new List.Listbox({ //使用可勾选的列表
        elCls:'bui-select-list',
        items : items
      }),
      picker = new Picker.ListPicker({
        trigger : '#show',  
        valueField : '#hide', //如果需要列表返回的value，放在隐藏域，那么指定隐藏域
        width:100,  //指定宽度
        hideEvent : '', //清除点击列表时隐藏，因为需要选中多个
        children : [list] //配置picker内的列表
      });
    picker.render();

       
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>