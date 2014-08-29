<?php $title="异步时间"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">
      <div id="canvas">

      </div>
    </div>
    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    $.getJSON('../data/time-data.php',function  (data) {
      var chart = new AChart({
        id : 'canvas',
        <?php print getTheme()."\n"?>
        width : 950,
        height : 500,
        plotCfg : {
          margin : [50,50,80] //画板的边距
        },
        title : {
          text : '区域图'
        },
        subTitle : {
          text : 'Source: WorldClimate.com'
        },
        xAxis : {//格式化时间
          type : 'time' ,
          formatter : function(value)   {
            return AChart.Date.format(new Date(value),'yyyy-mm-dd');
          },
          autoAppend : false
        },
        seriesOptions : { //设置多个序列共同的属性
          areaCfg : { //如果数据序列未指定类型，则默认为指定了xxCfg的类型，否则都默认是line
            markers : {
              single : true
            }
          }
        },
        tooltip : {
          valueSuffix : '￥'
        },
        series : [{
          name : 'test',
          animate : false,
          data : data
        }]

      });

      chart.render();
    });
        
      </script>
<?php include("../../templates/control-footer.php"); ?>
