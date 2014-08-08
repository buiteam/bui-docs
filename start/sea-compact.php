<?php $title="兼容seajs"?>
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
  <h3 class="start-title">兼容seajs</h3>
  <div>
    <p>
      <h2>为什么要兼容seajs？</h2>
    </p>
    <ol>
      <li>BUI的loader是基于seajs的，兼容不需要成本</li>
      <li>seajs的社区非常大，可以方便的使用seajs的控件</li>
      <li>提供使用seajs的项目使用BUI的便利</li>
    </ol>
    <h2>引入seajs</h2>
    <p>由于在BUI的seed.js和bui.js里面已经集成了seajs，如果是单独引入seajs时，不需要引入seed.js或者bui.js,直接使用seajs的语法引入bui各个模块即可</p>
    <h3>引入seajs</h3>
    <pre class="prettyprint linenums">
&lt;script src="https://a.alipayobjects.com/seajs/1.3.1/sea.js "&gt;&lt;/script&gt;
    </pre>
    <h3>配置BUI的路径</h3>
    <pre class="prettyprint linenums">
seajs.config({
  alias : {
    "bui" : "http://g.tbcdn.cn/fi/bui/"
  }
});
    </pre>
    <h3>使用BUI控件</h3>
    <pre class="prettyprint linenums">
    //使用日历控件
    seajs.use('bui/calendar',function(Calendar){
      var datepicker = new Calendar.DatePicker({
          trigger:'.calendar',
          autoRender : true
        });
    });
    </pre>
    <p>具体示例请参看:<a href="../demo/loader.php#loader/seajs.php">seajs加载BUI</a></p>
  </div>
</div>
<script type="text/javascript">
  $(function () {
    prettyPrint();
  });
</script>
<?php include("../templates/footer.php"); ?>