<?php $title="多坐标轴"?>
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
            text : '混合图表'
          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          xAxis : {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
          },
          yAxis : {
            position : 'left',
            
            title : {
              text : '金额',
              x : -40,
              rotate : -90
            }
          },
          seriesOptions : {
            columnCfg : {
              stackType : 'normal'
            }
          },
          tooltip : {
            shared : true
          },
          series : [{
                name: 'Tokyo',
                type : 'column',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'New York',
                type : 'column',
                data: [0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            }, {
                name: 'Berlin',
                type : 'column',
                data: [0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }, {
                name: 'London',
                type : 'column',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            },
            {
                name: 'line test',
                type : 'line',
                data: [13.9, 14.2, 15.7, 18.5, 111.9, 115.2, 117.0, 116.6, 114.2, 110.3, 16.6, 14.8]
            },
            {
                name: 'test 2',
                type : 'line',
                data: [11.0, 16.9, 19.5, 114.5, 118.2, 121.5, 125.2, 126.5, 123.3, 118.3, 113.9, 19.6]
            }]
              
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>