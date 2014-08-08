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
      <p>单,双,三屏对比. 拖放,缩放,旋转.</p>
      <ol>
        <li>在非IE下能全屏`快捷键g`</li>
        <li>数字键盘123切换3种模式,tab切换激活窗口;</li>
        <li>a->上一张;</li>
        <li>d->下一张;</li>
        <li>w->放大(滚轮也可以);</li>
        <li>s->缩小(滚轮也可以);</li>
        <li>q->左旋;</li>
        <li>e->右旋;</li>
        <li>r->重置状态;</li>
        <li>f->自动切换适应窗口or原始大小;</li>
      </ol>
    </div>
    <div class="span12">
      <h2>网址和下载</h2>
      <p><a href="http://fangk.github.io/imgview/" target="_blank">站点地址</a></p>
      <p><a href="https://github.com/fangk/imgview.git" target="_blank">源码github</a></p>
      <p><a href="../download.php?fileid=imageview">下载(<?php echo getCount("../download/count.json","imageview")?>次)</a></p>
    </div>
  </div>
  <!-- <div class="row">
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
  </div> -->
<?php  include("../templates/footer.php"); ?>
