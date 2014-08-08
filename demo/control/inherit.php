<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <div id="c1"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
      //继承出最简单的类
      var NewControl = BUI.Component.Controller.extend({

      },{
        ATTRS : {

        }
      },{
        xclass : 'new-control'
      });
      var c = new NewControl({
        render : '#c1',
        content : '这是新的控件'
      });

      c.render();
    </script>
<?php include("../../templates/control-footer.php"); ?>

