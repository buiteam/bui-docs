<?php $title="控件的宽度"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span12 doc-content">
        <form class="form-horizontal span12 well">
          <div class="control-group">
            <label class="control-label">输入框：</label>
            <div class="controls docs-input-sizes">
              <input type="text" class="input-small control-text" placeholder="input-small">
              <input type="text" class="input-normal control-text" placeholder="input-normal">
              <input type="text" class="input-large control-text" placeholder="input-large">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">选择框：</label>
            <div class="controls  docs-input-sizes">
              <select class="input-small"><option>input-small</option></select>
              <select class="input-normal"><option>input-normal</option></select>
              <select class="input-large"><option>input-large</option></select>
            </div>
          </div>
        
          <div class="control-group">
            <label class="control-label">输入框：</label>
            <div class="controls  docs-input-sizes">
              <input type="text" class="span1 span-width control-text" placeholder="span1">
              <input type="text" class="span2 span-width control-text" placeholder="span2">
              <input type="text" class="span3 span-width control-text" placeholder="span3">
              <input type="text" class="span5 span-width control-text" placeholder="span5">
            </div>
          </div>
        </form>
      </div>
    </div>
<?php include("../../templates/control-footer.php"); ?>
