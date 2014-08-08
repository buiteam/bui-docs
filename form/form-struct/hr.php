<?php $title="表单分割线"?>
<?php include("../../templates/control-header.php"); ?>
<div class="doc-content">
  <form class="form-horizontal">
    <h3>供应商信息</h3>
    <div class="row">
      <div class="control-group span8">
        <label class="control-label">供应商编码：</label>
        <div class="controls">
          <input type="text" class="control-text">
        </div>
      </div>
      <div class="control-group span8">
        <label class="control-label">供应商编码：</label>
        <div class="controls">
          <input type="text" class="control-text">
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="control-group span8">
        <label class="control-label">商家类型：</label>
        <div class="controls">
          <input type="text" class="control-text">
        </div>
      </div>
      <div class="control-group span8">
        <label class="control-label">商家编码：</label>
        <div class="controls">
          <input type="text" class="control-text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="control-group span8">
        <label class="control-label">详情信息：</label>
        <div class="controls control-row4">
          <textarea type="text"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-actions offset3">
        <button type="submit" class="button button-primary">保存</button>
        <button type="reset" class="button">重置</button>
      </div>
    </div>
  </form>
</div>

<?php include("../../templates/control-footer.php"); ?>
