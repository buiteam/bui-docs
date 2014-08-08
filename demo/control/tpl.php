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
          tpl: '<div><input type="text"> &nbsp;<button class="button button-small button-primary">搜索</button></div><ul class="bui-select-list"></ul>',
          childContainer : 'ul',
          elTagName : 'div',
          defaultChildCfg : {
            tplRender : function(item){
              if(BUI.isNumber(item.value)){
                return '<li style="color:red;">' + item.text + '</li>';
              }else{
                return '<li>' + item.text + '</li>'
              }
            }
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

