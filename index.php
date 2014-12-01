<?php $title="快速上手"?>
<?php $base="."?>
<?php include("templates/header.php"); ?>
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
	<h3 class="start-title">BUI快速上手</h3>
	<div class="clearfix">
		<div class="start-container">
			<img src="assets/img/web.png" alt="">
			<div class="entrance web">
				<div class="e-bg"></div>
				<strong>前端用户入口</strong>
			</div>
			<a class="set-lnk" data-loader="true" data-href="start/web-start.php" href="javascript:void(0);">
			</a>
		</div>
		<div class="start-container">
			<img src="assets/img/java.png" alt="">
			<div class="entrance java">
				<div class="e-bg"></div>
				<strong>Java用户入口</strong>
			</div>
			<a class="set-lnk"  data-href="start/java-start.php" href="javascript:void(0);">
			</a>
		</div>
	</div>
	<h3 class="start-title">联系我们</h3>
	<p>论坛：<a href="http://bbs.builive.com">http://bbs.builive.com</a>，旺旺群：778141976（推荐），QQ群：138692365，在每个Demo页面中都有维护人员的旺旺，请及时反馈！</p>
	<p>问题反馈还可以<a href="https://github.com/dxq613/bui" target="_blank">通过github</a>,您也可以<a href="https://github.com/dxq613/bui/fork_select" target="_blank">fork</a>我们，提交自己的代码。</p>
</div>
<script type="text/javascript">
	BUI.use('bui/cookie',function(Cookie){
		var keyLoader = 'useLoader',
			path = 'bui';
		$('.set-lnk').click(function(e){
			var sender = e.target,
				isLoader = $(sender).attr('data-loader'),
				href = $(sender).attr('data-href');
			if(isLoader){
				Cookie.set(keyLoader,isLoader,30,'','/');
			}else{
				Cookie.remove(keyLoader,'','/');
			}
			window.location.href=href;
		});
	});
</script>	


<?php include("templates/footer.php"); ?>
