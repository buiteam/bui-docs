<?php $title="表单字段的栅格布局（列模式）"?>
<?php include("../../templates/control-header.php"); ?>

  <div class="doc-content">
    <form class="form-horizontal">
      <div class="row show-grid">
        <div class="span8">
          <div class="control-group">
             <label class="control-label">label：</label>
             <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>
          <div class="control-group">
             <label class="control-label">label：</label>
             <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>
          <div class="control-group">
             <label class="control-label">label：</label>
             <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>
        </div>
        <div class="span8">
          <div class="control-group">
             <label class="control-label">label：</label>
             <div class="controls control-row4">
              <textarea></textarea>
             </div>
          </div>
          <div class="control-group">
             <label class="control-label">label：</label>
             <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>
          
        </div>
      </div>    
    </form>
  </div>
 

<?php include("../../templates/control-footer.php"); ?>
