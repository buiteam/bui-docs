<?php $title="提示框"?>
<?php include("../../templates/control-header.php"); ?>
<div class="detail-row">
  <label>使用缓存，可以在开发者工具（按F12）中查看网络或者在bebug模式下查看控制台日志来观看效果</label>
  <p><span class="label label-info">注意：</span>本实例仅表现如何适配字段，后台未做动态返回</p>
</div>
<div id="s1">
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
  KISSY.use(['bui/select','bui/data'],function(S,Select,Data){
<?php }else if($useLoader) {?>
  BUI.use(['bui/select','bui/data'],function(Select,Data){
<?php }else{?> 
    var Select = BUI.Select;
    var Data = BUI.Data;
<?php }?>  

    /* 数据格式
      {"list":[
        {"value": "1"},
        {"value": "2"},
        {"value": "3"}
      ]}
     */
    var store = new Data.Store({
      url:'data/server-data1.php',
      root: 'list' //设置数组对应的字段 list
    });
    var suggest = new Select.Suggest({
      render:'#s1',
      name:'suggest',
      store: store,
      list: {
        itemTpl : '<li>{value}</li>' // 设置列表模板
      },
      cacheable:true
    });
    suggest.render();
<?php if($useLoader) {?>  
  });
<?php } ?> 
  </script>
<?php include("../../templates/control-footer.php"); ?>