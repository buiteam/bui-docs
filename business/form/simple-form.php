<?php $title="简单表单页"?>
<?php include("../../templates/control-header.php"); ?>    
    <!-- 简单表单页 ================================================== --> 
    <div class="row">
        <div class="span16 doc-content">
          <ul class="breadcrumb">
            <li>
              <a href="#">首页</a> <span class="divider">/</span>
            </li>
            <li>
              <a href="#">商家管理</a> <span class="divider">/</span>
            </li>
            <li class="active">价格规则列表</li>
          </ul>      
          <form action="" class="form-horizontal">
            <div class="form-links">
              <ul class="nav-tabs">
                <li class="active"><a href="#">店铺信息</a></li>
                <li><a href="#">店铺销售历史</a></li>
                <li ><a href="#">店铺修改历史</a></li>
              </ul>
            </div>
            <div class="control-group">
              <label class="control-label">城市：</label>
              <div class="controls">
                <select class="input-small"><option>省份</option></select>&nbsp;&nbsp;
                <select class="input-small"><option>城市</option></select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">店铺名称：</label>
              <div class="controls">
                <input type="text" class="input-large">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">地址：</label>
              <div class="controls">
                <input type="text" class="input-large">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">电话：</label>
              <div class="controls">
                <input type="text" class="input-large">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">公交：</label>
              <div class="controls  control-row-auto">
                <textarea name="" id="" class="control-row4 input-large"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">地图坐标：</label>
              <div class="controls  control-row-auto">
                <div class="bordered span-width span8" style="height:200px;"></div>
                <div class="actions-bar actions-bar-small centered"><button type="button" class="button button-small">修改坐标</button></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">其他：</label>
              <div class="controls">
                <label class="radio" for=""><input type="radio" />规则未执行等同执行失败</label>&nbsp;&nbsp;&nbsp;
                <label class="radio" for=""><input type="radio" />规则未执行等同执行成功</label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">店铺类型：</label>
              <div class="controls">
                <label class="checkbox" for=""><input type="checkbox" />集市</label>
                <label class="checkbox" for=""><input type="checkbox" />商城</label>
                <label class="checkbox" for=""><input type="checkbox" />无名良品</label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">使用营销工具：</label>
              <div class="controls">
                <label class="checkbox" for=""><input type="checkbox" />店铺优惠券<i class=""></i></label>
              </div>
            </div> 
            <div class="row actions-bar">       
                <div class="form-actions span13 offset3">
                  <button type="submit" class="button button-primary">保存</button>
                  <button type="reset" class="button">重置</button>
                </div>
            </div>       
          </form>
        </div>
    </div>
<?php include("../../templates/control-footer.php"); ?>    