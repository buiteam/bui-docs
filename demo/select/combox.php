<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<div id="s1">
  <input type="hidden" id="hide" value="" name="hide">
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
          '选项一','选项二','选项三','选项四'
        ],
        select = new Select.Combox({  
          render:'#s1',
          items:items
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