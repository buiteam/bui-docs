<?php $title="提示框"?>
<?php include("../../templates/control-header.php"); ?>
<div class="detail-row">
	<label>请输入1、12、2等进行测试，提示结果纯粹是虚拟的，所以仅作效果预览</label>
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
	    url:'server-data.php'
	  });
	  suggest.render();
<?php if($useLoader) {?>  
    });
<?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>