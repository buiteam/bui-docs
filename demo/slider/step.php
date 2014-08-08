<?php $title="最小滑动值"?>
<?php include("../../templates/control-header.php"); ?>
  <p>选择值：<span id="log">20</span></p>
  <div class="row">
    <div id="s1" class="span8">
      
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
        step : 10, //最小滑动
        value : 20 //初始值
      });
      slider.render();
      slider.on('change',function(ev){
        $('#log').text(ev.value);
      });
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>