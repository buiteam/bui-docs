<?php $title="自定义表单控件"?>
<?php include("../../templates/control-header.php"); ?>
  <div class="doc-content">
    <form class="form-horizontal well">
      <div class="row">
        <div class="span8">
          <label class="control-label">日期控件：</label>
          <div class="controls">
            <input type="text" class="calendar">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span8">
          <label class="control-label">日期时间控件：</label>
          <div class="controls">
            <input type="text" class="calendar calendar-time">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="span12">
          <label class="control-label">起始日期：</label>
          <div class="controls">
            <input type="text" class="calendar"><span>&nbsp;-&nbsp;</span><input type="text" class="calendar">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="span12">
          <label class="control-label">起始日期：</label>
          <div class="controls">
            <input type="text" class="calendar calendar-time"><span>&nbsp;-&nbsp;</span><input type="text" class="calendar calendar-time">
          </div>
        </div>
      </div>
    </form>
  </div>

<?php include("../../templates/control-footer.php"); ?>
