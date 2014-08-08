<?php $title="关闭删除Dialog"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <!-- 此节点内部的内容会在弹出框内显示,默认隐藏此节点-->
    <div id="content" class="hide">
      <form class="form-horizontal">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label">供应商编码：</label>
            <div class="controls">
              <input type="text" class="input-normal control-text">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label">供应商类型：</label>
            <div class="controls">
              <select class="input-normal"> 
                <option>淘宝卖家</option>
                <option>大厂直供</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">起始日期：</label>
            <div class="controls">
              <input class="input-small control-text" type="text"><label>&nbsp;-&nbsp;</label><input class="input-small control-text" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">备注：</label>
            <div class="controls control-row4">
              <textarea class="input-large" type="text"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/overlay',function(S,Overlay){
    <?php }else if($useLoader) {?>
    BUI.use('bui/overlay',function(Overlay){
    <?php }else{?>
      var Overlay = BUI.Overlay
    <?php }?>
        $('#btnShow').on('click',function () {
          var dialog = new Overlay.Dialog({
            title:'配置DOM',
            width:500,
            height:320,
            closeAction : 'destroy', //每次关闭dialog释放
            //配置DOM容器的编号
            contentId:'content',
            success:function () {
              alert('确认');
              this.close();
            }
          });
          dialog.show();
        });
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>