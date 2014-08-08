<?php $title="分离的点图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">
      <div id="canvas">

      </div>
    </div>

    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
        var chart = new Chart({
          id : 'canvas',
          <?php print getTheme()."\n"?>
          width : 950,
          height : 500,
          plotCfg : {
            margin : [50,50,80] //画板的边距
          },
          title : {
            text : '非均匀坐标轴'
          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          yAxis : {
            title : {
              text : '金额',
              x : -40,
              rotate : -90
            },
            ticks : [0,20,500,5000,5100]
          },
          seriesOptions : { //设置多个序列共同的属性
            lineCfg : { //不同类型的图对应不同的共用属性，lineCfg,areaCfg,columnCfg等，type + Cfg 标示
              smooth : true,
              pointStart : 20,
              pointInterval : 100
            }
          },
          tooltip : {
            valueSuffix : '￥'
          },
          series : [{
            name: 'Tokyo',
            data: [10,412,5020,5034,5023,5078,5008,5025,4997,420,18,40]
          }]

        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
