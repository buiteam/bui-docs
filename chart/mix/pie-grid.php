<?php $title="饼图"?>
<?php include("../../templates/control-header.php"); ?>


    <div class="detail-section">  
      <h3>表格和饼图联动</h3>
      <p>点击表格选中饼图，点击饼图选中表格</p>
      <div class="row">
        <div id="grid" class="span12">
          
        </div>
        <div class="span10">
          <div class="panel">
            <div class="panel-header">
              饼图
            </div>
            <div  id="canvas" class="panel-body">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("../../templates/script.php"); ?>
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
  
    <?php if($useKissy) {?>
    KISSY.use(['bui/data','bui/grid'],function (S,Data,Grid){
    <?php }else{?>
    BUI.use(['bui/data','bui/grid'],function (Data,Grid) {
    <?php } ?>
  
        var store = new Data.Store({
          url : '../data/pie.php',
          autoLoad : false
        });
        //饼图
        var chart = new AChart({
          width : 400,
          height : 300,
          id : 'canvas',
          
          plotCfg : {
            margin : [20,0,80] //画板的边距
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
                  distance : 20,
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

        var columns = [
          {title : '编号',dataIndex :'', width:40,renderer : function(value,obj,index){
            return index;
          }},
          {title : '浏览器',dataIndex :'name', width:100},
          {title : '占比(%)',dataIndex : 'y',width:100}
        ],
        grid = new Grid.Grid({
          render:'#grid',
          columns : columns,
          loadMask: true, //加载数据时显示屏蔽层
          store: store
        });
 
        grid.render();

        store.on('load',function(){
          var data = store.getResult();
          chart.changeData(data);
        });
        store.load(); //store.load(params);

        var pie = chart.getSeries()[0];
        //根据名称获取饼图项
        function findItem(name){
          var 
            items = pie.getItems(),
            rst;
          BUI.each(items,function(item){
            //point是表示这个图形的位置的对象，obj是初始时传入的对象
            if(item.get('point').obj.name == name){
              rst = item;
              return false;
            }
          });
          return rst;
        }

        var paused = false
        //点击表格选中圆饼图
        grid.on('rowclick',function(ev){
          var record = ev.record,
            item = findItem(record.name);

          paused = true; //防止死循环
          pie.setSelected(item);
          paused = false;
        });

        chart.on('seriesitemselected',function(ev){
          if(paused){
            return;
          }
          var item = ev.seriesItem,
            record = item.get('point').obj;
          grid.setSelected(record);

        });
      });
      </script>
<?php include("../../templates/control-footer.php"); ?>