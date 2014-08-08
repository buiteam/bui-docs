<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>菜单测试</title>
    <link href="http://a.tbcdn.cn/??p/mall/base/global-v2.css?t=2012103120121020.css" rel="stylesheet">
    <link href="http://a.tbcdn.cn/apps/tmall/fp/2012/css/??common.css,mui.css,header.css,category.css,slide2.css,brand.css,floor.css,layout.css,act.css?t=20121130" rel="stylesheet">

    <style>
      .ks-context-menu{
        position:absolute;
      }
    </style>
  </head>
  <body>
    <div id="J_Category" class="category cateFixed">
        <h2 class="categoryHd">
          <a>所有商品分类</a><s class="j_ExpandCat expandCat selectedCat" title="扩展视图" style="display: inline; "></s><s class="j_SimpleCat simpleCat" title="精简视图" style="display: inline; "></s>
        </h2>
        <div id="tm" class="menu j_Menu">
          <s class="menuMask"></s>
        </div>
      </div>
    <div class="container" style="height:2000px">
      
    </div>
  <div class="hidden">
    <div id="j_Sub">
      
     
    </div>
  </div>
  <?php include("../../templates/script.php"); ?>  
  <?php $useLoader= false ?>
  <script type="text/javascript">
  <?php if($useKissy) {?>
    KISSY.use(['bui/menu','bui/overlay'],function(S,Menu,Overlay){
  <?php }else if($useLoader) {?>
    BUI.use(['bui/menu','bui/overlay'],function(Menu,Overlay){
  <?php }else{?> 
      var Menu = BUI.Menu,
        Overlay = BUI.Overlay;
  <?php }?> 
        var items = <?php include("data/items.php"); ?>  
        //加载类目
        $('#j_Sub').load("data/category.php");

        //初始化菜单项
        $.each(items,function(index,item){
          item.elCls = 'item item' + item.id + ' j_MenuItem'
        });

        var tmenu = new Menu.Menu({
          render : '#tm',
          items : items,
          itemStatusCls : {
            hover:'selected',
            collapsed : 'itemSelected'
          },
          //selectedEvent: 'mouseenter',
          itemTplRender : function(data){
            var subItems = data.subItems,
              arr1 = [],
              append = '',
              arr2 = [];
            if(data.append){
              append = '<a href="'+data.append.href+'">'+data.append.text+'</a>'
            }
            $.each(subItems,function(index,item){

              var cls = (index % 5) == 0 ? 'item-col1' : '',
                str = '<a href="'+item.href+'" target="_blank" class="' + cls + '" data-spm-anchor-id="3.1000473.294515.21">'+item.text+'</a>'
              if(index < 5){
                arr1.push(str);
              }else{
                arr2.push(str);
              }
            });

            var rst = '<h3 class="item-hd item-hd' + data.id + '">'+
                      '<s></s>' + data.title + append +
                    '</h3>' +
                    '<p class="item-col  itemCol1">' + arr1.join('') + '</p>' +
                    '<p class="item-col">' + arr2.join('') + '</p>' +
                    '<s class="menuIcon"></s>';
            return rst;
          }
        });

        tmenu.render();

        var expandEl = $('.j_ExpandCat'),
          simpleEl = $('.j_SimpleCat');
        expandEl.on('click',function(){
          $('.selectedCat').removeClass('selectedCat');
          $(this).addClass('selectedCat');
          var items = tmenu.getItems();
          $.each(items,function(index,item){
            item.set('collapsed',false);
          })
        });

        simpleEl.on('click',function(){
           $('.selectedCat').removeClass('selectedCat');
          $(this).addClass('selectedCat');
          var items = tmenu.getItems();
          $.each(items,function(index,item){
            item.set('collapsed',true);
          })
        });

        var CELL_HEIGHT = 78;
        $(window).on('scroll',function(){
          if(expandEl.hasClass('selectedCat')){
            var top = BUI.scrollTop(),
              items = tmenu.getItems(),
              count = parseInt((top - 30) / CELL_HEIGHT);
            $(items).each(function(index,item){
              if(index < count){
                item.set('collapsed',true);
              }else{
                item.set('collapsed',false);
              }
            });
            if(count >= items.length){
              simpleEl.hide();
              expandEl.hide();
            }else{
              simpleEl.show();
              expandEl.show();
            }
          }
        });

        
      //显示子菜单
      var overlay = new Overlay.Overlay({
        trigger : '.j_MenuItem',
        content : $('#j_Sub'),
        elCls:'subCategory',
        triggerEvent : 'mouseenter',
        triggerHideEvent : 'mouseleave',
        autoHideType:'leave',
        autoHide:true,
        height:450,
        width:755,
        align : {
           points: ['tr','tl'], 
           offset: [-1, -7] 
        }
      });

      overlay.render();

      overlay.on('mouseenter',function(){
        var _self = this,
          curTrigger = _self.get('curTrigger');
          curTrigger.addClass('selected');
      });

      overlay.on('mouseleave',function(){
        var _self = this,
          curTrigger = _self.get('curTrigger');
          curTrigger.removeClass('selected');
      });
  <?php if($useLoader) {?>  
      });
  <?php } ?> 
  </script>
  </body>
</html>