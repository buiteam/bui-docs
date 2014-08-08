<?php $title="多层饼图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">
      <div id="canvas">

      </div>
    </div>

  <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    var chart = new Chart({
      id : 'canvas',
      width : 1000,
      height : 500,
      plotCfg : {
        margin : [50,50,100]
      },
      title : {
        text : '饼图'
      },
      tooltip : {
        shared : true
      },
      seriesOptions : {
          pieCfg : {
            allowPointSelect : false,
            labels : null
          }
      },
      series: [{
          type: 'pie',
          radius : 100,
          innerRadius : 80,
          name: 'outter',
          data: [
            {name : 'outter',   y : 60},
            {name : '',y : 40,attrs : {fill : '#fff'},placeHolder : true}
          ]
      },
      {
          type: 'pie',
          name: 'middle',
          radius : 80,
          innerRadius : 60,
          data: [
            {name : 'middle',   y : 30,attrs : {fill : 'rgb(85, 194, 187)'}},
            {name : '',y : 70,attrs : {fill : '#fff'},placeHolder : true}
          ]
      },
      {
          type: 'pie',
          name: 'inner',
          radius : 60,
          innerRadius : 40,
          data: [
            {name : 'inner',   y : 50,attrs : {fill : 'rgb(161, 45, 45)'}},
            {name : '',y : 50,attrs : {fill : '#fff'},placeHolder : true}
          ]
      }]
    });

    chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
