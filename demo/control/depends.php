<?php $title="控件依赖"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-a-disabled {
      color:#ccc;
    }
  </style>
    <div class="row">
      <div class="span8 well" id="c1">
        
      </div>
      <div id="l1" class="span8">
        
      </div>
    </div>
    <p>
      <button id="btn1" class="button">显示/隐藏</button>
      <button id="btn2" class="button">禁用</button>
      <button id="btn3" class="button">可用</button>
    </p>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    BUI.use('bui/list',function(List){
      var l1 = new List.SimpleList({
        id : 'list',
        elCls : 'bui-select-list',
        render : '#l1',
        items : [
          {value : '1',text : '选项一'},
          {value : '2',text : '选项二'},
          {value : '3',text : '选项三'},
          {value : '4',text : '选项四'}
        ]
      });
      l1.render();
      var A = BUI.Component.Controller.extend({

      },{
        xclass : 'a'
      });
      var control = new A({
        render : '#c1',
        content : '这是控件',
        depends : {
          '#btn1:click':['toggle'],//当点击id为'btn1'的按钮时，执行 control 的toggle方法
          '#btn2:click':['disable'],//当勾选checkbox时，显示控件
          '#btn3:click':['enable'],
          '#list:itemclick': function(ev){ //绑定id 为list的控件
            control.set('content',ev.item.text);
          }
        },
        height: 100
      });
      control.render();
    })
    </script>
<?php include("../../templates/control-footer.php"); ?>

