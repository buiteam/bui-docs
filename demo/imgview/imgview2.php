<?php $title="简单列表"?>
<?php include("../../templates/control-header.php"); ?>

    <link rel="stylesheet" href="http://g.tbcdn.cn/fi/bui/css/imgview-min.css">
    <div class="clearfix">
      <div id="imgviewWrap"></div>
    </div>
    <div class="controls-wrap">
      <a href="#" class="chgList1">换第一组数据</a>
      <a href="#" class="chgList2">换第二组数据</a>
      <a href="#" class="paintPrev">上一个</a>
      <a href="#" class="paintNext">下一个</a>
      <a href="#" class="leftHand">取得viewcontent进行旋转45度（具体API参照第一个例子）</a>
    </div>

  <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
  <?php if($useKissy) {?>
  KISSY.use(['bui/imgview'],function(S,ImgView){
  <?php }else if($useLoader) {?>
  BUI.use(['bui/imgview'],function(ImgView){
  <?php }else{?>
  BUI.use(['bui/imgview'],function(ImgView){
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
      var imgView = new ImgView.ImgView({
        render: "#imgviewWrap",
        width: $(window).width(),
        height: $(window).height() - 50,
        imgList: imgList,
        imgNum: 2, // 默认取第几张图片，默认为0，取第一张
        autoRender: false, // 是否自动渲染,默认为false
        selectedchange: function(num, imgSrc){
          console.log(num);
          console.log(imgSrc);
        },
        // 暂时无法传function。
        commands: [{
          cmd: 'reset',
          text: '重置'
        },{
          cmd: 'dragToggle',
          text: 'drag开关'
        },{
          cmd: 'fitToggle',
          text: '自动大小'
        },{
          cmd: 'resume',
          text: '实际大小'
        },{
          cmd: 'fit',
          text: '适合大小'
        },{
          cmd: 'leftHand',
          text: '左旋'
        },{
          cmd: 'rightHand',
          text: '右旋'
        },{
          cmd: 'zoom',
          text: '放大'
        },{
          cmd: 'micrify',
          text: '缩小'
        }]
      });
      // autoRender如果为true就代表自动渲染。
      imgView.render();

      jQuery(window).resize(function(){
        imgView.set('width', jQuery(window).width());
        imgView.set('height', jQuery(window).height() - 50);
      })



      // 点击事件
      $(".controls-wrap").on('click',function(e){
        e.preventDefault();
        var target = e.target;
        if($.contains(this,target)){
          var self = jQuery(target),
            cls = self.attr("class");

          if (cls == "chgList1") {
            imgView.set('imgList', imgList);
          } else if (cls == "chgList2") {
            imgView.set('imgList', imgList2);
          } else if (cls == "paintPrev") {
            imgView.paintPrev();
          } else if (cls == "paintNext") {
            imgView.paintNext();
          } else if (cls == "leftHand") {
            imgView.get('viewContent').rotate(45, 300, function(){
              console.log('旋转回掉');
            });
          }
        }
      })

  });
</script>
<?php include("../../templates/control-footer.php"); ?>

