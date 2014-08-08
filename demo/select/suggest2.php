<?php $title="提示框"?>
<?php include("../../templates/control-header.php"); ?>
<div class="detail-row">
	<label>使用静态数据，用于使用最频繁的数据提示</label>
</div>
<div id="s1">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">

BUI.setDebug(true);
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
	   data:['1222224','234445','122','1111111']
	});
	suggest.render();
<?php if($useLoader) {?>  
  });
<?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>