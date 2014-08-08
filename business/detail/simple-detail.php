<?php $title="简单表单页"?>
<?php include("../../templates/control-header.php"); ?> 
<!-- 简单详情页 ================================================== -->
    <div class="doc-content">
      <ul class="breadcrumb">
        <li>
          <a href="#">首页</a> <span class="divider">/</span>
        </li>
        <li>
          <a href="#">商家管理</a> <span class="divider">/</span>
        </li>
        <li class="active">价格规则列表</li>
      </ul>
      <div class="form-links">
        <ul class="nav-tabs">
          <li class="active"><a href="#">店铺信息</a></li>
          <li><a href="#">店铺销售历史</a></li>
          <li ><a href="#">店铺修改历史</a></li>
        </ul>
      </div>
      <div class="detail-section">  
        <h3>审核记录</h3>
        <hr>
        <div class="detail-row">
          <table cellspacing="0" class="table table-head-bordered">
            <thead>
            <tr>
              <th>审核类型</th>
              <th>审核意见</th>
              <th>审核时间</th>
              <th>审核人</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>小二回复</td>
              <td>系统审核通过</td>
              <td>2012-01-01 12:01:01</td>
              <td>李斯</td>
            </tr>
            <tr>
              <td>小二回复</td>
              <td>系统审核通过</td>
              <td>2012-01-01 12:01:01</td>
              <td>李斯</td>
            </tr>
            <tr>
              <td>小二回复</td>
              <td>系统审核通过</td>
              <td>2012-01-01 12:01:01</td>
              <td>李斯</td>
            </tr>
            </tbody>
          </table>            
        </div>
      </div>
      <h3>商品详情</h3>
      <hr>
      <form action="" class="form-horizontal form-horizontal-simple">
        <div class="control-group">
          <label class="control-label">商品URL：</label>
          <div class="controls">
          <span class="control-text">http://twitter.github.com/bootstrap/base-css.html#buttons</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品名称：</label>
          <div class="controls">
          <span class="control-text">测试商品名称：</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品短名称：</label>
          <div class="controls">
          <span class="control-text"></span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品得分：</label>
          <div class="controls">
          <span class="control-text">98分</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">所属类目：</label>
          <div class="controls">
          <span class="control-text">家具行业</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">所属平台：</label>
          <div class="controls">
          <span class="control-text">聚划算</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品聚划算图片：</label>
          <div class="controls control-row-auto">
          <img width="285" src="http://img02.taobaocdn.com/bao/uploaded/i1/T1kDLVXephXXb1upjX.jpg_310x310.jpg">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品原价：</label>
          <div class="controls">
          <span class="control-text">9999.99</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">历史最低价：</label>
          <div class="controls">
          <span class="control-text"><a href="#">历史最低价详情查询</a></span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品团购价格：</label>
          <div class="controls">
          <span class="control-text">8888.88</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">折扣：</label>
          <div class="controls">
          <span class="control-text">10%</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">运费：</label>
          <div class="controls">
          <span class="control-text">卖家承担运费</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">商品数量：</label>
          <div class="controls">
          <span class="control-text">100</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">是否选择入仓：</label>
          <div class="controls">
          <span class="control-text">入仓</span>
          </div>
        </div>
        <div class="actions-bar">
          <div class="row form-actions ">
            <div class="span13 offset3 ">
              <button type="submit" class="button button-primary">确定</button>
              <button type="reset" class="button">取消</button>
            </div>
          </div>
        </div>
      </form>
    </div>
      
<?php include("../../templates/control-footer.php"); ?>         