<?php $title="饼图"?>
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
            text : '饼图'
          },

          tooltip : {
            shared : true,
            pointRenderer : function(point){
              return (point.percent * 100).toFixed(2)+ '%';
            }
          },
          seriesOptions : {
              pieCfg : {
                colors : [ '#ff6600','#b01111','#ac5724','#572d8a','#333333','#7bab12','#c25e5e','#a6c96a','#133960','#2586e7'],
                allowPointSelect : true, //允许选中
                labels : {
                  distance : 40,
                  label : {

                  },
                  renderer : function(value,item){

                      return value + ' ' + (item.point.percent * 100).toFixed(2)  + '%';
                  }
                }
              }
          },
          legend : null,
          series: [{
              type: 'pie',
              name: 'Browser share',
              data: [
                  ['Firefox',   45.0],
                  ['test1',1],
                  ['test2',1],
                  ['test3',1],
                  ['test4',1],
                  ['IE',       26.8],
                  {
                      name: 'Chrome',
                      y: 12.8,
                      sliced: true
                  },
                  ['Safari',    8.5],
                  ['test5',1],
                  ['test6',1],
                  ['test7',1],
                  ['test8',1],
                  ['Opera',     6.2],
                  ['test9',1],
                  ['test11',1],
                  ['test12',1],
                  ['test13',1],
                  ['Others',   0.7]
              ]
          }]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
