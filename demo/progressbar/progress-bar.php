<?php $title="进度条"?>
<?php include("../../templates/control-header.php"); ?>
   <div class="row">
      <div class="span8">
        <h2>进度条</h2>
        <div id="progressbar">

        </div>
        <p><button class="button button-primary">进度20%</button></p>
        <p><button class="button button-info">进度40%</button></p>
        <p><button class="button button-success">进度60%</button></p>
        <p><button class="button button-warning">进度80%</button></p>
        <p><button class="button button-danger">进度100%</button></p>
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
          elCls : 'progress progress-striped active',
          render : '#progressbar',
          tpl : '<div class="bar"></div>',
          percent:10
        });
        progressbar.render();

        $('.button-primary').click(function(){
          progressbar.set('percent',20);
        });
        $('.button-info').click(function(){
          progressbar.set('percent',40);
        });
        $('.button-success').click(function(){
          progressbar.set('percent',60);
        });
        $('.button-warning').click(function(){
          progressbar.set('percent',80);
        });
        $('.button-danger').click(function(){
          progressbar.set('percent',100);
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

