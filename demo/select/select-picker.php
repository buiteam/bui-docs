<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="hidden" id="hide" value="1333" name="hide">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
    KISSY.use(['bui/select','bui/picker','bui/grid','bui/data'],function(S,Select,Picker,Grid,Data){
<?php }else if($useLoader) {?>
  BUI.use(['bui/select','bui/picker','bui/grid',],function(Select,Picker,Grid,Data){
<?php }else{?> 
    var Select = BUI.Select,
      Picker = BUI.Picker,
      Data = BUI.Data,
      Grid = BUI.Grid;

<?php }?>  
    var columns = [
          {title : '表头1(30%)',dataIndex :'a', width:'30%'},
          {id: '123',title : '表头2(30%)',dataIndex :'b', width:'30%'},
          {title : '表头3(40%)',dataIndex : 'c',width:'40%'}
        ],   
      //data = [{a:'123',b:'选择文本1'},{a:'cdd',b:'选择文本2'},{a:'1333',b:'选择文本3',c:'eee',d:2}],
      store = new Data.Store({
        pageSize : 3,
        url : '../grid/data/grid-data.php',
        autoLoad : true
      }),
      grid = new Grid.Grid({
        idField : 'a', //设置作为key 的字段，放到valueField中
        columns : columns,
        textGetter: function(item){ //返回选中的文本
          return item.b;
        },
        bbar:{
          // pagingBar:表明包含分页栏
          pagingBar:true
        },
        store : store
      }),
      picker = new Picker.ListPicker({
        width:300,  //指定宽度
        children : [grid] //配置picker内的列表
      }),
      select = new Select.Select({  
        render:'#s1',
        picker : picker,
        forceFit:false, //不强迫列表跟选择器宽度一致
        valueField:'#hide'
      });
    select.render();
    select.on('change', function(ev){
      var item = ev.item;
      alert(item.b);
    });
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>