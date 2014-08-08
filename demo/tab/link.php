<?php $title="链接式标签"?>
<?php include("../../templates/control-header.php"); ?>
    <div id="tab"></div>
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
            elCls : 'link-tabs',
            autoRender: true,
            children:[
              {text:'标签一',value:'1',href:'#'},
              {text:'标签二',value:'2',href:'#'},
              {text:'标签三',value:'3',href:'#'}
            ],
            itemTpl : '<a href="{href}">{text}</a>'
          });
        tab.setSelected(tab.getItemAt(0));
    <?php if($useLoader) {?>  
      });
    <?php } ?>   
    </script>
<?php include("../../templates/control-footer.php"); ?>

