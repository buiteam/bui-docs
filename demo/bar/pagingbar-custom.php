<?php $title="工具栏"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    .bui-pb-page{
      width: 40px;
    }
  </style>
    <div class="row">
      <div class="span16">
        <h2>精简分页栏</h2>
        <div id="bar">
          
        </div>
      </div>
      <hr>
      <div class="span16">
        <h2>自定义项</h2>
        <div id="pbar2">
          
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
              elCls : 'image-pbar',
              autoRender: true,
              items : ['first','prev','separator','curPage','separator','separator','next','last'],
              curPageTpl : '{curPage}/{totalPage}',
              store : store
            }),
            bar = new PBar({ //未应用任何样式
              render : '#bar',
              elCls : 'image-pbar',
              autoRender: true,
              items : ['first','prev','separator','curPage','separator','separator','next','last','spacer',{id : 'custom',xclass:'bar-item-text'}],
              curPageTpl : '{curPage}/{totalPage}',
              customTpl : 'displayed {start}-{end} records',
              store : store
            });
    <?php if($useLoader) {?>
      });
    <?php } ?>
  </script>
<?php include("../../templates/control-footer.php"); ?>

