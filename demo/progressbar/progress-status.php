<?php $title="不同状态的进度条"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8">
        <h2>不同状态的进度条</h2>
        <h3>默认</h3>
        <div class="progress progress-striped">
          <div class="bar" style="width: 10%;"></div>
        </div>
        <h3>信息</h3>
        <div class="progress progress-striped">
          <div class="bar bar-info" style="width: 20%;"></div>
        </div>
        <h3>成功</h3>
        <div class="progress progress-striped">
          <div class="bar bar-success" style="width: 30%;"></div>
        </div>
        <h3>警示</h3>
        <div class="progress progress-striped">
          <div class="bar bar-warning" style="width: 40%;"></div>
        </div>
        <h3>危险</h3>
        <div class="progress progress-striped">
          <div class="bar bar-danger" style="width: 50%;"></div>
        </div>
      </div>
    </div>
<?php include("../../templates/control-footer.php"); ?>

