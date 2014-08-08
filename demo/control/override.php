<?php $title="控件属性覆盖"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8" id="c1"></div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
      //创建基类A
      var A = BUI.Component.Controller.extend({

      },{
        ATTRS : {
          title : {
            value : 'title A'
          },
          info1 : {
            value : {
              a : '1',
              b : '1',
              c : '1'
            }
          },
          info2 : {
            value : {
              a : '1',
              b : '1',
              c : '1'
            }
          }
        }
      },{
        xclass : 'a'
      });
      //创建Mixin B
      var B = function () {
        // body...
      };

      B.ATTRS = {
        title : {
          value : 'title B'
        },
        info1 : {
          value : {
            a : '2',
            b : '2'
          }
        },
        info3 : {
          value : {
            a : '2',
            b : '2',
            c : '2'
          }
        }
      };
      //C继承于A，使用扩展B
      var C = A.extend([B],{
        renderUI : function(){
          var _self = this,
            el = _self.get('el'),
            title = _self.get('title'),
            info1 = _self.get('info1'),
            info2 = _self.get('info2'),
            info3 = _self.get('info3'),
            str;
          str ='title:'+ title + ',<br/>info1:' + BUI.JSON.stringify(info1) + ',<br/> info2:' + BUI.JSON.stringify(info2) + '<br/>info3:' + BUI.JSON.stringify(info3) ;
          el.html(str);
        }
      },{
        ATTRS : {
          title : {
            value : 'title C'
          },
          info1 : {
            value : {
              a : '3'
            }
          },
          info2 : {
            value : {
              a : '3'
            }
          }
        }
      },{
        xclass : 'b'
      });
      //实例化对象
      var c = new C({
        render : '#c1',
        
        info3 : {
          b : 'custom'
        }
      });
      c.render();

    </script>
<?php include("../../templates/control-footer.php"); ?>

