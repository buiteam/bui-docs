<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8 well" title="控件A" id="c1" data-a="property a">
        
      </div>
     
    </div>
    <p id="log">
        
    </p>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
      //创建新的类
      var A = BUI.Component.Controller.extend({

      },{
        ATTRS : {
          a : { //属性a
            value : 'default a'
          }
        }
      },{
        xclass : 'a'
      });

      var a = new A({
        srcNode : '#c1',
        height:100
      });
      a.render();
      $('#log').text('a : ' + a.get('a') + ';id : ' + a.get('id') + ';title : ' + a.get('title'));
    </script>
<?php include("../../templates/control-footer.php"); ?>

