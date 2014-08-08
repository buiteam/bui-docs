<?php $title="表单元素的种类"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8 doc-content">
        <form class="form-horizontal well">
          <div class="control-group">
            <label class="control-label">一般输入框：</label>
            <div class="controls"><input class="input-normal control-text" type="text"></div>
          </div>

          <div class="control-group">
            <label class="control-label">选择框：</label>
            <div class="controls"><select><option>请选择</option></select></div>
          </div>

          <div class="control-group">
            <label class="control-label">多行输入框：</label>
            <div class="controls  control-row4"><textarea></textarea></div>
          </div>

          <div class="control-group">
            <label class="control-label">多行选择框：</label>
            <div class="controls control-row4">
              <select multiple="multiple" class="control-row3"><option>请选择1</option><option>请选择2</option></select>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">显示文本：</label>
            <div class="controls"><span class="control-text">文本文本文本</span></div>
          </div>

          <div class="control-group">
            <label class="control-label checkbox">
              <input type="checkbox"> 复选框
            </label>
          </div>

          <div class="control-group">
            <label class="control-label radio">
              <input type="radio"> 单选框
            </label>
          </div>
        </form>
      </div>
    </div>
 

<?php include("../../templates/control-footer.php"); ?>
