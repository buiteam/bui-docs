<?php $title="按钮式标签"?>
<?php include("../../templates/control-header.php"); ?>
    <div id="tab"></div>
    <div class="row">
      <div class="span10">
        <div  id="log" style="padding:20px">
          
        </div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?> 
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/tab',function(S,Tab){
    <?php }else if($useLoader) {?>
      BUI.use('bui/tab',function(Tab){
    <?php }else{?> 
        var Tab = BUI.Tab
    <?php }?>  
        var tab = new Tab.Tab({
            render : '#tab',
            elCls : 'nav-tabs',
            autoRender: true,
            children:[
              {text:'标签一',value:'1'},
              {text:'标签二',value:'2'},
              {text:'标签三',value:'3'}
            ]
          });
        tab.on('selectedchange',function (ev) {
          var item = ev.item;
          $('#log').text(item.get('text') + ' ' + item.get('value'));
        });
        tab.setSelected(tab.getItemAt(0));
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

