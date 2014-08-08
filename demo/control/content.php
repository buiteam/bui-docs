<?php $title="控件继承"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span8" id="c1"></div>
    </div>
    <div class="row">
      <div class="span16 well">
        <label>title:</label><input type="text" id="J_Title" />
        <label>body:</label><input type="text" id="J_Body" />
        <button class="button button-primary" id="J_Btn">设置</button>
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">

      //继承出最简单的类
      var AView = BUI.Component.View.extend({

        //设置title
        _uiSetTitle : function(v){
          var _self = this,
            el = _self.get('el');
          el.find('.panel-header').html(v);
        },
        _uiSetBodyText : function(v){
          var _self = this,
            el = _self.get('el');
          el.find('.panel-body').html(v);
        }
      },{
        ATTRS : {
          title : {},
          bodyText : {}
        }
      },{
        xclass : 'a-view'
      });

      //继承出最简单的类，实现title、bodyText功能
      var A = BUI.Component.Controller.extend({
        //设置标题
        _uiSetTitle : function (v) {
          var _self = this,
            bodyText = _self.get('bodyText');
          if(!bodyText){
            _self.set('bodyText','设置了标题'+ v + '，但是未设置内容');
          }
        }
      },{
        ATTRS : {
          /**
           * 标题
           * @type {String}
           */
          title : {
            view : true
          },
          /**
           * 内容部分
           * @type {String}
           */
          bodyText : {
            view : true
          },
          /**
           * 页面模板
           * @type {String}
           */
          tpl : {
            value : '<div class="panel"><div class="panel-header"></div><div class="panel-body"></div></div>'
          },
          xview : {
            value : AView
          }
        }
      },{
        xclass : 'a'
      });

      var a = new A({
        render : '#c1',
        title : '这是定义的title',
        bodyText : '这是定义的bodyText'
      });

      a.render();

      $('#J_Btn').on('click',function(ev){
        var title = $('#J_Title').val(),
          body = $('#J_Body').val();
        a.set('bodyText',body);
        a.set('title',title);
      });
    </script>
<?php include("../../templates/control-footer.php"); ?>

