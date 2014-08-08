<?php $title="多文本"?>
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
            margin : [50,50,100]

          },
          title : {
            text : '饼图'
          },

          tooltip : {
            pointRenderer : function(point){
              return (point.percent * 100).toFixed(2)+ '%';
            }
          },
          seriesOptions : {
              pieCfg : {
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
                  ['test',1],
                  ['test',1],
                  ['test',1],
                  ['test',1],
                  ['IE',       26.8],
                  {
                      name: 'Chrome',
                      y: 12.8,
                      sliced: true
                  },
                  ['Safari',    8.5],
                  ['test',1],
                  ['test',1],
                  ['test',1],
                  ['test',1],
                  ['Opera',     6.2],
                  ['test',1],
                  ['test',1],
                  ['test',1],
                  ['test',1],
                  ['Others',   0.7]
              ]
          }]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
