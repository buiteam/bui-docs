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
</style>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section">  
      <h3>提示信息</h3>
      <div class="row">
        <div class="span8 offset3 well">
          <a id="t1" href="#">左边无样式</a><br>
          <a id="t2" href="#">右边，使用tips-success</a><br>
          <a id="t3" href="#">上边，使用tips-warning</a><br>
          <a id="t4" href="#">下边的提示</a><br>
          <a id="t5" href="#">左上边的提示</a><br>
          <a id="t6" href="#">右上边的提示</a><br>
          <a id="t7" href="#">左下边的提示</a><br>
          <a id="t8" href="#">右下边的提示</a><br>
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
    KISSY.use('bui/tooltip',function (S, Tooltip){
    <?php }else{?>
    BUI.use('bui/tooltip',function (Tooltip) {
    <?php } ?>

      //不使用模板的，左侧显示
      var t1 = new Tooltip.Tip({
        trigger : '#t1',
        alignType : 'left', //方向
        showArrow : false, //不显示箭头
        offset : 5, //距离左边的距离
        title : '无任何样式，<br>左边的提示信息'
      });
      t1.render();

      //使用模板右边显示
      var t2 = new Tooltip.Tip({
        trigger : '#t2',
        alignType : 'right',
        offset : 10,
        title : '右边的提示信息',
        elCls : 'tips tips-success',
        titleTpl : '<span class="x-icon x-icon-small x-icon-success"><i class="icon icon-white icon-question"></i></span>\
        <div class="tips-content">{title}</div>'
      });
      t2.render();

      //使用模板上边显示
      var t3 = new Tooltip.Tip({
        trigger : '#t3',
        alignType : 'top',
        offset : 10,
        title : '上边的提示信息',
        elCls : 'tips tips-warning',
        titleTpl : '<span class="x-icon x-icon-small x-icon-error"><i class="icon icon-white icon-bell"></i></span>\
        <div class="tips-content">{title}</div>'
      });
      t3.render();

      //使用模板下边显示
      var t4 = new Tooltip.Tip({
        trigger : '#t4',
        alignType : 'bottom',
        offset : 10,
        title : '下边的提示信息<br>下边的提示信息',
        elCls : 'tips tips-warning tips-small',
        titleTpl : '<span class="x-icon x-icon-small x-icon-warning"><i class="icon icon-white icon-question"></i></span>\
        <div class="tips-content">{title}</div>'
      });
      t4.render();

      //使用模板左上方显示
      var t5 = new Tooltip.Tip({
        trigger : '#t5',
        alignType : 'top-left',
        offset : 10,
        title : '左上边',
        elCls : 'tips tips-warning tips-small',
        titleTpl : '<span class="x-icon x-icon-small x-icon-warning"><i class="icon icon-white icon-question"></i></span>\
        <div class="tips-content">{title}</div>'
      });
      t5.render();

      //使用模板右上方显示
      var t6 = new Tooltip.Tip({
        trigger : '#t6',
        alignType : 'top-right',
        offset : 10,
        title : {begin : '2010-1-1',end : '2013-2-3'}, //使用复杂的对象
        elCls : 'tips tips-no-icon',
        titleTpl : '<div class="tips-content">起始日期：{begin}<br>结束日期：{end}</div>'
      });
      t6.render();

      //使用模板左下方显示
      var t7 = new Tooltip.Tip({
        trigger : '#t7',
        alignType : 'bottom-left',
        offset : 10,
        width:100,
        title : 'wimaewoawmasifwaofaoewfmasdfjawoeifjawofijasidjfoasdjfaoiwjfaisdfasdfiaoe', //自定义大段文本
        elCls : 'custom',
        titleTpl : '<p>{title}</p>'
      });
      t7.render();

      //使用srcNode形式直接使用DOM显示，显示在右下方
      var t8 = new Tooltip.Tip({
        trigger : '#t8',
        alignType : 'bottom-right',
        offset : 10,
        srcNode : '#tip'
      });
      t8.render();


    });
  </script>
<?php include("../../templates/control-footer.php"); ?>
