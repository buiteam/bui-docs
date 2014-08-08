<?php $title="填充图形"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <h2>基本图形</h2>
      <div id="canvas">
        
      </div>
      <p>填充规则参考： <a href="http://raphaeljs.com/reference.html#Element.attr">raphael属性</a></p>
    </div>
    
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
   
      //创建画板
      var canvas = new Chart.Canvas({
        id : 'canvas',
        height : 500,
        width : 500
      });

      //画矩形
      canvas.addShape('rect',{
        x : 100,
        y : 0,
        r : 5,
        width : 50,
        height: 50,
        stroke : 'yellow',
        fill : '0-#ff0000-#fff'
      });

      //画矩形
      canvas.addShape('rect',{
        x : 200,
        y : 0,
        r : 5,
        width : 50,
        height: 50,
        stroke : 'yellow',
        fill : '90-#ff0000-#fff'
      });

      //圆
      canvas.addShape('circle',{
        cx : 125,
        cy : 100,
        r : 20,
        stroke : '#red',
        fill : 'r(0.25, 0.75)#fff-#ff0000'
      });

      //椭圆
      canvas.addShape('ellipse',{
        cx : 200,
        cy : 100,
        rx : 20,
        ry : 30,
        fill : 'r(0.5, 0.5)blue-#fff',
        stroke : 'blue'
      });

      </script>
<?php include("../../templates/control-footer.php"); ?>