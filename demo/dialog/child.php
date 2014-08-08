<?php $title="使用页面上DOM"?>
<?php include("../../templates/control-header.php"); ?>
    <div>
      <button id="btnShow" class="button button-primary">显示</button>
    </div>
    
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
    KISSY.use(['bui/overlay','bui/grid','bui/data'],function(S,Overlay,Grid,Data){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/overlay','bui/grid','bui/data'],function(Overlay,Grid,Data){
    <?php }else{?>
      var Overlay = BUI.Overlay,
        Grid = BUI.Grid,
        Data = BUI.Data;
    <?php }?>
      var Store = Data.Store,
           columns = [
            {title : '表头1',dataIndex :'a', width:100},
            {id: '123',title : '表头2',dataIndex :'b', width:100},
            {title : '表头3',dataIndex : 'c',width:200}
          ],
          data = [{a:'123'},{a:'cdd',b:'edd'},{a:'1333',c:'eee',d:2}];
 
        var store = new Store({
            data : data,
            autoLoad:true
          }),
          grid = new Grid.Grid({
            forceFit: true, // 列宽按百分比自适应
            columns : columns,
            store : store
          });
 

      var dialog = new Overlay.Dialog({
            title:'子控件',
            width:500,
            height:270,
            children : [grid],
            childContainer : '.bui-stdmod-body',
            success:function () {
              alert('确认');
              this.close();
            }
          });
        dialog.show();
        $('#btnShow').on('click',function () {
          dialog.show();
        });
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>
