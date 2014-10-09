<?php $title="折线图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">
      <div id="canvas">

      </div>
    </div>

    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
  
        var chart = new AChart({
          id : 'canvas', //render改成 id
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
            type : 'category'
          },
          yAxis : {
            title : {
              text : '温度',
              rotate : -90
            }
          },
          tooltip : {
            valueSuffix : '°C',
            shared : true, //是否多个数据序列共同显示信息
            crosshairs : true //是否出现基准线
          },
          series : [{
            name: 'Tokyo',
            data: [['一月',-0.2], ['二月',0.8], ['三月',5.7], ['四月',11.3], ['五月',17.0], ['六月',21.5], ['七月',25.2], ['八月',26.5], ['九月',23.3], ['十月',18.3], ['十一月',13.9], ['十二月',9.6]]
          }, {
            name: 'New York',
            data:  [['一月',7.0], ['二月',6.9], ['三月',9.5], ['四月',14.5], ['五月',18.2], ['六月', 22.0], ['七月',24.8], ['八月',24.1], ['九月',20.1], ['十月',14.1], ['十一月',8.6], ['十二月',2.5]]
          }]
        });

        chart.render();
  </script>
<?php include("../../templates/control-footer.php"); ?>
