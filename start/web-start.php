<?php $title="快速上手"?>
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
	<div class="start-title">快速上手-前端工程师</div>
	<div>
		<p>
			<h2>BUI是什么？</h2>
		</p>
		<blockquote>
			<ol>
				<li>
					BUI是基于jQuery的UI类库
				</li>
				<li>
					<a href="kissy-compact.php">BUI兼容KISSY</a>
				</li>
				<li>
					<a href="sea-compact.php">BUI兼容seajs</a>
				</li>
			</ol>
		</blockquote>
		<p>
			<h2>BUI包含的模块</h2>
		</p>
		<blockquote>
			<ol>
				<li id="loader">loader: 加载BUI各个模块</li>
				<li id="common">
						common: 包含util类，如<a href="../docs/api/index.html#!/api/BUI.JSON">JSON</a>、<a href="../docs/api/index.html#!/api/BUI.Array">Array</a>、<a href="../docs/api/index.html#!/api/BUI.UA">UA</a>等;包含所有UI控件的基类：<a href="../docs/api/index.html#!/api/BUI.Component.Controller">component</a>
				</li>
				<li>
					
						data: 包含<a href="../docs/api/index.html#!/api/BUI.Data.Store">Store</a>、<a href="../docs/api/index.html#!/api/BUI.Data.Proxy">Proxy</a>等类进行数据加载管理
				</li>
				<li>
					<a href="../demo/calendar.php">
						calendar
					</a>: 日历控件，包含日期、时间和月份选择
				</li>
				<li>
					<a href="../demo/menu.php">
						menu
					</a>: 菜单，可以通过自定义样式和html渲染自定义菜单
				</li>
				<li>
					<a href="../demo/list.php">
						list
					</a>: 列表，可以通过自定义样式和html渲染各种列表
				</li>
				<li>
					overlay: 包括：<a href="../demo/dialog.php">Dialog</a>,<a href="../demo/message.php">Message</a> 等悬浮的元素
				</li>
				<li>
					<a href="../demo/select.php">
						select
					</a>: 包括 Select、Combox和Suggest等选择框
				</li>
				<li>
					<a href="../demo/bar.php">
						toolbar
					</a>: 包括 一般的bar、分页栏、数字分页栏等工具栏
				</li>
				<li>
					grid: 表格，包括<a href="../demo/simple-grid.php">SimpleGrid</a>,<a href="../demo/simple-grid.php">Grid</a>以及一系列Plugins
				</li>
				<li>
					<a href="../demo/tab.php">
						tab
					</a>: 切换标签，可以用于切换内容和导航
				</li>
			</ol>
		</blockquote>
		<p>
			<h2>加载BUI</h2>
		</p>
		<div class="row">
			<div class="span12">
				<h3>引入BUI的 seed.js</h3>
				<p>你可以仅仅引入BUI的 seed.js，文件中包含<a href="#loader">loader</a>和<a href="#common">common</a>，此时其他模块使用<code>BUI.use</code>引入</p>
				<pre class="well">
&lt;script src="http://g.tbcdn.cn/fi/bui/seed-min.js"&gt;&lt;/script&gt;
				</pre>
			</div>
			<div class="span12">
				<h3>引入BUI全部模块</h3>
				<p>你也可以使用全部打包好的bui.js，所有的模块都包含在此文件中，你可以使用<code>BUI.use</code>引入文件</p>
				<pre class="well">
&lt;script src="http://g.tbcdn.cn/fi/bui/bui-min.js"&gt;&lt;/script&gt;
				</pre>
			</div>
		</div>
		<div class="row">
			<div class="span12">
			<h3>加载单个JS文件</h3>
				<pre class="well">
BUI.use('bui/grid',function(Grid){

});
				</pre>	
			</div>
			<div class="span12">
				<h3>加载多个JS文件</h3>
				<pre  class="well">
BUI.use(['bui/grid','bui/data'],function(Grid,Data){

});
				</pre>	
			</div>
		</div>
			
			
		<p>
			<h2>BUI简单示例</h2>
		</p>
		<blockquote>
			<ul>
				<li class="clearfix">
					<ol>
						<li><a class="J_List" href="javascript:void(0);" data-href="../demo/list/simple-list2.php">自定义列表</a></li>
						<li><a class="J_List" href="javascript:void(0);" data-href="../demo/list/simple-list1.php">普通列表</a></li>
					</ol>
					<div class="demo-show hide">
						<div id="tab"></div>
						<div id="log" class="code-container bordered ">
							<iframe id="J_DemoList" src="" width="100%" height="100%" frameborder="0">
							</iframe>
							<pre id="J_Src" class="prettyprint linenums"></pre>
						</div>
					</div>	
				</li>
			</ul>
		</blockquote>
		
	</div>
</div>
<script type="text/javascript">
BUI.use('bui/tab',function(Tab){
	prettyPrint();

	var demoEl = $('#J_DemoList');
	$('.J_List').click(function(e){
		$('.demo-show').removeClass('hide');
		resetDemo(e.target);
	});

	demoEl.on('load',function(){
      var frameDoc = demoEl[0].contentWindow.document,
        docBody = frameDoc.body||frameDoc.documentElement;

      var docContent = $(docBody).find('script').last();
      if(docContent.length){
        setSrc(docContent.html());
      } 
    });
	function resetDemo (obj){
		var href = $(obj).attr('data-href');
		if(href){
			href = href + '?useLoader=true'
			demoEl.attr('src',href);
			//fetchSrc(href);
		}
	}
	function setSrc(data){
      $('#J_Src').text(data);
      prettyPrint();
    }
    function fetchSrc (src) {
      $.get(src,function (data) {
        setSrc(data);
      })
    }
	 var tab = new Tab.TabPanel({
		render : '#tab',
		elCls : 'nav-tabs',
		panelContainer : '#log',
		autoRender: true,
		children:[
			{text:'Demo',value:0},
			{text:'代码',value:1}
		]
	});
	//初始化选中状态
	tab.setSelected(tab.getItemAt(0));
});
	
</script>


<?php include("../templates/footer.php"); ?>