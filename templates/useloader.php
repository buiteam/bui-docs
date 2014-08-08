<?php if(isset($page) && $page == 'demo')
{
?>
<span class="J_LoaderParam">
  <span class="c-title">[</span>
  <a class="checkbox title-lnk" href="?loader=seajs">
    <input type="checkbox" title="" <?php if($useSeajs) echo "checked";?> />使用seajs
  </a>
  <span class="c-title">]</span>
  <span class="c-title">[</span>
  <a class="checkbox title-lnk" href="?loader=bui">
    <input type="checkbox" title="" <?php if($useBui) echo "checked";?> />使用bui
  </a>
  <span class="c-title">]</span>
  <span class="c-title">[</span>
  <a class="checkbox title-lnk" href="?loader=kissy">
    <input type="checkbox" title="使用kissy作为底层框架" <?php if($useKissy) echo "checked";?> />使用Kissy
  </a>
  <span class="c-title">]</span>
</span>
<?php
  }
?>
