<?php $title="成功信息"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/overlay',function(S,overlay){
    <?php }else if($useLoader) {?>
      BUI.use('bui/overlay',function(overlay){
    <?php }?> 
      function show () {
        BUI.Message.Show({
          title : '自定义提示框',
          msg : '这是一个自定义的提示框?',
          icon : 'question',
          buttons : [
            {
              text:'yes',
              elCls : 'button button-primary',
              handler : function(){
                this.close();
              }
            },
            {
              text:'no',
              elCls : 'button',
              handler : function(){
                this.close();
              }
            }

          ]
        });
      }

      show();
      $('#btnShow').on('click',function () {
        show();
      });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>