<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  .bui-select-list{
    overflow: auto;
    overflow-x: hidden;
    max-height: 150px;
    _height : 150px;
  }
</style>
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
          {text:'选项3',value:'c'},

          {text:'选项11',value:'a11'},
          {text:'选项21',value:'b11'},
          {text:'选项31',value:'c11'},

          {text:'选项12',value:'a2'},
          {text:'选项22',value:'b2'},
          {text:'选项32',value:'c2'},

          {text:'选项13',value:'a3'},
          {text:'选项23',value:'b3'},
          {text:'选项33',value:'c3'},

          {text:'选项14',value:'a4'},
          {text:'选项24',value:'b4'},
          {text:'选项34',value:'c4'},

        ],
        select = new Select.Select({  
          render:'#s1',
          valueField:'#hide',
          items:items
        });
    select.render();
    select.on('change', function(ev){
      alert(ev.value);
    });
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>