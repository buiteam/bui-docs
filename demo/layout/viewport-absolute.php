<?php $title="绝对布局"?>
<?php include("../../templates/control-header.php"); ?>
<style type="text/css">
  .layout-test{
    border : 1px solid red;
  }
  .north,.east,.weast,.south,.center{
    border : 1px solid #ddd;
  }
  .x-layout-item-absolute{
    position: absolute;
  }

  .x-layout-relative{
    position: relative;
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
      
      var control = new Layout.Viewport({
          elCls : 'layout-test',
          children : [{
            layout : {
              top : 0,
              left : 0,
              width:'100%',
              elCls : 'north',
              height: 50
            },
            xclass : 'controller',
            content : '一'
          },{
            xclass : 'controller',
            layout : {
              width:'20%',
              height : '{height} - 100',
              top:50,
              elCls : 'east',
              left : 0
            },
            content : '二'
          },{
            xclass : 'grid',
            layout : {
              width:'80%',
              height : '{height} - 100',
              left : '20%',
              top:50,
              fit : 'width',
              elCls : 'center'
            },
            columns : columns,
            store : store
          },{
            xclass : 'controller',
            layout : {
              bottom : 0,
              left : 0,
              width: '100%',
              height:48,
              elCls : 'south'
            },
            width:'100%',
            content : '三'
          }],
          plugins : [Layout.Absolute]
        });

      control.render();
        

    });
  </script>
<?php include("../../templates/control-footer.php"); ?>