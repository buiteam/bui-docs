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
    <div class="row">
      <div class="span20">
        <div id="tab"></div>
        
      </div> 
    </div>
    <hr>
    <div class="row">
      <div class="span8">
        <input type="text" id="J_Txt"><br>
        <p>
          <textarea id="J_Panel" cols="30" rows="10"></textarea>
        </p>
        <button class="button" id="J_Btn">添加</button>
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>ßßß
      KISSY.use(['bui/tab','bui/mask'],function(S,Tab){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/tab','bui/mask'],function(Tab){
    <?php }else{?> 
        var Tab = BUI.Tab
    <?php }?>  
        var tab = new Tab.TabPanel({
          render : '#tab',
          elCls : 'nav-tabs',
          //panelContainer : '#panel',//如果不指定容器的父元素，会自动生成
          //selectedEvent : 'mouseenter',//默认为click,可以更改事件
          panelTpl : '<div class="panel"><p>{title}:{value}</p></div>',//如果未设置panelContent时，使用此属性生成内容
          defaultChildCfg : {//配置子控件公用的属性
            closeable : true,
            closeTpl : '<i class="icon icon-remove"></i>'
          },
          autoRender: true,
          children:[
            {title:'源代码',value:'1'},
            {title:'HTML',value:'2',panelContent : '<p>自定义内部信息</p>',selected : true},
            {title:'JS',value:'3',loader : {url : '../dialog/data/text.php'}}
          ]
        });

        $('#J_Btn').on('click',function(){
          var title = $('#J_Txt').val(),
            content = $('#J_Panel').val();
          var item = tab.addChild({title : title,panelContent : content});
          tab.setSelected(item); 
        });
        

    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>