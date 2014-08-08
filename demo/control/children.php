<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8" id="c1"></div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
      BUI.use('bui/list',function (List) {
        var list = new List.List({
          render : '#c1',
          elCls : 'bui-select-list',
          defaultChildCfg : {
            tpl : '<li style="color:red;">{text}:{value}</li>'
          },
          children : [
            {text:'选项1',value:'a'},
            {text:'选项2',value:'b'},
            {text:'选项3',value:'c'},
            {text:"数字值",value:3}
          ]
        });

        list.render();
      });
    </script>
<?php include("../../templates/control-footer.php"); ?>

