<?php $title="基本的提示信息"?>
<?php include("../../templates/control-header.php"); ?>
<style type="text/css">
  /** 自定义提示样式**/
  .custom{
    background-color: #fff;
    border:1px solid #ddd;
    padding:10px;
    word-wrap: break-word;
  }

  .tips .close-icon{
    position: absolute;
    top:2px;
    right: 2px;
    cursor: pointer;
  }
</style>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section">  
      <h3>提示信息</h3>
      <div class="row">
        <div class="span8 offset3 well">
          <p>
            <a id="t1" href="#">点击出现，点击外面消失</a><br>
          </p>
          <p>
            <a id="t2" href="#">点击出现，关闭按钮</a><br>
          </p>
          
          <p>
            <button id="t3" class="button">点击显示</button>
          </p>
        </div>
      </div>
    </div>
    <div id="tip" class="custom" style="visibility:hidden">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>姓名</th>
              <th>别名</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>张三</td>
              <td>张某某</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>李四</td>
              <td>李证明</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td>王五</td>
              <td>王明</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/tooltip',function (S,Tooltip){
    <?php }else{?>
    BUI.use('bui/tooltip',function (Tooltip) {
    <?php } ?>

      //不使用模板的，左侧显示
      var t1 = new Tooltip.Tip({
        trigger : '#t1',
        alignType : 'top-right', //方向
        offset:10,
        triggerEvent : 'click', //点击出现
        autoHideType : 'click', //消失的方式是点击
        title : '点击出现，点击外面消失',
        elCls : 'tips tips-success',
        titleTpl : '<span class="x-icon x-icon-small x-icon-success"><i class="icon icon-white icon-question"></i></span>\
        <div class="tips-content">{title}</div>'
      });
      t1.render();

      //使用模板右边显示
      var t2 = new Tooltip.Tip({
        trigger : '#t2',
        alignType : 'right',
        triggerEvent : 'click', //点击出现
        autoHide : false, //不自动隐藏
        closeable:true,
        closeTpl : '<span class="close-icon x-icon x-icon-normal x-icon-mini">×</span>',
        offset : 10,
        title : '右边的提示信息',
        elCls : 'tips tips-success',
        titleTpl : '<span class="x-icon x-icon-small x-icon-success"><i class="icon icon-white icon-question"></i></span>\
        <div class="tips-content">{title}</div>'
      });
      t2.render();

      //使用模板上边显示
      var t3 = new Tooltip.Tip({
        //trigger : '#t3', //不设置触发点
        align:{
          node : '#t3'
        },
        alignType : 'top',
        offset : 10,
        triggerEvent : 'click', 
        autoHideType:'click',
        title : '上边的提示信息',
        elCls : 'tips tips-warning',
        titleTpl : '<span class="x-icon x-icon-small x-icon-error"><i class="icon icon-white icon-bell"></i></span>\
        <div class="tips-content">{title}</div>'
      });
      t3.render();

      $('#t3').on('click',function(){
        t3.show();
      });

    });
  </script>
<?php include("../../templates/control-footer.php"); ?>