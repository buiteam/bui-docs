<?php $title="列表框应用"?>
<?php include("../../templates/control-header.php"); ?>
<style type="text/css">
  .btns{
    margin-top: 20px;
  }
  .button{
    margin-bottom: 10px;
  }
  .bui-select-list{
    overflow: auto;
  }
</style>
    <div class="row">
      <div id="list1" class="span5">
      </div>
      <div class="btns centered span2">
        <button  class="button button-small" type="button" id="J_BtnRight">>></button>
        <button  class="button button-small" type="button" id="J_BtnLeft"><<</button>
      </div>
      
      <div id="list2"  class="span5">
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list'],function(S,List){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list'],function(List){
    <?php }else{?> 
        var List = BUI.List
    <?php }?>  
      var items1 = [
          {text:'选项1',value:'a'},
          {text:'选项2',value:'b'},
          {text:'选项3',value:'c'},
          {text:"数字值",value:3}
        ],
          items2 = [
          {text:'选项11',value:'aa'},
          {text:'选项22',value:'bb'},
          {text:'选项33',value:'cc'},
          {text:"数字值1",value:33}
        ],
        list1 = new List.Listbox({
          elCls:'bui-select-list',//默认是'bui-simple-list'
          render : '#list1',
          items : items1,
          height : 150
        }),
        list2 = new List.Listbox({
          elCls:'bui-select-list',//默认是'bui-simple-list'
          render : '#list2',
          items : items2,
          height : 150
        });
      list1.render();
      list2.render();
      $('#J_BtnRight').on('click',function(){
        var selections1 = list1.getSelection();
        list1.removeItems(selections1);
        list2.addItems(selections1);
      });
      $('#J_BtnLeft').on('click',function(){
        var selections2 = list2.getSelection();
        list2.removeItems(selections2);
        list1.addItems(selections2);
      });
      list1.on('dblclick',function(ev){
        var element = $(ev.domTarget).closest('li'),
            item = list1.getItemByElement(element);
            list1.removeItem(item);
            list2.addItem(item);
      });
      list2.on('dblclick',function(ev){
        var element = $(ev.domTarget).closest('li'),
            item = list2.getItemByElement(element);
            list2.removeItem(item);
            list1.addItem(item);
      });
    <?php if($useLoader) {?>  
      });
    <?php } ?>  
    </script>
<?php include("../../templates/control-footer.php"); ?>

