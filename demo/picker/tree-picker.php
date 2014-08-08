<?php $title="选择器"?>
<?php include("../../templates/control-header.php"); ?>
<div class="row">
  <div class="span8 offset3" id="s1" >
    <input type="text" id="show" name="show">
    <input type="hidden" id="hide" value="4" name="hide">

  </div>
</div>
<?php include("../../templates/script.php"); ?>
<script type="text/javascript">
<?php if($useKissy) {?>
    KISSY.use(['bui/extensions/treepicker','bui/tree','bui/data'],function(S,TreePicker,Tree,Data){
  <?php }else {?>
  BUI.use(['bui/extensions/treepicker','bui/tree','bui/data'],function(TreePicker,Tree,Data){
 <?php } ?>
    
      //树节点数据，
      //text : 文本，
      //id : 节点的id,
      //leaf ：标示是否叶子节点，可以不提供，根据childern,是否为空判断
      //expanded ： 是否默认展开
    var data = [ 
          {text : '1',id : '1',children: [{text : '11',id : '11'}]},
          {text : '2',id : '2',expanded : true,children : [
              {text : '21',id : '21',children : [{text : '211',id : '211'},{text : '212',id : '212'}]},
              {text : '22',id : '22'}
          ]},
          {text : '3',id : '3'},
          {text : '4',id : '4'}
        ],
      /**/
      store = new Data.TreeStore({
          root : {
            id : '0',
            text : '0'
          },
          pidField : 'pid',
          data : data,
          autoLoad : true/**/
        }),
      //由于这个树，不显示根节点，所以可以不指定根节点
      tree = new Tree.TreeList({
        //nodes : data,
        store : store,
        //dirSelectable : false,//阻止树节点选中
        showLine : true //显示连接线
      });

    var  picker = new TreePicker({
        trigger : '#show',  
        valueField : '#hide', //如果需要列表返回的value，放在隐藏域，那么指定隐藏域
        width:150,  //指定宽度
        children : [tree] //配置picker内的列表
      });
    picker.render();

  });
  </script>
<?php include("../../templates/control-footer.php"); ?>