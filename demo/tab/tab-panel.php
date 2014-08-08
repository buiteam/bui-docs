<?php $title="按钮式标签"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8">
        <div id="tab"></div>
        <div id="panel" class="" style="padding:10px;">
          <div>第一个面板</div>
          <div>第二个面板</div>
          <div>第三个面板</div>
        </div>
      </div> 
      <div class="span8">
        <input type="text" id="J_Txt">
        <button class="button" id="J_Btn">更改标题</button>
      </div>
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
          render : '#tab',
          elCls : 'nav-tabs',
          panelContainer : '#panel',//如果内部有容器，那么会跟标签项一一对应，如果没有会自动生成
          //selectedEvent : 'mouseenter',//默认为click,可以更改事件
          autoRender: true,
          children:[
            {title:'源代码',value:'1',selected : true},
            {title:'HTML',value:'2',panelContent : '<p>自定义内部信息</p>'},
            {title:'JS',value:'3',loader : {url : '../dialog/data/text.php'}}
          ]
        });
        //tab.setSelected(tab.getItemAt(0));

        //更改选中的标题
        $('#J_Btn').on('click',function(){
          var txt = $('#J_Txt').val();
          if(txt){
            var item = tab.getSelected();
            item.set('title',txt);
          }
        })

    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

