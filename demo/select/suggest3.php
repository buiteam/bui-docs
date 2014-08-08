<?php $title="提示框"?>
<?php include("../../templates/control-header.php"); ?>
<div class="detail-row">
	<label>使用缓存，可以在开发者工具（按F12）中查看网络或者在bebug模式下查看控制台日志来观看效果</label>
</div>
<div id="s1">
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
    var suggest = new Select.Suggest({
      render:'#s1',
      name:'suggest',
      url:'server-data.php',
      cacheable:true
    });
    suggest.render();
<?php if($useLoader) {?>  
  });
<?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>