<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <p>拖拽下面的元素</p>
    <div class="row">
      <div id="t1" class="span16 offset1" style="height:200px;background-color:red;margin-top:100px;">
       
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
      var Component = BUI.Component,
        UIBase = Component.UIBase;
      //Position扩展需要操纵DOM
      var ControlView = Component.View.extend([UIBase.PositionView]);

      //使用Position,Align,Drag扩展
      var Control = Component.Controller.extend([UIBase.Position,UIBase.Align,UIBase.Drag],{

      },{
        ATTRS : {
          xview : {
            value : ControlView
          },
          dragNode : {
            valueFn : function(){
              return this.get('el');
            }
          }
        }
      });

      var config = {
          render : '#t1',
          elCls : 'well',
          width:50,
          height:50,
          constraint: $('#t1')
        },
        c = new Control(config);
      c.render();

    </script>
<?php include("../../templates/control-footer.php"); ?>

