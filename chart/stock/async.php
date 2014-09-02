<?php $title="异步数据"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <div id="canvas">
        
      </div>
    </div>
    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
    <?php include("../../templates/chart-script.php"); ?>
    <?php include("../../templates/stock-script.php"); ?>
  <script type="text/javascript">
  $.getJSON('../data/time-data.php',function  (data) {
    var stock = new AStock({
        id : 'canvas',
        width : 950,
        height : 400,
        plotCfg : {
            margin : [60,50,60,50] //画板的边距
        },
        xAxis : {//格式化时间
            type : 'time' ,
            formatter : function(value)   {
                return Chart.Date.format(new Date(value),'yyyy-mm-dd');
            },
            animate : false
        },
        yAxis : {
            animate : false
        },
        seriesOptions : { //设置多个序列共同的属性
            lineCfg : { //如果数据序列未指定类型，则默认为指定了xxCfg的类型，否则都默认是line
                markers : {
                    single: true
                },
                animate : false
            }
        },
        tooltip : {
            valueSuffix : '￥'
        },
        series : [{
            name: 'USD to EUR',
            line : {
                'stroke-width' : 1
            },
            lineActived : {
                'stroke-width' : 1
            },
            data: data
        }]
    });
    stock.render();
  });
      </script>
<?php include("../../templates/control-footer.php"); ?>