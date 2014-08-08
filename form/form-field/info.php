<?php $title="表单中显示详情信息"?>
<?php include("../../templates/control-header.php"); ?>
  <div class="doc-content">
    <form class="form-horizontal">
      <div class="control-group">
          <label class="control-label"><s>*</s>任务责任人：</label>
          <div class="controls">
            <button class="button button-small" type="button">选择</button>
          </div>
      </div>
      <div class="row">
        <div class="span5 offset3">
          <div class="detail-row">
            <label>账户：</label><span class="detail-text">444343343</span>
          </div>
          <div class="detail-row">
            <label>姓名：</label><span class="detail-text">赵三</span>
          </div>
          <div class="detail-row">
            <label>部门：</label><span class="detail-text">服务行业</span>
          </div>
        </div>
      </div> 
    </form>
  </div>
<?php include("../../templates/control-footer.php"); ?>
