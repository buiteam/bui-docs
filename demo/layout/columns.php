<?php $title="列布局"?>
<?php include("../../templates/control-header.php"); ?>
<link rel="stylesheet" href="http://g.tbcdn.cn/fi/bui/css/layout-min.css">
<style type="text/css">
  

  .x-layout-column{
    float: left;
  }
</style>
    <div class="detail-section">  
      <h2>列布局</h2>
      <div class="row">
        <div id="J_Layout" class="span16">
          
        </div>
      </div>
     
    </div>
    
    <?php include("../../templates/script.php"); ?>
  <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/layout'],function (S,Layout){
    <?php }else{?>
    BUI.use(['bui/layout'],function (Layout) {
    <?php } ?>
        /**
         * 列布局中，默认状态下，一项一项的逐次放到一个列中，
         * 但是也可以通过 col : 2，这类的写法指定到某一列中
         */
        var layout = new Layout.Columns({
          columns : 4
        }),
        control = new BUI.Component.Controller({
          width:880,
          render : '#J_Layout',
          elCls : 'layout-test',
          defaultChildCfg : {
            xclass : 'controller',
            tpl : '<img src="{src}"><p>{info}</p>'
          },
          children : [
            {
              src : 'http://img.taobaocdn.com/bao/uploaded/i0/335916232/T1nHhVXudXXXaH.X6X.JPEG_210x1000.jpg',
              info : '有图有真相'
            },
            {
              src : 'http://img.taobaocdn.com/bao/uploaded/i2/334181946/T1J3RPXBBhXXaH.X6X.JPEG_210x1000.jpg',
              info : '质量很好哦.但是我170.袜子有些短了.还是很喜欢.'
            },
            {
              src : 'http://img.taobaocdn.com/bao/uploaded/i0/333597932/T1XWdDXwlhXXaH.X6X.JPEG_210x1000.jpg',
              info : '很好看'
            },{
              src : 'http://img.taobaocdn.com/bao/uploaded/i2/18046020947117284/T2kovAXXlaXXXXXXXX_!!573648046-0-shop_backyard.jpg_210x1000.jpg',
              info : '果儿是缪诗的忠实粉丝^_^'
            },{
              src : 'http://img.taobaocdn.com/bao/uploaded/i1/334778049/T1gsxGXC0hXXaH.X6X.JPEG_210x1000.jpg',
              info : '本着对广大姐妹们负责的态度我是先穿过再来评价的，整体感觉非常令人满意，聚拢的效果很好，码子很标准，戴的很舒服。面料做工等方面也不错。全五分，下次还会光顾'
            },{
              src : 'http://img.taobaocdn.com/bao/uploaded/i1/333460713/T1E6RPXExcXXaH.X6X.JPEG_210x1000.jpg',
              info : '整体来说还是不错的'
            },
            {
              src : 'http://img.taobaocdn.com/bao/uploaded/i0/335916232/T1nHhVXudXXXaH.X6X.JPEG_210x1000.jpg',
              info : '有图有真相'
            },
            {
              src : 'http://img.taobaocdn.com/bao/uploaded/i2/334181946/T1J3RPXBBhXXaH.X6X.JPEG_210x1000.jpg',
              info : '质量很好哦.但是我170.袜子有些短了.还是很喜欢.'
            },
            {
              src : 'http://img.taobaocdn.com/bao/uploaded/i0/333597932/T1XWdDXwlhXXaH.X6X.JPEG_210x1000.jpg',
              info : '很好看'
            },{
              src : 'http://img.taobaocdn.com/bao/uploaded/i2/18046020947117284/T2kovAXXlaXXXXXXXX_!!573648046-0-shop_backyard.jpg_210x1000.jpg',
              info : '果儿是缪诗的忠实粉丝^_^'
            },{
              src : 'http://img.taobaocdn.com/bao/uploaded/i1/334778049/T1gsxGXC0hXXaH.X6X.JPEG_210x1000.jpg',
              info : '本着对广大姐妹们负责的态度我是先穿过再来评价的，整体感觉非常令人满意，聚拢的效果很好，码子很标准，戴的很舒服。面料做工等方面也不错。全五分，下次还会光顾'
            },{
              src : 'http://img.taobaocdn.com/bao/uploaded/i1/333460713/T1E6RPXExcXXaH.X6X.JPEG_210x1000.jpg',
              info : '整体来说还是不错的'
            }
          ],
          plugins : [layout]
      });

      control.render();
    });
  </script>
<?php include("../../templates/control-footer.php"); ?>