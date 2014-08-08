<?php $title="半饼图"?>
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
          title : {
            text : '浏览器分布图'
          },
          legend : null ,//不显示图例
          seriesOptions : { //设置多个序列共同的属性
            pieCfg : {
              allowPointSelect : true,
              labels : {
                distance : 40, //文本距离圆的距离
                label : {
                  //文本信息可以在此配置
                },
                renderer : function(value,item){ //格式化文本
                  return value + ' ' + (item.point.percent * 100).toFixed(2)  + '%';
                }
              }


            }
          },
          tooltip : {
            pointRenderer : function(point){
              return (point.percent * 100).toFixed(2)+ '%';
            }
          },
          series : [{
              name: 'Browser share',
              startAngle : -180,
              endAngle : 0,
              data: [
                ['Firefox',   44.2],
                ['IE7',       26.6],
                ['IE6',       20],
                ['Chrome',    3.1],
                ['Other',    5.4]
              ]
          }]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
