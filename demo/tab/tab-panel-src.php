<?php $title="按钮式标签"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  .bui-tab-item{
    position: relative;
    
  }
  .bui-tab-item .bui-tab-item-text{
    padding-right: 25px;
  }

  .bui-tab-item .icon-remove{
    position: absolute;
    right: 2px;
    top:2px;
    z-index: 20;
    cursor: pointer;
  }
</style>
          <div id="tab">
            <ul>
              <li class="bui-tab-panel-item active"><a href="#">标签一</a></li>
              <li class="bui-tab-panel-item"><a href="#">标签二</a></li>
              <li class="bui-tab-panel-item"><a href="#">标签三</a></li>
            </ul>
          </div>
          <div id="panel" class="">
            <p id="p1">第一个</p>
            <p id="p2">第二个</p>
            <p id="p3">第三个</p>
          </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/tab','bui/mask'],function(S,Tab){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/tab','bui/mask'],function(Tab){
    <?php }else{?> 
        var Tab = BUI.Tab
    <?php }?>  
        var tab = new Tab.TabPanel({
          srcNode : '#tab',
          elCls : 'nav-tabs',
          itemStatusCls : {
            'selected' : 'active'
          },
          panelContainer : '#panel'//如果不指定容器的父元素，会自动生成
          //selectedEvent : 'mouseenter',//默认为click,可以更改事件
          
        });

        tab.render();

        

    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>
