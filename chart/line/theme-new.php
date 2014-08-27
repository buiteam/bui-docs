<?php $title="折线图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">
      <style>
        .canvas{
          float: left;
          display: inline;
          width: 950px;
          height: 500px;
        }
      </style>
      <div class="canvas" id="canvas0"></div>
      <div class="canvas" id="canvas1"></div>
      <div class="canvas" id="canvas2"></div>
      <div class="canvas" id="canvas3"></div>
      <div class="canvas" id="canvas4"></div>
      <div class="canvas" id="canvas5"></div>
      <div class="canvas" id="canvas6"></div>
      <div class="canvas" id="canvas7"></div>
    </div>

    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    

        var charts = []
        for(var i = 0 ; i < $(".canvas").length ; i ++){
        // for(var i = 0 ; i < 2; i ++){
          var itTheme = i ? AChart.Theme["Smooth"+i] : Chart.Theme["Base"];
          var self = $(".canvas").eq(i);
          (function(i){
            charts.push(new AChart({
              render : self,
              theme : itTheme,
              seriesOptions : {
                lineCfg : {
                  // animate : false
                }
              },
              width : self.width(),
              height : self.height(),
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
              tooltip : {
                valueSuffix : '°C',
                // triggerEvent: 'click',
                shared : true, //是否多个数据序列共同显示信息
                crosshairs : true //是否出现基准线
              },
              series : [{
                name: 'Tokyo',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
              }, {
                name: 'New York',
                data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
              }, {
                name: 'Berlin',
                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
              }, {
                name: 'London',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
              }, {
                name: 'Beijing',
                data: [13.9, 14.2, 15.7, 18.5, 21.9, 25.2, 27.0, 26.6, 24.2, 20.3, 16.6, 14.8]
              }, {
                name: 'Sahnghai',
                data: [17.0, 16.9, 19.5, 24.5, 28.2, 31.5, 35.2, 36.5, 33.3, 28.3, 23.9, 19.6]
              }]
            }));
          })(i)
        }

        for(var i = 0 ; i < charts.length ; i ++){
          charts[i].render();
        }

      </script>
<?php include("../../templates/control-footer.php"); ?>
