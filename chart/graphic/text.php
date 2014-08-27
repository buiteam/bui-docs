<?php $title="文本"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <div id="canvas">
        
      </div>
    </div>
    
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    
      //创建画板
      var canvas = new AChart.Canvas({
        id : 'canvas',
        height : 400,
        width : 500
      });

      //基本的文本
      var text =  canvas.addShape('text',{
        text : 'hello !!!\n你好',
        x : 100,
        y : 100,
        fill : 'red',
        'font-size':16,
        'font-weight' : 'bold'
      });

      //支持平移、旋转
      var label = canvas.addShape('label',{
        text : 'hello !!!\n你好',
        x : 150,
        y : 100,
        rotate : 90,
        fill : 'blue',
        'font-size':16,
        'font-weight' : 'bold'
      });
      
      </script>
<?php include("../../templates/control-footer.php"); ?>