
<?php if(isset($useKissy) && $useKissy) {?>
  <script src="http://g.tbcdn.cn/kissy/k/1.4.2/seed.js"></script>
  <script src="<?php echo $assets; ?>/adapter.js"></script>
<?php }else if(isset($useBui) && $useBui) {?>
  <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
  <script src="<?php echo $assets; ?>/bui-min.js"></script>
<?php }else if(isset($useSeed) && $useSeed) {?>
  <!-- 使用seajs方式 -->
  <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
  <script src="<?php echo $assets; ?>/seed.js"></script>
<?php } else{?>

  <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
  <script src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"></script>
  <script src="<?php echo $assets; ?>/config.js"></script>
<?php } ?>
