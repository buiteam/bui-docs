<?php $title="表格布局"?>
<?php include("../../templates/control-header.php"); ?>
<link rel="stylesheet" href="http://g.tbcdn.cn/fi/bui/css/layout-min.css">
<style type="text/css">
  

  .layout-test{
    border: 1px solid red;
    padding: 10px;
  }

  .x-layout-table{
    width: 100%;
  }

  .x-layout-table .panel{
    height: 100%;
  }

  .x-layout-item-cell{
    padding: 10px;
  }
</style>
    <div class="detail-section">  
      <h2>表格布局</h2>
      <div class="row">
        <div id="J_Layout" class="span16">
          
        </div>
      </div>
     
    </div>
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/layout'],function (S,Layout){
    <?php }else{?>
    BUI.use(['bui/layout'],function (Layout) {
    <?php } ?>
        var layout = new Layout.Table({
          rows : 4,
          columns : 4
        }),
        control = new BUI.Component.Controller({
          width:600,
          height:500,
          render : '#J_Layout',
          elCls : 'layout-test',
          defaultChildCfg : {
            xclass : 'controller',
            tpl : '<div class="panel">\
              <div class="panel-header">\
                <h3>{title}</h3>\
              </div>\
              <div class="panel-body">\
                <p>{info}</p>\
              </div>\
            </div>'
          },
          children : [
            {
              layout : {
                row : 0
              },
              title : '1',
              info : '第1个'
            },{
              layout : {
                row : 0
              },
              title : '2',
              info : '第2个'
            },{
              layout : {
                row : 0
              },
              title : '3',
              info : '第3个'
            },{
              layout : {
                row : 0,
                rowspan : 4
              },
              title : '4',
              info : '第4个'
            },

            {
              layout : {
                row : 1,
                colspan : 2
              },
              title : '5',
              info : '第5个'
            },{
              layout : {
                row : 1
              },
              title : '6',
              info : '第6个'
            },

            {
              id:'7',
              layout : {
                row : 2
              },
              title : '7',
              info : '第7个'
            },{
              layout : {
                row : 2,
                colspan : 2,
                rowspan:2
              },
              id : '8',
              title : '8',
              info : '第8个'
            },

            {
              id:'9',
              layout : {
                row : 3
              },
              title : '9',
              info : '第9个'
            }

          ],
          plugins : [layout]
      });

      control.render();
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>