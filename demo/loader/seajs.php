<?php $title="加载seajs"?>
<?php include("../../templates/control-header.php"); ?>
  <h2></h2>
     <form  method="post">
      <h2>选择日期</h2>
      <p>
        <label>选择日期：</label><input type="text" class="calendar" />
      </p>
       <p>
        <label>选择日期：</label><input type="text" class="calendar" />
      </p>

    </form>
  

  <!-- seajs以及插件 -->
  <script charset="utf-8" src="https://a.alipayobjects.com/??seajs/seajs/2.1.1/sea.js,jquery/jquery/1.7.2/jquery.js"></script>
  <!-- seajs config 配置 -->
  <script>
  seajs.config({
    vars: {
      locale: 'zh-cn'
    },
    paths : { //2.0后使用paths
      bui : 'https://s.tbcdn.cn/g/fi/bui'
    },
    map : [
      [/bui\/(.*).js/,'bui/$1-min.js'] //['.js', '-min.js'] ,仅bui目录下使用-min.js,
    ]
  });
  seajs.use("jquery/jquery/1.7.2/jquery", function(jQuery){
    window.$ = window.jQuery = jQuery;
  })
  seajs.use('bui/calendar',function(Calendar){
    var datepicker = new Calendar.DatePicker({
        trigger:'.calendar',
        autoRender : true
    });
  });
  </script>

<?php include("../../templates/control-footer.php"); ?>

