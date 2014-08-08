<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="hidden" id="hide" value="b" name="hide">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
    KISSY.use('bui/select',function(S,Select){
  <?php }else if($useLoader) {?>
  BUI.use('bui/select',function(Select){
<?php }else{?> 
    var Select = BUI.Select
<?php }?>  
    var items = [
          {text:'选项1',value:'a'},
          {text:'选项2',value:'b'},
          {text:'选项3',value:'c'}
        ],
        select = new Select.Select({  
          render:'#s1',
          valueField:'#hide',
          items:items
        });
    select.render();
    select.on('change', function(ev){
      alert(ev.item);
    });
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>