<?php $title="共用的提示信息"?>
<?php include("../../templates/control-header.php"); ?>
<style type="text/css">
  /** 自定义提示样式**/
  .custom{
    background-color: #000;
    border:1px solid #ddd;
    padding:10px;
    color: #fff;
    border-radius: 5px;
    word-wrap: break-word;
    max-width: 250px;
  }

.custom[class^="x-align-top"],
.custom[class*=" x-align-top"] .x-align-arrow {
  border-top:9px solid #000;
}
.custom.x-align-right .x-align-arrow {
  border-right:9px solid #000;
}
.custom.x-align-left .x-align-arrow {
  border-left:9px solid #000;
}
.custom[class^="x-align-bottom"],
.custom[class*=" x-align-bottom"] .x-align-arrow {
  border-bottom:9px solid #000;
}

.panel{
  background: #fff;
}
</style>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section">  
      <h2>提示信息</h2>
      <div class="row">
        <div class="span16 well">
          <h3>自定义黑色提示</h3>
          <p id="t1" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" title="Default tooltip">you probably</a> haven't heard <a href="#" data-align="top-left" title="top left tip">of them</a>. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-align="left" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, <a href="#" data-align="top-right" title="top right tip">cardigans banh</a> mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-align="right" title="A much longer tooltip belongs right here to demonstrate the max-width we apply.">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-align="right" title="The right tip!">twitter handle</a> <a href="#" data-align="bottom-left" title="bottom left tip">freegan cred</a> raw denim single-origin<a href="#" data-align="bottom-right" title="bottom right tip">coffee viral</a>.
          </p>
        </div>
        <div class="span16 well">
          <h2>直接使用<a title="面板" href="http://www.builive.com/base/panel.php#panel/base.php">panel</a>样式</h2>
          <p id="t2" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" title="Default tooltip">you probably</a> haven't heard <a href="#" data-align="top-left" title="top left tip">of them</a>. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-align="left" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, <a href="#" data-align="top-right" title="top right tip">cardigans banh</a> mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-align="right" title="A much longer tooltip belongs right<br> here to demonstrate the max-width we apply.">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-align="right" title="The right tip!">twitter handle</a> <a href="#" data-align="bottom-left" title="bottom left tip">freegan cred</a> raw denim single-origin<a href="#" data-align="bottom-right" title="bottom right tip">coffee viral</a>.
          </p>
        </div>
      </div>
      <h2>显示复杂的title</h2>
      <div class="row">
        <div class="span12">
          
        </div>
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use('bui/tooltip,sizzle',function (S,Tooltip){
    <?php }else{?>
    BUI.use('bui/tooltip',function (Tooltip) {
    <?php } ?>

      //不使用模板的，左侧显示
      var tips = new Tooltip.Tips({
        tip : {
          trigger : '#t1 a', //出现此样式的元素显示tip
          alignType : 'top', //默认方向
          arrowTpl : '<span class="x-align-arrow"></span>',
          elCls : 'custom',
          offset : 10 //距离左边的距离
        }
      });
      tips.render();

      //不使用模板的，左侧显示
      var tips1 = new Tooltip.Tips({
        tip : {
          trigger : '#t2 a', //出现此样式的元素显示tip
          alignType : 'top', //默认方向
          elCls : 'panel',

          titleTpl : '<div class="panel-header">\
                        <h3>提示标题</h3>\
                      </div>\
                      <div class="panel-body">\
                        <p>{title}</p>\
                      </div>',
          offset : 10 //距离左边的距离
        }
      });
      tips1.render();

    });
  </script>
<?php include("../../templates/control-footer.php"); ?>