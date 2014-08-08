<?php $title="自定义信息"?>
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
        var msg = '<h2>上传失败，请上传10M以内的文件</h2>'+
          '<p class="auxiliary-text">如连续上传失败，请及时联系客服热线：0511-23883767834</p>'+
          '<p><a href="#">返回list页面</a> <a href="#">查看详情</a></p>';
        BUI.Message.Alert(msg,'error');
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