<?php $page="scaffolding"?>
<?php $title="框架"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
<?php  include("../templates/wangwang.php"); ?>

 <div class="page-header">
    <h1>  页面脚手架 </h1>
	<p>页面脚手架是创建所有页面的基础，拷贝以下代码作为你的页面的初始状态。</p>
 </div>
<?php include("nav.php"); ?>

<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;title&gt;title&lt;/title&gt;
&lt;link href="<?php echo $assets; ?>/css/bs3/dpl.css" rel="stylesheet"&gt;
&lt;link href="<?php echo $assets; ?>/css/bs3/bui.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
 
&lt;script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"&gt;&lt;/script&gt;
&lt;script src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"&gt;&lt;/script&gt;
&lt;script src="http://g.alicdn.com/bui/bui/1.1.10/config.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<script type="text/javascript">
	prettyPrint();
</script>
<?php  include("../templates/footer.php"); ?>
