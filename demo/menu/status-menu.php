<?php $title="现有结构样式的菜单"?>
<?php include("../../templates/control-header.php"); ?>
  <!--  构造bootstrap 菜单，使用bootstrap样式 -->
  <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet" type="text/css" /> 
  <link href="http://twitter.github.com/bootstrap/assets/css/docs.css" rel="stylesheet" type="text/css" /> 

    <div class="row">
      <div class="span8 ">
        <div id="sideMenu" class="bs-docs-sidebar">
          
        </div>
      </div>
      
    </div>
    <?php include("../../templates/script.php"); ?>  
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use('bui/menu',function(S,Menu){
    <?php }else if($useLoader) {?>
      BUI.use('bui/menu',function(Menu){
    <?php }else{?> 
        var Menu = BUI.Menu
    <?php }?>  
        var menu = new Menu.Menu({
          render : '#sideMenu',
          elCls : 'nav nav-list bs-docs-sidenav affix',
          //默认的样式
          itemStatusCls : {
            selected : 'active'//选中样式，可以设置其他样式,disabled,hover,focused等等
          },
          autoRender : true,
          children : [
            {href:'#dropdowns',text:'Dropdowns'},
            {href:'#dropdowns',text:'Button groups'},
            {href:'#dropdowns',text:'Button dropdowns'},
            {href:'#dropdowns',text:'Navs'},
            {href:'#dropdowns',text:'Navbar'},
            {href:'#dropdowns',text:'Breadcrumbs'}
          ],
          //默认模板
          itemTpl : '<a href="{href}"><i class="icon-chevron-right"></i>{text}</a>'
        });
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>