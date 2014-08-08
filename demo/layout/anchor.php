<?php $title="边框布局"?>
<?php include("../../templates/control-header.php"); ?>
<link rel="stylesheet" href="http://g.tbcdn.cn/fi/bui/css/layout-min.css">
<style type="text/css">
   .x-layout-item .bui-form-field {
      width: 100%;
   }

   .bui-form-field label{
    width:80px;
    text-align: right;
    display: inline-block;
   }
</style>
    <div class="detail-section">  
      <h2>边框布局</h2>
      <div class="row">
        <div class="span16">
          <div  id="J_Layout">
            
          </div>
        </div>
      </div>
      <p>
        <button id="J_BtnBig" class="button">变大</button>
        <button id="J_BtnSmall" class="button">变小</button>
      </p>
    </div>
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/layout','bui/form'],function (S,Layout,Form){
    <?php }else{?>
    BUI.use(['bui/layout','bui/form'],function (Layout,Form) {
    <?php } ?>
      
      var form = new Form.Form({
        render : '#J_Layout',
        width : 500,
        height : 300,
        tpl : ' <div class="panel">\
          <div class="panel-header">\
            <strong>锚定布局的表单</strong>\
          </div>\
          <div class="panel-body">\
          </div>\
        </div>',
        childContainer : '.panel-body',
        defaultChildCfg : {
          forceFit : true
        },
        children : [{
          layout : {
            anchor : ['50%',50],
            fit : 'width'
          },
          xtype : 'text',
          label : '50%宽度：',
          name : 'a'
        },{
          xtype : 'text',
          name : 'b',
          label : '75%宽度：',
          layout : {
            anchor : ['75%',50],
            fit : 'width'
          }
        },{
          xtype : 'text',
          name : 'c',
          label : '比宽度少50：',
          layout : {
            anchor : [-50,50],
            fit : 'width'
          }
        },{
          xtype : 'textarea',
          name : 'd',
          layout : {
            anchor : ['100%',80],
            fit : 'width'
          },
          label : '备注信息：'
        }/**/],
        plugins : [Layout.Anchor]
      });
      form.render();

      $('#J_BtnBig').on('click',function() {
        var width = form.get('width'),
          height = form.get('height');
        form.set('width',width + 100);
        //form.set('height',height + 100);
      });

      $('#J_BtnSmall').on('click',function() {
        var width = form.get('width'),
          height = form.get('height');
        form.set('width',width - 100);
        //form.set('height',height - 100);
      });
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>