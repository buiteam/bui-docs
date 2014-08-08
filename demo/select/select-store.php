<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="hidden" id="hide" value="b" name="hide">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
    KISSY.use(['bui/select','bui/data'],function(S,Select,Data){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/select','bui/data'],function(Select,Data){
<?php }else{?> 
    var Select = BUI.Select,
      Data = BUI.Data;
<?php }?>  
    var store = new Data.Store({
      url : 'data/items.json',
      autoLoad : true
    }),
    select = new Select.Select({  
      render:'#s1',
      valueField:'#hide',
      multipleSelect : true,
      store : store
    });
    select.render();
    select.on('change', function(ev){
      alert(ev.item.text);
    });
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>