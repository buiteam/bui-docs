<?php $title="自定义简单列表"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet">
    <div id="list1"></div>
    <div id="paging"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list','bui/data','bui/toolbar'],function(S,List,Data,Toolbar){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list','bui/data','bui/toolbar'],function(List,Data,Toolbar){
    <?php }else{?> 
      var List = BUI.List,
        Data = BUI.Data,
        Toolbar = BUI.Toolbar;
    <?php }?>  
      var tpl = [
          '<li class="bui-list-item">',
            '<div class="demo-list-content">',
              '<a class="demo-list-link" href="{href}">',
                '<img src="{src}"/>',
              '</a>',
              '<div class="demo-list-des">',
                '<h3>{title}</h3>',
                '{desc}',
              '</div>',
            '</div>',
            '<div class="demo-list-border">',
            '</div>',
          '</li>'
        ],
        store = new Data.Store({ //list 和 paging共同使用store,监听store的加载，以及分页信息
          url : 'data/list.json',
          pageSize : 10
        }),
        list = new List.SimpleList({
            render:'#list1',
            elCls:'demo-list clearfix',
            store : store,
            itemTpl:tpl.join('')
        }),
        paging = new Toolbar.NumberPagingBar({ //创建数字分页控件
          render : '#paging',
          elCls : 'pagination pull-right',
          store : store //共同使用store
        });

      list.render();
      paging.render();
      store.load();
    <?php if($useLoader) {?>  
      });
    <?php } ?>  
    </script>
<?php include("../../templates/control-footer.php"); ?>

