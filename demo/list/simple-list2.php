<?php $title="自定义简单列表"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet">
    <div id="list1"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list'],function(S,List){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list'],function(List){
    <?php }else{?> 
        var List = BUI.List
    <?php }?>  
      var items = [
            {
              title:'日历',
              href : 'javascript:void(0);',
              src : '../../assets/img/calendar.png',
              desc:'<p>日历控件包括，日历选择器，日历控件，月份选择控件，时间选择控件。</p>'
            },
            {
              title:'弹出框',
              href : 'javascript:void(0);',
              src : '../../assets/img/dialog.png',
              desc:'<p>弹出框包括：模态窗口，非模态窗口，可以自定义内容和按钮，方便灵活的使用。</p>'
            },
            {
              title:'消息提示',
              href : 'javascript:void(0);',
              src : '../../assets/img/message.png',
              desc:'<p>提示/确认框包括：消息、警告、确认、错误已经成功提示，确认框同时包含确认和取消，都可以自定义内容和回调函数。</p>'
            },
            {
              title:'菜单',
              href : 'javascript:void(0);',
              src : '../../assets/img/menu.png',
              desc:'<p>分为右键菜单，弹出菜单，左侧菜单以及各种自定义的菜单</p>'
            }
        ],
        tpl = [
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
        ];
        list = new List.SimpleList({
            render:'#list1',
            elCls:'demo-list clearfix',
            items:items,
            itemTpl:tpl.join('')
        });
      list.render();
    <?php if($useLoader) {?>  
      });
    <?php } ?>  
    </script>
<?php include("../../templates/control-footer.php"); ?>

