<?php $title="标准列表"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet">

    <div id="m" style="border:1px solid red;width:200px;height:200px;"></div>
    <p>
      <button id="mask" class="button">屏蔽</button>
      <button id="unmask" class="button">取消屏蔽</button>
      <button id="maskFull" class="button">屏蔽整个窗口</button>
    </p>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/mask'],function(S,Mask){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/mask'],function(Mask){
    <?php }else{?> 
        var Mask = BUI.Mask;
    <?php }?>  
      
      $('#mask').on('click',function(){
        Mask.maskElement('#m');
      });

      $('#unmask').on('click',function(){
        Mask.unmaskElement('#m');
      });

      $('#maskFull').on('click',function(){
        Mask.maskElement('body');
      });

      $(document).delegate('.bui-ext-mask','click',function(ev){
        var sender = $(ev.currentTarget);
        sender.remove();
      });


    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

