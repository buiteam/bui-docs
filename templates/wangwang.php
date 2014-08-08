<span >
  <span class="c-title">[</span>
  <label class="checkbox title-lnk"><input type="checkbox" class="chkBootstrap" <?php if($useBs3){echo "checked";} ?> >使用bootstrap3的样式</label>
  <span class="c-title">]</span>
</span>

<span class="contact">
<?php

if(isset($page) && $page == 'chart')
{
?>
<select name="" id="chartThemeChg">
  <option value="">默认样式</option>
  <option value="Chart.Theme.Smooth1">theme1</option>
  <option value="Chart.Theme.Smooth2">theme2</option>
  <option value="Chart.Theme.Smooth3">theme3</option>
  <option value="Chart.Theme.Smooth4">theme4</option>
  <option value="Chart.Theme.Smooth5">theme5</option>
  <option value="Chart.Theme.Smooth6">theme6</option>
  <option value="Chart.Theme.Smooth7">theme7</option>
</select>
<?php
}
?>

	<?php if(isset($wangwang) ){$enWangwang = URLEncode($wangwang);}?>
	<?php echo '<a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid='.$enWangwang.'&siteid=cntaobao&status=2&charset=utf-8"><img border="0" src="http://amos.alicdn.com/realonline.aw?v=2&uid='.$enWangwang.'&site=cntaobao&s=2&charset=utf-8" alt="点击这里给我发消息" />'.$wangwang.'</a>'?>
</span>

<script>
  (function($){
    BUI.use('bui/cookie', function(Cookie){
      $('.chkBootstrap').on('click', function(ev){
        if($(this).attr('checked')){
          Cookie.set('useBs3', 'true', 30, '', '/');
          window.location.reload();
        }
        else{
          Cookie.remove('useBs3','','/');
          window.location.reload();
        }
      })


      var themeCookie = Cookie.get("theme") || 0;
      $("#chartThemeChg").val(themeCookie)
      $("#chartThemeChg").change(function(){
        var value = $(this).val();
        Cookie.set('theme', value, 30, '', '/');
        window.location.reload();
      })
    })
  })(jQuery);
</script>
