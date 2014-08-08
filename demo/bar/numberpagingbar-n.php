<?php $title="工具栏"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span16">
        <div id="bar">
          
        </div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/toolbar','bui/data'],function(S,Toolbar,Data){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/toolbar','bui/data'],function(Toolbar,Data){
    <?php }else{?>
        var Toolbar = BUI.Toolbar,
            Data = BUI.Data;
    <?php }?>
        var NumerPBar = Toolbar.NumberPagingBar,
            Store = Data.Store;
        var store = new Store({
            url:'data/data.php',
            autoLoad:true,
            pageSize : 1
          }),
          bar = new NumerPBar({
            render : '#bar',
            autoRender: true,
            elCls : 'pagination',
            store : store,
            maxLimitCount:4, //起始位置的最少按钮数
            showRangeCount:2 //当前页，2边的按钮数目，默认为1
          });
    <?php if($useLoader) {?>
    });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

