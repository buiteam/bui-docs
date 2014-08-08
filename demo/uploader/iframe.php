<?php $title="使用iframe上传"?>
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
        //使用iframe上传类型，此类型不能实现进度条
        type:'iframe',
        render: '#J_Uploader',
        url: '../../../test/upload/upload.php'
      }).render();
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

