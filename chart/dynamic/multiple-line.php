<?php $title="动态图"?>
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
         
          title : {
            text : '多个折线'
          },
          xAxis : {
            type : 'time',
            formatter : function(value){
              var date = new Date(value);
              return date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
            },
            tickOffset : 10
          },
          yAxis : {
            title : {
              text : 'xxxxx'
            },
            min : 0
          },  
          tooltip : {
            valueSuffix : '°C',
            shared : true,
            crosshairs : true
          },
          seriesOptions : {
            lineCfg : { 
              pointInterval : 2000,
              markers : null,//不显示marker,数据量大时，动画非常卡顿
            }
          },
          series : [ {
              name: 'New York',        
              //type : 'column',
              data: getData()
          },{
              name: 'beijing',        
              data: getData() 
          }]
        });
        
        function getData(){
          var data = [],                                                  
              time = Math.floor((new Date()).getTime()/1000) * 1000,                              
              i;                                                          
                                                                          
          for (i = -19; i <= 0; i++) {                                    
              data.push({                                                 
                  x: time + i * 1000,                                     
                  y: getRandom()                                   
              });                                                         
          }                                                               
          return data; 
        }
        function getRandom(){
          var r = Math.random(),
            factor = r > 0.5 ? 1 : -1;
          return 100 + Math.random() * 30 * factor;
        }

        chart.render();

          var series = chart.getSeries()[0],
            series1 = chart.getSeries()[1]; 

                                   
          setInterval(function() {                                    
              add(); 
                                  
          }, 1000);


          function add(){
            var x = Math.floor((new Date()).getTime()/1000) * 1000, // current time         
                  y = getRandom();  
              
            series.addPoint([x, y],false,false);  //第一个不重绘

            var x = Math.floor((new Date()).getTime()/1000) * 1000, // current time         
                  y = getRandom(); 

            series1.addPoint([x, y],false,true);  //第二个重绘
          }
      </script>
<?php include("../../templates/control-footer.php"); ?>