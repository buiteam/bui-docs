<?php $title="获取表单数据"?>
<?php include("../../templates/control-header.php"); ?>
    <div id="f1"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use('bui/form',function(S,Form){
    <?php }else if($useLoader) {?>
  BUI.use('bui/form',function(Form){
    <?php }else{?>
      var Form = BUI.Form
    <?php }?>
      var form = new Form.Form({
        render : '#f1',
        elCls : 'form-horizontal',
        defaultChildCfg : {
          tpl : ' <label class="control-label">{label}</label>'+ //指定模板
                '<div class="controls">'+
                '</div>',
          controlContainer : '.controls',
          elCls : 'control-group',
        },
        children: [
          {
            label : '文本1',
            xtype:'text',
            rules: {required : [true,'必须填写文本!']},
            name : 'a'
          },{
            label : '文本2',
            xtype:'number',
            name : 'b',
            validator : function(v){ //可以设置校验函数
              if(v > 10){
                return '不能大于10'
              }
            }
          },{
            name : 'c',
            xtype:'hidden',
            tpl : '',
            controlContainer : ''//隐藏域不使用模板

          },{
            name : 'd',
            value : '0',
            label : '选型A',
            checked : true,
            xtype : 'checkbox'
          },{
            name : 'd',
            value : '1',
            label : '选型B',
            xtype : 'checkbox'
          },
          {
            xtype : 'select',
            label : '选择框',
            items : [
              {text:'选项1',value:'a'},
              {text:'选项2',value:'b'},
              {text:'选项3',value:'c'}
            ],
            select : {
              multipleSelect : true
            },
            value : 'a,b'
          }
        ],
        buttons : [{
            btnCls : 'button button-primary',
            text : '保存',
            handler : function(){
              window.console &&  console.log(form.toObject());
            }
          },
          {
            btnCls : 'button',
            text : '重置',
            handler : function(){
              alert('click reset');
            }
          }
        ]
      }).render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

