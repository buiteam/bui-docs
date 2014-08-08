<?php $title="简单列表"?>
<?php include("../../templates/control-header.php"); ?>

    <div class="clearfix">
      <div id="imgviewWrap" style="background:#666;float:left;"></div>
      <div class="controls-wrap" style="float:left;">
        <a href="#" class="chgImg1">换第一张图</a> <br>
        <a href="#" class="chgImg2">换第二张图</a> <br>
        <br>
        <a href="#" class="resize1">resize恢复</a> <br>
        <a href="#" class="resize2">resize一半</a> <br>
        <br>
        <a href="#" class="drag1">禁用drag</a> <br>
        <a href="#" class="drag2">开启drag</a> <br>
        <a href="#" class="dragToggle">dragToggle</a> <br>
        <br>
        <a href="#" class="reset">重置</a> <br>
        <a href="#" class="fitToggle">原始跟fit切换</a> <br>
        <a href="#" class="resume">原始大小</a> <br>
        <a href="#" class="fit">fit大小</a> <br>
        <a href="#" class="zoom">放大</a> <br>
        <a href="#" class="micrify">缩小</a> <br>
        <a href="#" class="leftHand">左旋</a> <br>
        <a href="#" class="rightHand">右旋</a> <br>
        <a href="#" class="viewImg">查看原图</a> <br>
      </div>
    </div>

  <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
  <?php if($useKissy) {?>
  KISSY.use(['bui/imgview'],function(S,Imgview){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/imgview'],function(Imgview){
  <?php }else{?>
  BUI.use(['bui/imgview'],function(Imgview){
  <?php }?>
    var viewContent = new Imgview.ViewContent({
        render: "#imgviewWrap",
        autoRender: false, // 设置为true就自动渲染，默认为false！
        // 以下属性全部可以set来修改。
        width: 800,
        height: 500,
        imgSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg",
        rotateTime: 300, // 旋转时间,默认300
        scaleTime: 300, // 缩放时间,默认300
        overflowSize: 100, // 边界回弹像素,默认100,实际上是取Math.min(overflowSize,imgNowWidth,imgNowHeight)
        drag: true //是否可以拖动，默认为true
      });
      // autoRender如果为true就代表自动渲染。
      viewContent.render();


      // 开放接口，由点击事件触发。
      $(".controls-wrap").on('click',function(e){
        var target = e.target;
        if($.contains(this,target)){
          var self = jQuery(target),
            cls = self.attr("class");

          if (cls == "viewImg") {
            // viewImg就是新窗口打开imgSrc
            self.attr({"href" : viewContent.get('imgSrc'),"target" : "_blank"});
            return true;
          } else if (cls == "drag1") {
            // 换src
            viewContent.set("drag", false);
          } else if (cls == "drag2") {
            // 换src
            viewContent.set("drag", true);
          } else if (cls == "chgImg1") {
            // 换src
            viewContent.set("imgSrc", "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg");
          } else if (cls == "chgImg2") {
            // 换src
            viewContent.set("imgSrc", "https://s.tbcdn.cn/g/fi/act/finder/img/test/2.jpg");
          } else if (cls == "resize1") {
            // 测试resize
            var width = 800,height = 600;
            $("#img-preview-wrap").width(width).height(height)
            // viewContent.resize({width : width,height : height});
            viewContent.set('width', width);
            viewContent.set('height', height);
          } else if (cls == "resize2") {
            // 测试resize
            var width = 400,height = 300;
            $("#img-preview-wrap").width(width).height(height)
            // viewContent.resize({width : width,height : height});
            viewContent.set('width', width);
            viewContent.set('height', height);
          }else{
            // 为了方便,直接根据className调用
            viewContent[cls]();
          }
          return false;
        }
      });

  });
</script>
<?php include("../../templates/control-footer.php"); ?>

