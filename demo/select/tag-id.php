<?php $title="选择框"?>
<?php include("../../templates/control-header.php"); ?>
<h2>换行</h2>
<div id="s1">
  <input type="hidden" id="hide" value="a:选项二" name="hide">
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
          {text:'选项1',id:'a'},
          {text:'选项2',id:'b'},
          {text:'选项3',id:'c'},
          {text:'选项4',id:'d'},
        ],
        select = new Select.Combox({  
          render:'#s1',
          showTag:true,
          limit : 3, //限制最多3个
          width: 500,
          valueField : '#hide',//显示tag的Combox必须存在valueField
          items:items,
          forbitInput : true, //只能从列表中选择，输入无效,一般用于suggest中
          tagFormatter : function(value){ //将id : text中的id去掉
            var arr = value.split(':');

            return arr[1]; //用户输入
          },
          list : { //自定义列表
            textGetter : function(item){
              return item.id + ':' + item.text;
            },
            idField : 'id' //默认是value
          }
        });
      select.render();
    
  <?php if($useLoader) {?>  
  });
  <?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>