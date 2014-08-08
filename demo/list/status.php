<?php $title="可勾选列表"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div id="list1" class="span8">
        
      </div>
      
    </div>
    <p>
      <button id="btnDisable" class="button">禁用</button>
      <button id="btnEnable" class="button">全部可用</button>
    </p>
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
      //原始数据中的值决定样式 
      var items = items = [
            {text:'选项1',value:'a'},
            {text:'选项2',value:'b',selected : true},
            {text:'选项3',value:'c',disabled : true},
            {text:"数字值",value:3}
        ],
        list = new List.SimpleList({ //通过设置模板，实现radio勾选效果
            elCls:'bui-select-list',
            itemTpl : '<li><span class="x-radio"></span>{text}</li>',
            render : '#list1',
            itemStatusFields : { //设置数据跟状态的对应关系
              disabled : 'disabled',
              selected : 'selected' 
            },
            items : items
          });
      list.render();

      //禁用选中
      $('#btnDisable').on('click',function(){
        var selectedItem = list.getSelected();
        list.setItemStatus(selectedItem,'disabled',true);
      });
      //取消所有的禁用
      $('#btnEnable').on('click',function(){
        var items = list.getItems();
        BUI.each(items,function(item){
          //list.clearItemStatus(item,'disabled');
          list.setItemStatus(item,'disabled',false);
          
        });
      });


    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

