<?php $title="一些简单的校验"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
    <div class="span8">
      <div id="J_Uploader">
      </div>
    </div>
  </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    seajs.data.map = [];
    <?php if($useKissy) {?>
    KISSY.use('bui/uploader',function (S,Uploader){
    <?php }else{?>
    BUI.use('bui/uploader',function (Uploader) {
    <?php } ?>
      
      /**
       * 返回数据的格式
       *
       *  默认是 {url : 'url'},否则认为上传失败
       *  可以通过isSuccess 更改判定成功失败的结构
       */
      var uploader = new Uploader.Uploader({
        //指定使用主题
        theme: 'imageView',
        render: '#J_Uploader',
        url: '../../../test/upload/upload.php',
        queue: {
          resultTpl:{
            'success': '<div class="success"><img src="../../../test/upload/{url}" title="{name}"/></div>',
            'error': '<div class="error"><span class="uploader-error">{msg}</span></div>'
          }
        },
        rules: {
          //文的类型
          ext: ['.png,.jpg','文件类型只能为{0}'],
          //上传的最大个数
          max: [5, '文件的最大个数不能超过{0}个'],
          //文件大小的最小值,这个单位是kb
          minSize: [10, '文件的大小不能小于{0}KB'],
          //文件大小的最大值,单位也是kb
          maxSize: [1024, '文件大小不能大于1M']
        }
      }).render();

      //获取上传文件的对列
      var queue = uploader.get('queue');

      //设置文件的回显
      queue.setItems([
        {success: true, name: "Winter.jpg",ext:'.jpg', url:"2014_05_22/Winter.jpg"}
      ]);
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

