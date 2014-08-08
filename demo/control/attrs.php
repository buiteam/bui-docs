<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8" id="c1"></div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
      var control = new BUI.Component.Controller({
        render : '#c1',
        elCls : 'test-class',
        elAttrs : {title : 'title'},
        elStyle : {border : '1px solid red',padding:'5px'},
        content : '这是一个盒子',
        width:100,
        height:100
      });
      control.render();
    </script>
<?php include("../../templates/control-footer.php"); ?>

