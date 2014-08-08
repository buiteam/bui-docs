<?php $title="上传的事件"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
    <div class="span8">
      <div id="J_Uploader">
      </div>
    </div>
  </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/uploader',function (S,Uploader){
    <?php }else{?>
    BUI.use('bui/uploader',function (Uploader) {
    <?php } ?>
    
      var uploader = new Uploader.Uploader({
        render: '#J_Uploader',
        url: '../../../test/upload/upload.php',
        //根据业务需求来判断上传是否成功，这里返回一个boolean
        isSuccess: function(result){
          if(result && result.url){
            return true;
          }
          return false;
        }
      }).render();
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>