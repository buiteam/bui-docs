<script type="text/javascript">
  BUI.use('bui/list',function (List) {
    var list = new List.SimpleList({
      render : '#list',
      elCls : 'demo-list clearfix',
      items : itemsArr,
      itemTpl : '<li class="bui-list-item"><div class="demo-list-content"><a class="demo-list-link" href="{href}"><img src="{src}"/></a><div class="demo-list-des"><h3>{title}</h3>{desc}</div></div><div class="demo-list-border"></div></li>'
    });

    list.render();
  })
  
</script>