<?php $page="apps"?>
<?php $title="后台系统"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<?php include("../templates/wangwang.php"); ?>
  <div class="page-header">
    <h1>后台系统</h1>
  </div>
  <div class="row">
    <div class="span12">
      <h2>简介</h2>
      <p>基于良无限后台系统使用BUI搭建的后台框架有以下特点：</p>
      <ol>
        <li>灵活方便的菜单系统，功能强大的标签</li>
        <li>集成了大量的业务实践和前端解决方案</li>
        <li>精细的表单页、搜索页和详情页</li>
        <li>丰富的文档</li>
      </ol>
    </div>
    <div class="span12">
      <h2>网址和下载</h2>
      <p><a href="../apps/default/main.html">站点地址</a></p>
      <p><a href="https://github.com/dxq613/bui-default" target="_blank">源码github</a></p>
      <p><a href="../download.php?fileid=default">下载(<?php echo getCount("../download/count.json","default")?>次)</a></p>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <h2>出现的Bug</h2>
      <p>目前的版本是由线上使用的项目修改而来，在创建过程中可能会引入样式上的Bug</p>
      <p>请去git hub 中提交错误，我们会持续改进，下面是发现的一些Bug，这些Bug已经在打包文件中修复</p>
      <ol>
        <li>ie8下一级类目不透明，由于main.css中的ie透明度<code>Alpha</code>单词错误！</li>
        <li>tab 菜单右键显示时始终显示在同一位置！</li>
        <li>一级导航类目过多时，根据分辨率在最后一个类目上出现下拉菜单！</li>
        <li>出现下拉菜单时选择时出现bug！</li>
        <li>刷新标签ie7,8下出错！</li>
        <li>增加配置标签不可关闭功能！</li>
      </ol>
    </div>
  </div>
<?php  include("../templates/footer.php"); ?>