<?php $title="收缩布局"?>
<?php include("../../templates/control-header.php"); ?>
<style type="text/css">
   .x-accordion-title{
      background: #dfeaf2;
      border-top: 2px solid white;
      padding: 8px 10px;
    }
    .x-collapsed .x-accordion-body{
      height: 0;
      overflow: hidden;
    }
</style>
    <div class="detail-section">  
      <h2>收缩布局</h2>
      <div class="row">
        <div id="J_Layout" class="span16">
          
        </div>
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/layout','bui/grid','bui/data'],function (S,Layout,Grid,Data){
    <?php }else{?>
    BUI.use(['bui/layout','bui/grid','bui/data'],function (Layout,Grid,Data) {
    <?php } ?>

    var Store = Data.Store,
        
        columns = [{
            title : '表头1(20%)',
            dataIndex :'a',
            width:'20%'
          },{
            id: '123',
            title : '表头2(30%)',
            dataIndex :'b',
            width:'30%'
          },{
            title : '表头3(50%)',
            dataIndex : 'c',
            width:'50%'
        }],
        data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}];

      var store = new Store({
          data : data
        });
      
      var control = new BUI.Component.Controller({
          width:600,
          height:500,
          render : '#J_Layout',
          elCls : 'layout-test',
          defaultChildClass : 'controller',
          children : [{
            xclass : 'grid',
            layout : {
              title : '标签一'
            },
            columns : columns,
            width:'100%',
            store : store
          },{
            layout : {
              title : '标签二'
            },
            content : '二'
          },{
            layout : {
              title : '标签三'
            },
            content : "三"
          },{
            layout : {
              title : '标签四'
            },
            content : "四"
          }],
          plugins : [Layout.Accordion]
        });

      control.render();
        

    });
  </script>
<?php include("../../templates/control-footer.php"); ?>