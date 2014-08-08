<?php $page="apps"?>
<?php $title="BUI 文档库"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<?php include("../templates/wangwang.php"); ?>
  <div class="page-header">
    <h1>BUI 文档库</h1>
  </div>
  <div class="row">
    <div class="span12">
      <h2>简介</h2>
      <p>利用BUI框架搭建了BUI的文档库，有以下特点：</p>
      <ol>
        <li>方便灵活的菜单和列表</li>
        <li>功能强大的显示Demo和代码</li>
        <li>丰富的文档</li>
      </ol>
    </div>
    <div class="span12">
      <h2>网址和下载</h2>
      <p><a href="../index.php">站点地址</a></p>
      <p><a href="../download.php?filename=archive/bui-docs.rar&&fileid=docs">下载(<?php echo getCount("../download/count.json","docs")?>次)</a></p>
    </div>
  </div>
<?php  include("../templates/footer.php"); ?>