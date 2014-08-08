<?php $title="兼容Kissy"?>
<?php include("../templates/header.php"); ?>
<style type="text/css">
  .col.sidebar{
    width: 0;
  }
  .col.main{
    width: 100%;
  }
  .main-section{
    padding:0;
  }
</style>
<div class="start">
  <h3 class="start-title">兼容KISSY</h3>
  <div>
    <p>
      <h2>为什么要兼容KISSY？</h2>
    </p>
    
    <ol>
      <li>使用KISSY框架的项目，可以使用BUI</li>
      <li>KISSY的选择器几乎等同于jQuery,兼容成本低</li>
    </ol>
    <h2>引入KISSY和适配文件</h2>
    <p>由于控件库使用的是jQuery的语法，所以我们添加了一个适配文件，将kissy不支持的jQuery方法做了兼容</p>
    <pre class="prettyprint linenums">
&lt;script src="http://a.tbcdn.cn/s/kissy/1.3.0/kissy-min.js"&gt;&lt;/script&gt;
&lt;script src="http://g.tbcdn.cn/fi/bui/adapter.js"&gt;&lt;/script&gt;
    </pre>
    <p>然后你就可以引入BUI了</p>
    <pre class="prettyprint linenums">
&lt;script src="http://g.tbcdn.cn/fi/bui/seed-min.js"&gt;&lt;/script&gt;
    </pre>
    <p>具体示例请参看:<a href="../demo/loader.php#loader/kissy.php">kissy加载BUI</a></p>
  </div>
</div>
<script type="text/javascript">
  $(function () {
    prettyPrint();
  });
</script>
<?php include("../templates/footer.php"); ?>