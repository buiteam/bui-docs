<?php $title="折线图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <div id="canvas">
        
      </div>
    </div>
    
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/chart','bui/grid','bui/data'],function (S,Chart,Grid,Data){
    <?php }else{?>
    BUI.use(['bui/chart','bui/grid','bui/data'],function (Chart,Grid,Data) {
    <?php } ?>

        var store = new Data.Store({
          url : '../data/data.php',
          autoLoad : true
        });
  
        var chart = new AChart({
          id : 'canvas',
          <?php print getTheme()."\n"?>
          width : 950,
          height : 500,
          store : store,
          title : {
            text : '一年的平均温度'
          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          xAxis : {
            type : 'catogery'
          },
          yAxis : {
            title : {
              text : '温度',
              rotate : -90
            }
          },  
          tooltip : {
            valueSuffix : '°C'
          },
          series : [{
              type : 'column',
              name: 'Tokyo'
          }]
        });

        chart.render();


      </script>
<?php include("../../templates/control-footer.php"); ?>