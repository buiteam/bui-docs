<?php $title="工具栏"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-pb-page{
      width: 40px;
    }
  </style>
    <div class="row">
      <div class="span16">
        <div id="bar">
          
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="span16">
        <div id="pbar1">
          
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
        var PBar = Toolbar.PagingBar,
            Store = Data.Store;
        var store = new Store({url:'data/data.php',pageSize:1,autoLoad:true}),
            bar = new PBar({ //未应用任何样式
              render : '#bar',
              autoRender: true,
              store : store,
              firstText : '<<',
              prevText : '<',
              nextText : '>',
              lastText : '>>',
              skipText : 'skip',
              totalPageTpl : '{totalPage} pages,',
              totalCountTpl : 'display {pageSize} records of {totalCount}',
              curPageTpl : 'current page is {curPage}'
            });
    <?php if($useLoader) {?>
      });
    <?php } ?>
  </script>
<?php include("../../templates/control-footer.php"); ?>

