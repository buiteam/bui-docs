<?php $title="使用flash上传"?>
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
    
      //使用此类型时，需要确认assets的域名是否和上传路径的域名一致
      //如果不一致，则需要在上传路径的根目录下主置crossdomain.xml文件
      //或者把uploader.swf放到同域名下，然后指定flashUrl
      var uploader = new Uploader.Uploader({
        type:'flash',
        render: '#J_Uploader',
        url: '../../../test/upload/upload.php'//,
        // button: {
        //   flashUrl: baseUrl + 'uploader/uploader.swf'
        // }
      }).render();

      //在ie8以下默认是使用flash上传方式的，所以需要确认crossdomain.xml是否存在
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

