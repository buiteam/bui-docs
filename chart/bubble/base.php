<?php $title="气泡图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <div id="canvas">
        
      </div>
    </div>
    
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    
  
        var chart = new AChart({
          id : 'canvas',
          width : 950,
          height : 500,
          plotCfg : {
            margin : [50,50,100]
            
          },
          title : {
            text : '气泡图',
            'font-size' : '16px'
          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          xAxis : {
              tickOffset : 20
          },
          yAxis : {
            title : {
              text : '气泡'
            },
            min : -10
          },  
          tooltip : {
            shared : true
          },
          seriesOptions : {
              bubbleCfg : {
                
              }
          },
          series: [{
                  name : 'bubble1',
                  data: [[97,36,79],[94,74,60],[68,76,58],[64,87,56],[68,27,73],[74,99,42],[7,93,87],[51,69,40],[38,23,33],[57,86,31]]
              }, {
                  name : 'bubble2',
                  data: [[25,10,87],[2,75,59],[11,54,8],[86,55,93],[5,3,58],[90,63,44],[91,33,17],[97,3,56],[15,67,48],[54,25,81]]
              }, {
                  name : 'bubble3',
                  data: [[47,47,21],[20,12,4],[6,76,91],[38,30,60],[57,98,64],[61,17,80],[83,60,13],[67,78,75],[64,12,10],[30,77,82]]
              }]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>