<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <p>控件位置</p>
    <div class="row">
      <div id="t1" class="span16 offset1" style="height:200px;background-color:red;margin-top:100px;position:relative;">
       
      </div>
    </div>
    <p>
      <label for="x">x : </label> <input id="x" type="text"><br/>
      <label for="y">x : </label> <input id="y" type="text"><br/>
      <button id="J_Move" class="button">移动</button>
    </p>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
      var Component = BUI.Component,
        UIBase = Component.UIBase;
      //Position扩展需要操纵DOM
      var ControlView = Component.View.extend([UIBase.PositionView]);

      //使用Position
      var Control = Component.Controller.extend([UIBase.Position],{

      },{
        ATTRS : {
          xview : {
            value : ControlView
          }
        }
      });

      var config = {
          render : '#t1',
          elCls : 'well',
          elStyle : {position : 'absolute'},
          width:50,
          height:50,
          x : 50,
          y : 50
        },
        c = new Control(config);
      c.render();

      $('#J_Move').on('click',function () {
        var x = $('#x').val(),
          y = $('#y').val();
        if(x && y){
          c.move(x,y);
        }
      });
    </script>
<?php include("../../templates/control-footer.php"); ?>

