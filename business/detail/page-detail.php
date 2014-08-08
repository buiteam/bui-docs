<?php $title="详情页"?>
<?php include("../../templates/control-header.php"); ?> 
<!-- 详情页 ================================================== -->
  <div class="row">
    <div class="span24">
      <!-- 包含grid的详情页 ================================================== -->
      <h2>包含grid的详情页</h2>
      <hr>
      <form name="" action="" method="post" id="detailForm">
    
        <h3>入库单详情</h3>   
        <div class="row detail-row">
          <div class="span8">
          <label>采购单编号：</label><span class="detail-text">12584863145</span>   
          </div>
          <div class="span8">
          <label>供应商编号：</label><span class="detail-text">545645454</span>
          </div>
          <div class="span8">
          <label>供应商名称：</label><span class="detail-text">黑牡丹牛仔裤</span>
          </div>
        </div>    
        <div class="row detail-row">
          <div class="span8">
            <label>供应商所在地：</label><span class="detail-text">浙江省金华市</span>
          </div>
          <div class="span8">
            <label>公司名称：</label><span class="detail-text">杭州中法国际</span>
          </div>
          <div class="span8">
            <label>联系方式：</label><span class="detail-text">1454541521</span>
          </div>
        </div>    
        <div class="row detail-row">
          <div class="span8">
            <label>公司地址</label><span class="detail-text">浙江省金华市*****************</span>
          </div>
          <div class="span8">
            <label >商品spu：</label><span class="detail-text">D23565556256</span>
          </div>
          <div class="span8">
            <label>商品名称：</label><span class="detail-text">墨绿色直筒牛仔裤</span>
          </div>
        </div>    
        <div class="row detail-row">      
          <div class="span8">
            <label>行业类目：</label><span class="detail-text">女装</span>
          </div>
          <div class="span8">
            <label>商品发货地址：</label><span class="detail-text">浙江省金华市*****************</span>
          </div>
        </div>    
        <h3>货品信息</h3> 
        <div class="detail-row">
          <div class="search-grid-container">
            <div id="grid">
              
            </div>
          </div>
        </div>    
        <div class="row detail-row">
          <div class="span8">
          <label>货品总量：</label><span class="detail-text">5000</span>   
          </div>
        </div>    
        <!--- button区域 -->
        <div class="detail-row">
          <div class="detail-actions">
            <a class="button button-primary" href="javascript:void(0)" id="close">关闭</a>
            <a class="button button-primary" href="javascript:void(0)" id="auditPass">审核通过</a>
            <a class="button button-primary" href="javascript:void(0)" id="auditNopass">审核不通过</a>
          </div>
        </div>
      </form>
    </div>
  </div>
<script src="../../assets/js/jquery-1.8.1.min.js"></script>
<script src="../../assets/js/build/bui-min.js"></script> 
<script> 
var Grid = BUI.Grid,
    Store = BUI.Data.Store,
    columns = [{
        title : '货品名称',
        dataIndex :'a',
        width:'20%'
      },{
        id: '123',
        title : '货品SPU',
        dataIndex :'b',
        width:'30%'
      },{
        title : '数量',
        dataIndex : 'c',
        width:'50%'
    }],
    data = [{a:'良无限',b:'1111',c:'231313'},{a:'良无限',b:'1111',c:'231313'},{a:'良无限',b:'1111',c:'231313'}];

  var grid = new Grid.SimpleGrid({
    render:'#grid',
    columns : columns,
    items : data
  });

  grid.render();

</script>  
      
<?php include("../../templates/control-footer.php"); ?>         