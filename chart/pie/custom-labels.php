<?php $title="嵌套"?>
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
          legend : null ,//不显示图例
          tooltip : null,
          seriesOptions : { //设置多个序列共同的属性
            pieCfg : {
              allowPointSelect : true,
              labelHeight : 60, //label 的高度，用于布局
              labelLine : false, //不显示连接线

              labels : {
                distance : 40, //文本距离圆的距离
                custom : true, //自定义标签
                renderer : function(value,item){
                    return'<span class="title">' + value + '</span><br><span style="color:'+item.point.color+'">' + (item.point.percent * 100).toFixed(2)  + '%</span>'; 
                }
              },
              innerSize : '60%' //内部的圆，留作空白

            }
          },
          
          series : [{
              type: 'pie',
              name: 'Browser share',
              data: [
                ['Firefox',   45.0],
                ['IE',       26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true
                },
                ['Safari',    8.5],
                ['Opera',     6.2],
                ['Others',   0.7]
              ]
          }]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
