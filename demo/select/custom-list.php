<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="hidden" id="hide" value="1333" name="hide">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
    KISSY.use(['bui/select','bui/picker','bui/list'],function(S,Select,Picker,List){
<?php }else if($useLoader) {?>
  BUI.use(['bui/select','bui/picker','bui/list'],function(Select,Picker,List){
<?php }else{?> 
    var Select = BUI.Select,
      Picker = BUI.Picker,
      List = BUI.List;

<?php }?>  
    var list = new List.SimpleList({
        items : [{a:'123',b:'选择文本1'},{a:'cdd',b:'选择文本2'},{a:'1333',b:'选择文本3'}],
        itemTpl : '<li>{b}</li>',
        idField : 'a',
        elCls:'bui-select-list'
      }),
      
      picker = new Picker.ListPicker({
        width:300,  //指定宽度
        children : [list] //配置picker内的列表
      }),
      select = new Select.Select({  
        render:'#s1',
        picker : picker,
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