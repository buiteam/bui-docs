<?php $title="工具栏"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8">
        <h2>一般按钮分组</h2>
        <div id="bar">
          
        </div>
      </div>
      <div class="span8">
        <h2>可选按钮分组</h2>
        <div id="b1">
          
        </div>
        <p class="well" id="l1"><p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>多选按钮分组</h2>
        <div id="b2">
          
        </div>
        <p class="well" id="l2"></p>
      </div>
      <div class="span8">
        <h2>图标按钮分组</h2>
        <div id="b3">
          
        </div>
        <p class="well" id="l3"></p>
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
        //一般按钮分组
        var buttonGroup = new Toolbar.Bar({
          elCls : 'button-group',  //设置工具栏应用的样式
          defaultChildCfg : {
            elCls : 'button button-small' //设置按钮样式
          },
          children : [ //按钮
            {content : '增加',handler : function(){alert('增加')}}, 
            {content : '修改',handler : function(){alert('修改')}},
            {content : '删除',handler : function(){alert('删除')}}
          ],
          render : '#bar'
        });
   
        buttonGroup.render();
        //可勾选
        var g1 = new Toolbar.Bar({
          elCls : 'button-group',
          itemStatusCls  : {
              selected : 'active' //选中时应用的样式
          },
          defaultChildCfg : {
            elCls : 'button button-small',
            selectable : true //允许选中
          },
          children : [
            {content : '选项一',id:'btn1',selected : true},
            {content : '选项二',id:'btn2'},
            {content : '选项三',id:'btn3'}
          ],
          render : '#b1'
        });
   
        g1.render();
        g1.on('itemclick',function(ev){
          $('#l1').text(ev.item.get('id') + ':' + ev.item.get('content'));
        });

        //多选勾选
        var g2 = new Toolbar.Bar({
          elCls : 'button-group',
          itemStatusCls  : {
              selected : 'active' //选中时应用的样式
          },
          multipleSelect : true,
          defaultChildCfg : {
            elCls : 'button button-small',
            selectable : true //允许选中
          },
          children : [
            {content : '选项一',id:'btn1'},
            {content : '选项二',id:'btn2',selected : true},
            {content : '选项三',id:'btn3',selected : true}
          ],
          render : '#b2'
        });
   
        g2.render();
        g2.on('selectedchange',function(){
          var str = '',
            selection = g2.getSelection();
          BUI.each(selection,function(item){
            str += item.get('id') + ';';
          });
          $('#l2').text(str);
        });

        //多选勾选
        var g3 = new Toolbar.Bar({
          elCls : 'button-group',
          itemStatusCls  : {
              selected : 'active' //选中时应用的样式
          },
          multipleSelect : true,
          defaultChildCfg : {
            elCls : 'button button-small',
            selectable : true //允许选中
          },
          children : [
            {content : '<i class="icon icon-plus"></i>',id:'btn1',elAttrs:{title : '增加'}}, //设置图标，title
            {content : '<i class="icon icon-edit"></i>',id:'btn2',elAttrs:{title : '编辑'}}, //设置图标title
            {content : '<i class="icon icon-remove"></i>',id:'btn3',elAttrs:{title : '删除'}} //设置图标,title
          ],
          render : '#b3'
        });
   
        g3.render();
        g3.on('selectedchange',function(){
          var str = '',
            selection = g3.getSelection();
          BUI.each(selection,function(item){
            str += item.get('id') + ';';
          });
          $('#l3').text(str);
        });
    <?php if($useLoader) {?>
    });
    <?php } ?>
  </script>
<?php include("../../templates/control-footer.php"); ?>

