<?php $title="基本滑块"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-slider .bar{
      -webkit-transition:none;
      transition: none;
    }
  </style>
  <p>选择值：<span id="log">20</span></p>
  <div class="row">
    <div id="s1" class="span8">
      
    </div>
  </div>
  <div class="row">
    <div id="s2" class="span8">
      
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
        elCls : 'progress',
        backTpl : '<div class="bar bar-warning"></div>',
        value : 20
      });
      slider.render();
      slider.on('change',function(ev){
        $('#log').text(ev.value);
      });

      var slider1 = new Slider.Slider({
        render : '#s1',
        elCls : 'progress',
        backTpl : '<div class="bar bar-success"></div>',
        value : 30
      });
      slider1.render();
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>