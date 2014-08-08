<?php $title="扩展的提示框"?>
<?php include("../../templates/control-header.php"); ?>
<div class="detail-row">
  <label>请输入1、12、2等进行测试，提示结果纯粹是虚拟的，所以仅作效果预览</label>
</div>
<div id="s1">
  
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
BUI.setDebug(true);
<?php if($useKissy) {?>
  KISSY.use(['bui/select','bui/picker','bui/grid'],function(S,Select,Picker,Grid){
<?php }else if($useLoader) {?>
  BUI.use(['bui/select','bui/picker','bui/grid'],function(Select,Picker,Grid){
<?php }else{?> 
      var Select = BUI.Select,
        Picker = BUI.Picker,
        Grid = BUI.Grid;
<?php }?> 
    var columns = [
          {title : '表头1(30%)',dataIndex :'a', width:'30%'},
          {id: '123',title : '表头2(30%)',dataIndex :'b', width:'30%'},
          {title : '表头3(40%)',dataIndex : 'c',width:'40%'}
        ],   
      data = [{a:'123',b:'选择文本1'},{a:'cdd',b:'选择文本2'},{a:'1333',b:'选择文本3',c:'eee',d:2}],
      grid = new Grid.SimpleGrid({
        dataField : 'a',
        columns : columns,
        textGetter: function(item){ //返回选中的文本
          return item.b;
        },
        items : data
      }),
      picker = new Picker.ListPicker({
        width:300,  //指定宽度
        children : [grid] //配置picker内的列表
      });
    var suggest = new Select.Suggest({
      render:'#s1',
      picker : picker,
      name:'suggest',
      url:'data/grid-data.php'
    });
    suggest.render();
<?php if($useLoader) {?>  
    });
<?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>