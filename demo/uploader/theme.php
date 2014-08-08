<?php $title="自定义上传主题"?>
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
    
      //添加自定义主题
      Uploader.Theme.addTheme('imageView', {
        elCls: 'imageViewTheme',
        //可以设定该主题统一的上传路径
        url: '../../../test/upload/upload.php',
        queue:{
          //结果的模板，可以根据不同状态进进行设置
          resultTpl: {
            'default': '<div class="default">{name}</div>',
            'success': '<div class="success"><img src="../../../test/upload/{url}" /></div>',
            'error': '<div class="error"><span class="uploader-error">{msg}</span></div>',
            'progress': '<div class="progress"><div class="bar" style="width:{loadedPercent}%"></div></div>'
          }
        }
      });

      var uploader = new Uploader.Uploader({
        //指定使用主题
        theme: 'imageView',
        render: '#J_Uploader',
        //不设时使用主题配置的上传路径
        url: '../../../test/upload/upload.php'
      }).render();
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

