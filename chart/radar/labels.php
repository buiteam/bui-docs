<?php $title="雷达图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">
      <div id="canvas">

      </div>
    </div>

    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    

        var chart = new AChart({
          id : 'canvas',
          <?php print getTheme()."\n"?>
          width : 950,
          height : 500,
          plotCfg : {
            margin : [50,50,100]

          },
          title : {
            text : '折线雷达图',
            'font-size' : '16px'
          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          xAxis : {
            type : 'circle',
            line : null,
            ticks : ['勇气','智慧','力量','政治','潜力','魅力']
          },
          yAxis : {
            title : null,
            type : 'radius',
            grid : {
              type : 'polygon' //圆形栅格，可以改成polygon
            },
            labels : {
              label : {
                x : -12
              }
            },
            min : 0
          },

          series: [
            {
                name : 'line1',
                type: 'line',
                data: [8, 7, 6, 5, 4, 6]
            }
            ]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
