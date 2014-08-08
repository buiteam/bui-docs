<?php $title="可勾选列表"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div id="list1" class="span8">
        
      </div>
      <div id="list2" class="span8"></div>
    </div>
    <div id="list1"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list'],function(S,List){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list'],function(List){
    <?php }else{?> 
        var List = BUI.List;
    <?php }?> 
       
      var items = items = [
            {text:'选项1',value:'a'},
            {text:'选项2',value:'b'},
            {text:'选项3',value:'c'},
            {text:"数字值",value:3}
        ],
        list1 = new List.SimpleList({ //通过设置模板，实现radio勾选效果
            elCls:'bui-select-list',
            itemTpl : '<li><span class="x-radio"></span>{text}</li>',
            render : '#list1',
            items : BUI.cloneObject(items)
          });
      list1.render();

      var list2 = new List.SimpleList({ //通过设置模板，实现checkbox勾选效果
            elCls:'bui-select-list',
            multipleSelect : true,
            itemTpl : '<li><span class="x-checkbox"></span>{text}</li>',
            render : '#list2',
            items : BUI.cloneObject(items)
          });
      list2.render();

    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

