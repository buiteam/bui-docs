<?php $title="共用的提示信息"?>
<?php include("../../templates/control-header.php"); ?>
<style type="text/css">
  /** 自定义提示样式**/
  .custom{
    background-color: #fff;
    border:1px solid #ddd;
    padding:10px;
    word-wrap: break-word;
  }

  .tip1{
    max-width: 200px;
  }
</style>
  <link href="../../assets/code/docs.css" rel="stylesheet" type="text/css" />
    <div class="detail-section">  
      <h3>提示信息</h3>
      <div class="row">
        <div class="span8 well">
          <p id="t1" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" title="Default tooltip">you probably</a> haven't heard <a href="#" data-align="top-left" title="top left tip">of them</a>. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-align="left" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, <a href="#" data-align="top-right" title="top right tip">cardigans banh</a> mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-align="right" title="A much longer tooltip belongs right here to demonstrate the max-width we apply.">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-align="right" title="The right tip!">twitter handle</a> <a href="#" data-align="bottom-left" title="bottom left tip">freegan cred</a> raw denim single-origin<a href="#" data-align="bottom-right" title="bottom right tip">coffee viral</a>.
          </p>
        </div>
        <div class="span8 well">
          <p id="t2" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" title="Default tooltip">you probably</a> haven't heard <a href="#" data-align="top-left" title="top left tip">of them</a>. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-align="left" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, <a href="#" data-align="top-right" title="top right tip">cardigans banh</a> mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-align="right" title="A much longer tooltip belongs right here to demonstrate the max-width we apply.">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-align="right" title="The right tip!">twitter handle</a> <a href="#" data-align="bottom-left" title="bottom left tip">freegan cred</a> raw denim single-origin<a href="#" data-align="bottom-right" title="bottom right tip">coffee viral</a>.
          </p>
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
          elCls : 'tips tips-no-icon tip1',
          offset : 10 //距离左边的距离
        }
      });
      tips.render();

      //不使用模板的，左侧显示
      var tips2 = new Tooltip.Tips({
        tip : {
          trigger : '#t2 a', //出现此样式的元素显示tip
          alignType : 'top', //默认方向
          elCls : 'tips  tips-notice',
          titleTpl : '<span class="x-icon x-icon-small x-icon-warning"><i class="icon icon-white icon-volume-up"></i></span><div class="tips-content">{title}</div>',
          offset : 10 //距离左边的距离
        }
      });
      tips2.render();

    });
  </script>
<?php include("../../templates/control-footer.php"); ?>