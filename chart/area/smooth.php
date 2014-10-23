<?php $title="曲线图"?>
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
            margin : [50,50,80] //画板的边距
          },
          title : {
            text : '一年的平均温度'

          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          xAxis : {
            categories : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月']
          },
          yAxis : {
            title : {
              text : '温度',
              rotate : -90
            }
          },
          seriesOptions : { //设置多个序列共同的属性
            areaCfg : { //不同类型的图对应不同的共用属性，lineCfg,areaCfg,columnCfg等，type + Cfg 标示
              smooth : true,
              markers : {
                single : true,
                marker : {
                  fill : null,
                  stroke : '#eff',
                  radius : 6,
                  'stroke-width':4
                },
                actived : {
                  fill : null,
                  stroke : '#eff',
                  radius : 6,
                  'stroke-width':4
                }
              }
            }
          },
          tooltip : {
            valueSuffix : '°C'
          },
          series : [{
                name: 'Tokyo',
                data: [20, 6.9, 15, 3, 18.2, 4, 25.2, 6, 23.3, 8, 13.9, 9.6]
            }, {
                name: 'New York',
                data: [-0.2, 16, 5.7, 20, 17.0, 3, 24.8, 4.1, 20.1, 5.1, 8.6, 2.5]
            }]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
