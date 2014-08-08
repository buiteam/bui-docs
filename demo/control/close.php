<?php $title="关闭扩展"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-new-control{
      border : 1px solid #ddd;
      position: relative;
      padding:10px;
    }

    .bui-new-control .x-close{
      position: absolute;
      top:5px;
      right: 5px;
    }
  </style>
    <div class="row">
      <div id="c1" class="span6">
        
      </div>
      <div id="c2" class="span6">
        
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">

      var UIBase = BUI.Component.UIBase,
        NewView = BUI.Component.View.extend([UIBase.CloseView]);

      //继承出最简单的类
      var NewControl = BUI.Component.Controller.extend([UIBase.Close],{

      },{
        ATTRS : {
          xview : {
            value : NewView
          }
        }
      },{
        xclass : 'new-control'
      });

      var c = new NewControl({
        render : '#c1',
        content : '这是可关闭的控件',
        closeAction : 'destroy',//默认是hide
        closeable : true
      });

      c.render();

      var c1 = new NewControl({
        render : '#c2',
        content : '<p>这是可关闭的控件</p><p>并且自定义关闭模板</p>',
        closeTpl : '<a class="x-close" href="###"><span class="x-icon x-icon-normal">×</span></a>',
        closeable : true
      });

      c1.render();


    </script>
<?php include("../../templates/control-footer.php"); ?>

