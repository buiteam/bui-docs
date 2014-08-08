<?php $title="自定义按钮"?>
<?php include("../../templates/control-header.php"); ?>
    <style>
      .cutom {
        padding: 5px;
        background-color: #efefef;
      }
    </style>
    <div class="row">
      <p class="span8" >Tight pants next level keffiyeh <a href="#" >you probably</a> haven't heard <a href="#">of them</a>. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#">have a</a> terry richardson vinyl chambray. Beard stumptown, <a href="#" >cardigans banh</a> mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" >twitter handle</a> <a href="#" >freegan cred</a> raw denim single-origin<a href="#">coffee viral</a>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
  <?php if($useKissy) {?>
  KISSY.use('bui/overlay',function(S,Overlay){
  <?php }else if($useLoader) {?>
  BUI.use('bui/overlay',function(Overlay){
  <?php }else{?>
      var Overlay = BUI.Overlay
  <?php }?>
    //点击#btn，显示overlay
     var overlay = new Overlay.Overlay({ //移动到#t1时显示，移动出#t1,overlay之外控件隐藏
       trigger : 'a',
       autoHide : true,
       delegateTigger : true,
       align : {
        points : ['tr','tl'], //对齐方式
        offset : [5,5] //偏移量
       },
       elCls : 'bordered cutom',
       triggerEvent :'mouseover', //mouseover 或者 click
       autoHideType : 'leave',
       content : '悬浮内容'
      });
    overlay.render(); 
  <?php if($useLoader) {?>
  });
  <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>