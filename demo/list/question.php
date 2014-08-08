<?php $title="标准列表"?>
<?php include("../../templates/control-header.php"); ?>
  <link href="../../assets/code/docs.css" rel="stylesheet">
    <div id="list1"></div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
      KISSY.use(['bui/list'],function(S,List){
    <?php }else if($useLoader) {?>
      BUI.use(['bui/list'],function(List){
    <?php }else{?> 
        var List = BUI.List
    <?php }?>  
      var items = [{
          title: '2013',
          dateTime: '2013年',
          Summary: '范德萨范德萨阿凡达是'
        }, {
          title: '2012',
          dateTime: '2013年',
          Summary: '范德萨范德萨阿凡达是'
        }],
        tpl = [
          '<li class="bui-list-item" >',
            '<div class="demo-list-content">',
              '<div class="demo-list-link" >',
                '<h1>{title}</h1>',
              '</div>',
              '<div class="demo-list-des">',
                '<b>年份：</b>{dateTime}<br/>',
                '<b>总结：</b>{Summary}<br/>',
              '</div>',
            '</div>',
            /*'<ul class="toolbar pull-left">',
            '<li><button class=" button">修改总结</button></li>',
            '<li><button class=" button button-primary">下一步</button></li>',
            '</ul>',*/
            '<div class="demo-list-border" href="#"></div>',
            //'</div>',
          '</li>'
        ],
        list = new List.SimpleList({
          render: '#list1',
          elCls: 'demo-list clearfix',
          items: items/**/,
          itemTpl: tpl.join('')
        });
        list.render();
     
    <?php if($useLoader) {?>  
      });
    <?php } ?> 
    </script>
<?php include("../../templates/control-footer.php"); ?>

