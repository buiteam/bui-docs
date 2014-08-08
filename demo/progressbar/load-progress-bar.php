<?php $title="多值进度条"?>
<?php include("../../templates/control-header.php"); ?>
   <div class="row">
      <div class="span8">
        <h2>进度条</h2>
        <div id="progressbar">

        </div>
        <p><button class="button button-primary">开始</button></p>
        <p><button class="button button-danger">取消</button></p>
        <p><button class="button button-success">完成</button></p>
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
        var Progressbar = ProgressBar.Load;
        var num = 10,
          ajaxCfg = {     
            url : 'data/progress-bar-data.php',
            dataType : 'json',
            data : {
              id :num
            }
          };
        var progressbar = new Progressbar({
          render : '#progressbar',
          tpl : '<div class="bar"></div>',
          elCls:'progress progress-striped active',
          ajaxCfg : ajaxCfg,
          interval : 1000
        });

        progressbar.render();

        $('.button-primary').click(function(){
          num = 10;
          ajaxCfg.data.id = num;
          progressbar.start();
        });

        $('.button-danger').click(function(){
          progressbar.cancle();
        });

        $('.button-success').click(function(){
          progressbar.complete();
        });
        /*以下是非必要代码，该方法仅仅为了实现修改异步请求的数据
          Start
        */
        function loadchange (argument) {      
          var cfg = progressbar.get('ajaxCfg');
          if(cfg.data.id != 100){
            cfg.data.id += 10;
          }
          if(progressbar.isCompleted()){
            var el = progressbar.get('el');
            el.removeClass('active');
          }
        }
        progressbar.on('loadchange',loadchange);
        /*
          End
         */
     <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

