<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8 bordered" id="c1">
        
      </div>
     
    </div>
    <p>
        <button id="btn" class="button">重新加载</button>
    </p>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    BUI.use('bui/mask',function () {
      // body...
    
      //创建新的类
      var A = BUI.Component.Controller.extend({

      },{
        ATTRS : {
          defaultLoaderCfg : {
            value : {
              property: 'content',  //加载回来的值作为控件的哪个属性
              autoLoad: true //是否生成的时候自动加载
            }
          }
        }
      },{
        xclass : 'a'
      });

      var a = new A({
        render : '#c1',
        height : 100,
        loader : {
          url : '../dialog/data/text.php', //路径
          params : {a : '0'}, //请求的参数
          loadMask : true //是否显示屏蔽层
        }
      });
      a.render();

      $('#btn').on('click',function(){
        a.get('loader').load({a : 'a',b : 'b'}); //可以附加参数
      });
    });
    </script>
<?php include("../../templates/control-footer.php"); ?>

