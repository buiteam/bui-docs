<?php $title="表单字段的栅格布局（行模式）"?>
<?php include("../../templates/control-header.php"); ?>

  <div class="row">
    <div class="span24 doc-content">
      <form class="form-horizontal">
        <div class="row show-grid">
          <div class="span8">
            <label class="control-label">label：</label>
            <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>
          <div class="span8">
            <label class="control-label">label：</label>
            <div class="controls"><input class="input-small control-text" type="text"></div>
          </div>
          <div class="span8">
            <label class="control-label">label：</label>
            <div class="controls"><select class="input-normal"></select></div>
          </div>
        </div>
        <div class="row show-grid">
          <div class="span16">
            <label class="control-label">label：</label>
            <div class="controls"><input class="input-large control-text" type="text"></div>
          </div>
          <div class="span8">
            <label class="control-label">label：</label>
            <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>
        </div>
        <div class="row show-grid">
          <div class="span8">
            <label class="control-label">label：</label>
            <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>
          <div class="span16">
            <label class="control-label">label：</label>
            <div class="controls">
              <input class="input-normal control-text" type="text"><label> - </label><input class="input-normal control-text" type="text">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
 

<?php include("../../templates/control-footer.php"); ?>
