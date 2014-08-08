<?php $title="垂直范围滑动"?>
<?php include("../../templates/control-header.php"); ?>
  <p>选择值：<span id="log">20-50</span></p>
  <div class="row">
    <div id="s1" class="span8 offset2">
      
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
        isVertical : true,
        height:200,
        range : true, //使用范围
        value : [20,50]
      });
      slider.render();
      slider.on('change',function(ev){
        $('#log').text(ev.value.join('-'));
      });
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>