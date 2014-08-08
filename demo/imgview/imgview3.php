<?php $title="简单列表"?>
<?php include("../../templates/control-header.php"); ?>

    <link rel="stylesheet" href="http://g.tbcdn.cn/fi/bui/css/imgview-min.css">
    <style>
      .imgview-dialog .bui-stdmod-body{
        padding: 0;
        margin: 0;
        border: none;
      }
    </style>
    <div class="clearfix">
      <div id="content" style="display: none;"></div>
      <a href="#" class="show1">第一组数据</a>
      <a href="#" class="show2">第二组数据</a>
    </div>

  <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
  <?php if($useKissy) {?>
  KISSY.use(['bui/imgview', 'bui/overlay'],function(S, ImgView, Overlay){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/imgview', 'bui/overlay'],function(ImgView, Overlay){
  <?php }else{?>
  BUI.use(['bui/imgview', 'bui/overlay'],function(ImgView, Overlay){
  <?php }?>

      var imgList = [{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/2.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/2.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/3.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/3.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/4.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/4.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/5.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/5.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/6.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/6.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/7.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/7.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/8.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/8.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/2.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/2.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/3.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/3.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/4.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/4.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/5.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/5.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/6.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/6.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/7.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/7.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/8.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/8.jpg"
      }]
      var imgList2 = [{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/1.jpg"
      },{
        src: "https://s.tbcdn.cn/g/fi/act/finder/img/test/2.jpg",
        miniSrc: "https://s.tbcdn.cn/g/fi/act/finder/img/test/2.jpg"
      }]



      var dialogWidth = 800;
      var dialogHeight = 400;
      var imgView = new ImgView.ImgView({
        render: "#content",
        width: dialogWidth,
        height: dialogHeight - 28,
        autoRender: true // 是否自动渲染,默认为false
      });

      var dialog = new Overlay.Dialog({
        title: '图片浏览器',
        width: dialogWidth,
        height: dialogHeight,
        elCls : 'imgview-dialog',
        buttons:[],
        //配置DOM容器的编号
        contentId: 'content',
        success: function () {
          // alert('确认');
          this.close();
        }
      });

      $('.show1').on('click',function () {
        imgView.set('imgList', imgList);
        dialog.show();
        return false;
      });
      $('.show2').on('click',function () {
        imgView.set('imgList', imgList2);
        dialog.show();
        return false;
      });








  });
</script>
<?php include("../../templates/control-footer.php"); ?>

