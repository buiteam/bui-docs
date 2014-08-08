<?php $title="弹出菜单"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" /> 
    <div class="row">
      <ul class="top-menu">
        <li>菜单一</li>
        <li>菜单二</li>
        <li>菜单三</li>
      </ul>
    </div>
    <?php include("../../templates/script.php"); ?>  
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/menu',function(S,Menu){
    <?php }else if($useLoader) {?> 
      BUI.use('bui/menu',function(Menu){
    <?php }else{?> 
        var Menu = BUI.Menu
    <?php }?>  
        
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>