<?php $title="表单分组"?>
<?php include("../../templates/control-header.php"); ?>
<style>
  code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px;
  }
</style>
  <h2>级联列表</h2>
  <p>BUI对级联列表进行了集成，这里是几个简单的demo，更详细的说明参考：<a href="http://www.builive.com/apps/default/main.html#form/group" target="_blank">http://www.builive.com/apps/default/main.html#form/group</a></p>
    <form id="J_Form"  class="form-horizontal">
      <h3>内置源的下拉列表</h3>
      <p>由 <code>data-type</code>决定，由于内置了 "city" 类型的数据源，所以可以直接使用省市下拉框</p>
      <div class="control-group">
        <label class="control-label">级联下拉：</label>
        <div class="controls bui-form-group-select" data-type="city">
          <select class="input-small" value="山东省"><option>省份</option></select>&nbsp;&nbsp;
          <select class="input-small"><option>城市</option></select>
          <select class="input-small"><option>区</option></select>
        </div>
      </div>
      <h3>自定义url的下拉列表</h3>
      <p>可以通过<code>BUI.Form.Group.Select.addType</code>来给内部的 <code>TreeStore</code>自定义数据源，进行无限级的扩展：</p>
      <div class="control-group">
        <label class="control-label">级联下拉：</label>
        <div class="controls bui-form-group-select" data-type="type1">
          <select class="input-small"><option>第一级</option></select>&nbsp;&nbsp;
          <select class="input-small"><option>第二级</option></select>
          <select class="input-small"><option>第三级</option></select>
          <select class="input-small"><option>第四级</option></select>
        </div>
      </div>
      <p><label class="label">注意：</label>没有下一级节点的是叶子节点</p>

      <h3>静态数据</h3>
      <p>直接设置静态数据源</p>
      <div class="control-group">
        <label class="control-label">级联下拉：</label>
        <div class="controls bui-form-group-select" data-type="type2">
          <select class="input-small" value="山东省"><option>省份</option></select>&nbsp;&nbsp;
          <select class="input-small"><option>城市</option></select>
          <select class="input-small"><option>区</option></select>
        </div>
      </div>

      <div class="row">
        <div class="form-actions offset3">
          <button type="submit" class="button button-primary">保存</button>
          <button type="reset" class="button">重置</button>
        </div>
      </div>

    </form>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use('bui/form',function(S,Form){
    <?php }else if($useLoader) {?>
  BUI.use('bui/form',function(Form){
    <?php }else{?>  
      var Form = BUI.Form;
    <?php }?>  

      // 自定义类型
      BUI.Form.Group.Select.addType('type1',{
        url : '../tree/data/nodes.php',
        root : {
          id : '0'
        }
      });


      // 静态数据源
      var data = [{"id" : "1","text":"山东","children":[
        {"id":"11","text":"济南","leaf":false},
        {"id":"12","text":"淄博","leaf":false,"children":[
          {"id":"121","text":"淄川区","leaf":true}
        ]}
      ]}];

      BUI.Form.Group.Select.addType('type2',{
        data : data
      });

      var form = new Form.Form({
        srcNode : '#J_Form'
      }).render();

    <?php if($useLoader) {?>  
  });  
    <?php } ?>  
</script>
<?php include("../../templates/control-footer.php"); ?>

