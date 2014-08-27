<?php $title="dashboad"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      
      <div class="row-fluid">
        <div id="canvas" class="span22">
          
        </div>
      </div>
      <div class="row-fluid">
        <div id="grid" class="span14">
          
        </div>
        <div class="span8">
          <div class="panel">
            <div class="panel-header">编辑数据</div>
            <form id="form" class="panel-body form-horizontal">
               <div class="control-group">
                <label class="control-label">名称：</label>
                <div class="controls">
                  <input type="text" name="company" readonly>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">价格：</label>
                <div class="controls">
                  <input type="text" name="price">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">收益%：</label>
                <div class="controls">
                  <input type="text" name="revenue">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">增长：</label>
                <div class="controls">
                  <input type="text" name="growth">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">生产：</label>
                <div class="controls">
                  <input type="text" name="product">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">市场：</label>
                <div class="controls">
                  <input type="text" name="market">
                </div>
              </div>
              <div class="form-actions actions-bar">
                  <div class="centered ">
                    <button id="btn" type="button" class="button button-primary">保存</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="panel">
            <div class="panel-header">
              雷达图
            </div>
            <div id="radar" class="panel-body">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
  
    <?php if($useKissy) {?>
    KISSY.use(['bui/chart','bui/data','bui/grid','bui/form'],function (S,Chart,Data,Grid,Form){
    <?php }else{?>
    BUI.use(['bui/chart','bui/data','bui/grid','bui/form'],function (Chart,Data,Grid,Form) {
    <?php } ?>

    //生成数据
    var myData = [
        {company:'3m Co'},
        {company:'Alcoa Inc'},
        {company:'Altria Group Inc'},
        {company:'American Express Company'},
        {company:'American International Group, Inc.'},
        {company:'AT&T Inc'},
        {company:'Boeing Co.'},
        {company:'Caterpillar Inc.'},
        {company:'Citigroup, Inc.'},
        {company:'E.I. du Pont de Nemours and Company'},
        {company:'Exxon Mobil Corp'},
        {company:'General Electric Company'},
        {company:'General Motors Corporation'},
        {company:'Hewlett-Packard Co'},
        {company:'Honeywell Intl Inc'},
        {company:'Intel Corporation'},
        {company:'International Business Machines'},
        {company:'Johnson & Johnson'},
        {company:'JP Morgan & Chase & Co'},
        {company:'McDonald\'s Corporation'},
        {company:'Merck & Co., Inc.'},
        {company:'Microsoft Corporation'},
        {company:'Pfizer Inc'},
        {company:'The Coca-Cola Company'},
        {company:'The Home Depot, Inc.'},
        {company:'The Procter & Gamble Company'},
        {company:'United Technologies Corporation'},
        {company:'Verizon Communications'},
        {company:'Wal-Mart Stores, Inc.'}/**/
    ];
    
    for (var i = 0, l = myData.length, rand = Math.random; i < l; i++) {
        var data = myData[i];
        data.price = ((rand() * 10000) >> 0) / 100;
        data.revenue = ((rand() * 10000) >> 0) / 100;
        data.growth = ((rand() * 10000) >> 0) / 100;
        data.product = ((rand() * 10000) >> 0) / 100;
        data.market = ((rand() * 10000) >> 0) / 100;
    }
  
        var store = new Data.Store({
          data : []
        });

        //柱状图
        var chart = new AChart({
          height : 400,
          id : 'canvas',
          store : store,
          plotCfg : {
            margin : [0,0,100,50] //画板的边距
          }, /**/
          xAxis : {
            type : 'category',
            labels : {
              label : {
                rotate : -90,
                'text-anchor' : 'end'
              },
              renderer : function(val){
                if(val && val.length > 15){
                  val = val.substring(0,15) + '..'
                }
                return val;
              }
            }
          },
          legend : null, //不显示图例
          series: [{
            type : 'column',
            allowPointSelect : true,
            yField : 'price',
            xField : 'company',
            name: '价格',
            labels : {
              label : {
                rotate : -90,
                y : 5,
                'text-anchor' : 'end'
              }
            }
          }]
        });

        chart.render();
        store.setResult(myData);
        function percent(value){
          return value  + '%';
        }

        //创建表格
        var columns = [
            {title : '公司名称',dataIndex :'company',width:150},
            {title : '价格',elCls : 'right',dataIndex : 'price'},
            {title : '收益',elCls : 'right',dataIndex : 'revenue',renderer : percent},
            {title : '增长',elCls : 'right',dataIndex : 'growth',renderer : percent},
            {title : '生产',elCls : 'right',dataIndex : 'product',renderer : percent},
            {title : '市场',elCls : 'right',dataIndex : 'market',renderer : percent}
          ],
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            loadMask: true, //加载数据时显示屏蔽层
            store: store,
            frontSortable : true,
            forceFit : true
          });
 
        grid.render();

        var column = chart.getSeries()[0];
        //根据名称获取柱状图项
        function findItem(name){
          var 
            items = column.getItems(),
            rst;
          BUI.each(items,function(item){
            //point是表示这个图形的位置的对象，obj是初始时传入的对象
            if(item.get('point').obj.company == name){
              rst = item;
              return false;
            }
          });
          return rst;
        }

        //点击表格选中圆饼图
        grid.on('rowclick',function(ev){
          var record = ev.record,
            item = findItem(record.company);

          chart.pauseEvent('seriesitemselected'); //阻止事件执行
          column.setSelected(item);
          chart.resumeEvent('seriesitemselected');
        });

        chart.on('seriesitemselected',function(ev){
          var item = ev.seriesItem,
            record = item.get('point').obj;

          grid.setSelected(record);

        });

        var form = new Form.HForm({
          srcNode : '#form'
        });

        form.render();

        var radarChart = new AChart({
          height : 350,
          width : 300,
          plotCfg : {
            margin : [0,0,80,0] //画板的边距
          },
          render : '#radar',
          xAxis : {
            type : 'circle',
            ticks : ['价格','收益','增长','生产','市场']
          },
          yAxis : {
            title : null,
            type : 'radius',
            grid : {
              type : 'circle' //圆形栅格，可以改成polygon
            },
            labels : {
              label : {
                x : -12
              }
            },
            min : 0,
            max : 100,
            tickInterval : 25
          },  
          series : [
            {
              type : 'line',
              name : '公司状况',
              data : [100,100,100,100,100]
            }
          ]
        });

        radarChart.render();

        function changeRadar(){
          var series = radarChart.getSeries()[0],
            selected = grid.getSelected(),
            data = [];
          if(selected){
            data.push(selected.price);
            data.push(selected.revenue);
            data.push(selected.growth);
            data.push(selected.product);
            data.push(selected.market);
            series.changeData(data,true);
          }

        }

        grid.on('rowselected',function(ev){
          var record = ev.record;
          form.pauseEvent('change');
          form.set('record',record);
          form.resumeEvent('change');
          changeRadar();
        });

        $('#btn').on('click',function(){
          var obj = form.toObject(),
            record = grid.getSelected();
          if(record){
            BUI.mix(record,obj);
            store.update(record);
            changeRadar();
          }
        });
      /**/
      </script>
<?php include("../../templates/control-footer.php"); ?>