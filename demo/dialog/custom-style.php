<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>自定义样式窗口</title>
<link href="http://g.tbcdn.cn/fi/bui/css/dpl-min.css?t=201307291544" rel="stylesheet"> 
<link href="http://g.tbcdn.cn/fi/bui/css/bui-min.css?t=201307291544" rel="stylesheet">
 
<!-- 此文件为了显示Demo样式，项目中不需要引入 -->
<link href="../../assets/code/demo.css" rel="stylesheet">
</head>
<body>
 
  <div class="demo-content">
    <style type="text/css">
      .custom-dialog{
        border: none;
        background-color: transparent;
        -webkit-box-shadow : none;
        box-shadow : none;
      }

      .custom-dialog .bui-stdmod-header,.custom-dialog .bui-stdmod-footer{
        display: none;
      }
     
    </style>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    <!--t为时间戳-->
    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
     <script src="http://g.tbcdn.cn/fi/bui/bui-min.js?t=201310311434"></script>
    <!--<script src="http://localhost/bui/build/bui.js"></script>-->
<!-- script start-->  
    <script type="text/javascript">
          var Overlay = BUI.Overlay
          var dialog = new Overlay.Dialog({
            width:500,
            height:250,
            elCls : 'custom-dialog',
            bodyContent:'<p>这是一个模态窗口,修改dialog样式</p>',
            buttons : []
          });
        dialog.show();
        $('#btnShow').on('click',function () {
          dialog.show();
        });
  </script>
<!-- script end -->
  </div>
</body>
</html>