<?php $title="表单必填项"?>
<?php include("../../templates/control-header.php"); ?>
 <h2 id="form-star">必填项</h2>
 <p>表单中的必填项使用红色的‘*'标示，在<code>.control-label</code>元素中添加<code>&lt;s&gt;*&lt;/s&gt;</code></p>
  <div class="row">
    <div class="span16 doc-content">
      <form class="form-horizontal well">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label"><s>*</s>供应商编码：</label>
            <div class="controls">
              <input type="text" class="control-text">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label"><s>*</s>供应商编码：</label>
            <div class="controls">
              <input type="text" class="control-text">
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
  </div>
 

<?php include("../../templates/control-footer.php"); ?>
