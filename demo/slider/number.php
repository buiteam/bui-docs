<?php $title="自定义范围"?>
<?php include("../../templates/control-header.php"); ?>
  <p>选择值：<span id="log">5000</span></p>
  <div class="row">
    <div class="span1">
      1000
    </div>
    <div id="s1" class="span8">
      
    </div>
    <div class="span1">
      10000
    </div>
  </div>
  
  <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/slider',function (S,Slider){
    <?php }else{?>
    BUI.use('bui/slider',function (Slider) {
    <?php } ?>

      var slider = new Slider.Slider({
        render : '#s1',
        min : 1000, 
        step:100,  //滑动最小 100
        max : 10000, //最大值
        value : 5000 //当前值
      });
      slider.render();
      slider.on('change',function(ev){
        $('#log').text(ev.value);
      });
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>