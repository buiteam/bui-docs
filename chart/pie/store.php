<?php $title="饼图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <div id="canvas">
        
      </div>
    </div>

    <?php include("../../templates/script.php"); ?>
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
  
    <?php if($useKissy) {?>
    KISSY.use(['bui/data'],function (S,Data){
    <?php }else{?>
    BUI.use(['bui/data'],function (Data) {
    <?php } ?>
  
        var store = new Data.Store({
          url : '../data/pie.php',
          autoLoad : false
        });

        var chart = new AChart({
          id : 'canvas',
          width : 900,
          height : 500,
          store : store,
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
                allowPointSelect : true,
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
              name: 'Browser share'
          }]
        });

        chart.render();

         store.on('load',function(){
          var data = store.getResult();
          chart.changeData(data);
        });
        store.load(); //store.load(params);
    });
      </script>
<?php include("../../templates/control-footer.php"); ?>