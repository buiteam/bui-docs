<?php $title="表单字段的宽度"?>
<?php include("../../templates/control-header.php"); ?>
  <div class="doc-content">
    <h2>默认标签宽度</h2>
    <form class="form-horizontal well">
      <div class="row">
        <div class="span8">
          <label class="control-label">label：</label>
          <div class="controls"><input class="input-small control-text" type="text"></div>
        </div>
        <div class="span8">
          <label class="control-label">label：</label>
          <div class="controls"><input class="input-small control-text" type="text"></div>
        </div>
      </div>
    </form>

    <h2>小的标签宽度</h2>
    <form class="form-horizontal well">
      <div class="row">
        <div class="span8">
          <label class="control-label control-label-small">label：</label>
          <div class="controls"><input class="input-small control-text" type="text"></div>
        </div>
        <div class="span8">
          <label class="control-label control-label-small">label：</label>
          <div class="controls"><input class="input-small control-text" type="text"></div>
        </div>
      </div>
    </form>
    
    <h2>自适应标签宽度</h2>
    <form class="form-horizontal well">
      <div class="row">
        <div class="span8">
          <label class="control-label control-label-auto">label：</label>
          <div class="controls"><input class="input-small control-text" type="text"></div>
        </div>
        <div class="span8">
          <label class="control-label control-label-auto">labelwwwwww：</label>
          <div class="controls"><input class="input-small control-text" type="text"></div>
        </div>
      </div>
    </form>
  </div>
<?php include("../../templates/control-footer.php"); ?>
