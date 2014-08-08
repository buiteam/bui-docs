<?php $title="选择器"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="text" id="show" name="show">
  <input type="hidden" id="hide" value="" name="hide">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
    KISSY.use(['bui/picker','bui/grid'],function(S,Picker,Grid){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/picker','bui/grid'],function(Picker,Grid){
<?php }else{?> 
    var Picker = BUI.Picker,
      Grid = BUI.Grid;
<?php }?>  
    var columns = [
          {title : '表头1(30%)',dataIndex :'a', width:'30%'},
          {id: '123',title : '表头2(30%)',dataIndex :'b', width:'30%'},
          {title : '表头3(40%)',dataIndex : 'c',width:'40%'}
        ],   
      data = [{a:'123',b:'选择文本1'},{a:'cdd',b:'选择文本2'},{a:'1333',b:'选择文本3',c:'eee',d:2}],
      grid = new Grid.Grid({
        idField : 'a',
        columns : columns,
        width: '100%',
        plugins : [Grid.Plugins.CheckSelection],
        textGetter: function(item){ //返回选中的文本
          return item.b;
        },
        items : data
      }),
      picker = new Picker.ListPicker({
        trigger : '#show',  
        valueField : '#hide', //如果需要列表返回的value，放在隐藏域，那么指定隐藏域
        width:300,  //指定宽度
        hideEvent:'', //取消点击关闭picker
        children : [grid] //配置picker内的列表
      });
    picker.render();

       
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>