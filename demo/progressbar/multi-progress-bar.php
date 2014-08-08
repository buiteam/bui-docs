<?php $title="对比条"?>
<?php include("../../templates/control-header.php"); ?>
   <div class="row">
      <div class="span8">
        <h2>对比条</h2>
        <div id="progressbar">

        </div>
        <p><button class="button button-primary">对比3:4:3</button></p>
        <p><button class="button button-info">对比1:1:3</button></p>
        <p><button class="button button-success">对比2:3:5</button></p>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/progressbar',function(S,ProgressBar){
    <?php }else if($useLoader) {?>
      BUI.use('bui/progressbar',function(ProgressBar){
    <?php }else{?> 
        var ProgressBar = BUI.ProgressBar
    <?php }?>  
        var Progressbar = ProgressBar.Base;
        var progressbar = new Progressbar({
          elCls : 'progress ',
          render : '#progressbar',
          tpl : '<div class="bar bar-success"></div><div class="bar bar-warning"></div><div  class="bar bar-danger"></div>',
          percent:[0,0,0]
        });
        progressbar.render();
        $('.button-primary').click(function(){
          progressbar.set('percent',[30,40,30]);
        });
        $('.button-info').click(function(){
          progressbar.set('percent',[20,30,50]);
        });
        $('.button-success').click(function(){
          progressbar.set('percent',[20,20,60]);
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

