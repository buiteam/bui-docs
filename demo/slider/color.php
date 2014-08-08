<?php $title="基本滑块"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-slider{
      margin: 10px 0;
    }

    .red .x-slider-back{
      background-color: red;
    }
    .green .x-slider-back{
      background-color: green;
    }

    .blue .x-slider-back{
      background-color: blue;
    }
  </style>
  <p>
    颜色值：<span id="log"></span>
  </p>
  <div class="row">
    <div class="span8">
      <div id="s1">
        
      </div>
      <div id="s2">
        
      </div>
      <div id="s3">
        
      </div>
    </div>
    <div class="span8">
      <div id="color" style="width:100px;height:100px;">
        
      </div>
    </div>
  </div>
  
  
  <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/slider',function (S,Slider){
    <?php }else{?>
    BUI.use('bui/slider',function (Slider) {
    <?php } ?>

      var sliders = {};

      function createSlider(name,id){
        var slider = new Slider.Slider({
          render : '#' + id,
          elCls : name,
          max : 255,
          value : 50
        });
        slider.render();
        slider.on('change',function(ev){
          changeColor();
        });

        sliders[name] = slider;
      }

      function changeColor(){
        var red = sliders.red.get('value'),
          green = sliders.green.get('value'),
          blue = sliders.blue.get('value'),
          hex = hexFromRGB( red, green, blue );
        $('#log').text('#' + hex);
        $( "#color" ).css( "background-color", "#" + hex );
      }

      function hexFromRGB(r, g, b) {
        var hex = [
          r.toString( 16 ),
          g.toString( 16 ),
          b.toString( 16 )
        ];
        $.each( hex, function( nr, val ) {
          if ( val.length === 1 ) {
            hex[ nr ] = "0" + val;
          }
        });
        return hex.join( "" ).toUpperCase();
      }

      createSlider('red','s1');
      createSlider('green','s2');
      createSlider('blue','s3');

      changeColor();
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>