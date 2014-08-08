<?php $title="询问信息"?>
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
        BUI.Message.Alert('这只是简单的询问信息','question');
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