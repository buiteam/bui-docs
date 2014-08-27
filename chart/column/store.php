<?php $title="使用store"?>
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
          url : '../data/data.php',
          autoLoad : false
        }),
         categories = ['Jan',
                      'Feb',
                      'Mar',
                      'Apr',
                      'May',
                      'Jun',
                      'Jul',
                      'Aug',
                      'Sep',
                      'Oct',
                      'Nov',
                      'Dec'];

        var chart = new AChart({
          id : 'canvas',
          width : 950,
          height : 500,
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
            type : 'category', //标明分组坐标轴，会通过数据查找分类
            formatter : function(value){
              return categories[value]; //通过索引获取月的名称
            }
          },
          yAxis : {
            title : {
              text : '温度',
              rotate : -90
            }
          },  
          seriesOptions: {
            columnCfg : {
              xField : 'month' //指定x坐标轴
            }
          },
          tooltip : {
            valueSuffix : '°C',
            shared : true, //是否多个数据序列共同显示信息
            crosshairs : true //是否出现基准线
          },
          series : [{
                name: 'Tokyo',
                yField : 'tokyo'
            }, {
                name: 'New York',
                yField : 'newYork'
            }, {
                name: 'Berlin',
                yField : 'berlin'
            }, {
                name: 'London',
                yField : 'london'
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