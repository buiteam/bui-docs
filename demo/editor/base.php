<?php $title="编辑器"?>
<?php include("../../templates/control-header.php"); ?>
  <style>
    
  </style>
    <p>点击编辑下面的文本</p>
    <div class="row">
      <div class="span8">
        <h3>文本</h3> 
        <div id="e1" class="edit-text">文本1</div>
        <div id="e2" class="edit-text">文本2</div>
        <div id="e3" class="edit-text">文本3</div>
      </div>

      <div class="span8">
        <h3>日期</h3> 
        <span class="edit-date">2012-01-01</span>
        <span class="edit-date">2015-10-01</span>
        <span class="edit-date">2002-05-11</span>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="span8">
        <h3>选择框</h3>
        <div class="edit-sel">通过</div>
        <div class="edit-sel">不通过</div>
        <div class="edit-sel">暂停</div>
      </div>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/editor'],function(S,Editor){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/editor'],function(Editor){
    <?php }else{?>
      var Editor = BUI.Editor;
    <?php }?>

      //编辑普通文本
      var editor1 = new Editor.Editor({
        trigger : '.edit-text',
        field : { //设置编辑的字段
          rules : {
            required : true
          }
        }
      });
      editor1.render();
      editor1.on('accept',function() {
        if(editor1.isChange()){
          alert('修改！！！');
        }
        //alert('accept!!!');
      });

      //编辑日期
      var editor2 = new Editor.Editor({
        trigger : '.edit-date',
        formatter : function (value) {
          return BUI.Date.format(value,'yyyy-mm-dd');
        },
        field : { //设置编辑的字段
          xtype : 'date'
        }
      });
      editor2.render();

      function getValue(obj,text){
        var rst = text;
        BUI.each(obj,function(v,k){
          if(v == text){
            rst = k;
            return false;
          }
        });
        return rst;
      }

      var items = {'1' : '通过','2':'不通过','3' : '暂停'},
        editor3 = new Editor.Editor({
        trigger : '.edit-sel',
        field : {
          xtype : 'select',
          items : items
        },
        parser : function(text){ //将文本转换成值
          return getValue(items,text);
        },
        formatter : function(value){ //将值转换成文本
          return items[value];
        }
      });

      editor3.render();

    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>