					
<!-- Footer
	================================================== -->


						</div>
              <!-- Duoshuo Comment BEGIN -->
              <div class="ds-thread"></div>
                <script type="text/javascript">
                var duoshuoQuery = {short_name:"builive"};
                  (function() {
                    var ds = document.createElement('script');
                    ds.type = 'text/javascript';ds.async = true;
                    ds.src = 'http://static.duoshuo.com/embed.js';
                    ds.charset = 'UTF-8';
                    (document.getElementsByTagName('head')[0] 
                    || document.getElementsByTagName('body')[0]).appendChild(ds);
                  })();
                  </script>
                <!-- Duoshuo Comment END -->
<!-- /container -->

					</div>
				</div>
			</div>
		</div>
		<div class="ds-links clearfix">
	          	<div class="ds-links-left"></div>
	          	<div class="ds-links-content clearfix">
	              <a href="http://docs.kissyui.com" style="background-image:url(<?php echo $base; ?>/assets/img/kissylogo.png)" target="_blank"></a>
	            </div>
	  </div>
	</div>
	
	<div id="extrol" class="clearfix">
		<div class="col side">
			<div class="download">
				<a href="<?php echo $base; ?>/download.php?fileid=bui">下载 (<?php echo getCount($base."/download/count.json","bui")?>次)</a>
				<a href="https://github.com/dxq613/bui" title="在此反馈" target="_blank">git hub</a>
			</div>
			<div class="join">
				
			</div>
		</div>
	</div>
<script type="text/javascript">
	BUI.use('bui/menu',function(Menu){
		var width_1 = 1730,
			width_2 = 1565,
			width_3 = 1410;
		if($.browser.msie && ($.browser.version != '9.0')){
			changeLayout();
			$(window).bind('resize',changeLayout);
		}
		function changeLayout(){
			var winWidth = $(window).width(),
				body = $('body');
			if(winWidth <= width_1){
				body.addClass('style-'+width_1);
			}else{
				body.removeClass('style-'+width_1);
			}
			if(winWidth <= width_2){
				body.addClass('style-'+width_2);
			}else{
				body.removeClass('style-'+width_2);
			}
			if(winWidth <= width_3){
				body.addClass('style-'+width_3);
			}else{
				body.removeClass('style-'+width_3);
			}
		}
		var listTpl = '';
		if(typeof(itemsArr) !=="undefined"){
	      var sideBar = new Menu.Menu({
	        render : '.sidebar-section',
	        autoRender : true,
	        elCls : 'clearfix',
	        idField : 'href',
	        children : BUI.cloneObject(itemsArr),
	        itemTpl : '<a href="{href}">{title}</a>'
	      });
	      var curPage = getCurPage();
	      if(curPage){
	        var item = sideBar.getItem(curPage);
	        sideBar.setSelected(item);
	      }
		}
		function getCurPage(){
	        var fullHref = location.href,
	          arr = fullHref.split('#'),
	          dirs = arr[0].split('/');
	        return dirs[dirs.length-1];
	    }
	    
	});
</script>
</body>
</html>
