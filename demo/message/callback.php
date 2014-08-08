<?php $title="回调函数"?>
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
          BUI.Message.Alert('点击触发回调函数',function() {
            alert('执行回调');
          },'error');
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