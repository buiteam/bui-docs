<?php $title="确认框"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/overlay',function(S,overlay){
    <?php }else if($useLoader) {?>
      BUI.use('bui/overlay',function(overlay){
    <?php }?> 
      function show () {
        BUI.Message.Confirm('确认要更改么？',function(){
          setTimeout(function(){
            BUI.Message.Alert('这只是简单的错误信息','error');
          });
          
        },'question');
      }

      show();
      $('#btnShow').on('click',function () {
        show();
      });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>