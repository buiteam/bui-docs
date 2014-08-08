<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<h2>换行</h2>
<div id="s1">
  <input type="hidden" id="hide" value="选项二" name="hide">
</div>
<h2>在一行中</h2>
<div id="s2">
  <input type="hidden" id="hide1" value="2;3" name="hide1">
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
          showTag:true,
          width: 500,
          valueField : '#hide',//显示tag的Combox必须存在valueField
          items:items
        });
      select.render();

    var items1 = [
          '1','2','3','4'
        ],
        select1 = new Select.Combox({  
          render:'#s2',
          showTag:true,
          width : 500,
          elCls : 'bui-tag-follow',
          valueField : '#hide1',//显示tag的Combox必须存在valueField
          items:items1
        });
      select1.render();
    
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>