<?php $title="工具栏"?>
<?php include("../../templates/control-header.php"); ?>

        <div id="bar">
          
        </div>

    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/toolbar',function(S,Toolbar){
    <?php }else if($useLoader) {?>
      BUI.use('bui/toolbar',function(Toolbar){
    <?php }else{?>
        var Toolbar = BUI.Toolbar;
    <?php }?>
        var bar = new Toolbar.Bar({
            render : '#bar',
            children : [
            { //第一个子工具栏
                elCls: 'toolbar pull-left',
                xclass : 'bar',
                children : [
                  {
                    content:'<label class="checkbox"><input type="checkbox">全选</label>'
                  },
                  {
                    xtype:'button',
                    btnCls : 'button button-danger',
                    text:'<i class="icon-white icon-trash"></i>批量删除',
                    listeners : {
                      'click':function(event){
                        alert('批量删除');
                      }
                    }
                  },
                  {
                    xtype:'spacer',
                    width : 10
                  },
                  {
                    xtype:'button',
                    btnCls : 'button button-success',
                    text:'审核通过',
                    
                    handler:function(event){
                      alert('审核通过');
                    }
                    
                  },{
                    xtype:'separator'
                  },
                  {
                    xtype:'button',
                    btnCls : 'button button-inverse',
                    text:'审核不通过',
                    handler:function(event){
                      alert('审核不通过');
                    }
                  }
                ]
            },{ //第二个子工具栏
              xclass : 'bar',
              elCls : 'button-group pull-right',  //设置工具栏应用的样式
              defaultChildCfg : {
                elCls : 'button button-small' //设置按钮样式
              },
              children : [ //按钮
                {content : '增加',handler : function(){alert('增加')}}, 
                {content : '修改',handler : function(){alert('修改')}},
                {content : '删除',handler : function(){alert('删除')}}
              ]
            }
            ]
          });
          bar.render();
    <?php if($useLoader) {?>
    });
    <?php } ?>
  </script>
<?php include("../../templates/control-footer.php"); ?>

