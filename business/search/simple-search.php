<?php $title="简单表单页"?>
<?php include("../../templates/control-header.php"); ?>    
<!-- 简单搜索页 ================================================== -->
    <div class="row">
      <div class="span24 doc-content">
        <ul class="breadcrumb">
          <li>
            <a href="#">首页</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">商家管理</a> <span class="divider">/</span>
          </li>
          <li class="active">价格规则列表</li>
        </ul>
        <form class="form-panel" action="post">
          <div class="panel-title">
            <span>
              <label>报名日期：</label><input type="text" class="calendar" /> <label>至</label> <input type="text" class="calendar" />
            </span>
            <span>
              <label>上阶段审核日期：</label><input type="text" class="calendar" /> <label>至</label> <input type="text" class="calendar" />
            </span>
          </div>
          <ul class="panel-content">
            <li>
              <select name="">
                <option>省份</option>
              </select>
              <select name="">
                <option>城市</option>
              </select>
              <select name="">
                <option>商品类型</option>
              </select>
              <select name="">
                <option>平台类型</option>
              </select>
              <select name="">
                <option>是否在商品池</option>
              </select>
              <select name="">
                <option>是否看样子</option>
              </select>
              <select name="">
                <option>是否已审核</option>
              </select>
            </li>
            <li>
              <select name="">
                <option>一级类目</option>
              </select>
              <select name="">
                <option>二级类目</option>
              </select>
              <select name="">
                <option>三级类目</option>
              </select>
              <select name="">
                <option>四级类目</option>
              </select>
              <select name="">
                <option>五级类目</option>
              </select>
              <select name="">
                <option>商品数字id</option>
              </select>
            </li>
            <li>
              <select name="">
                <option>一级类目</option>
              </select>
              <input type="text"/>
              <button type="submit" class="button button-primary">查询>></button>
            </li>
          </ul>
        </form>
        <table cellspacing="0" class="table table-bordered">
          <thead>
            <tr><th colspan="5">
            <ul class="toolbar">
              <li><label class="checkbox"><input type="checkbox"><a href="#">全选</a></label></li>
              <li><button class="button button-danger"><i class="icon-white icon-trash"></i>批量删除</button></li>
              <li><button class="button button-success">审核通过</button></li>
              <li><button class="button button-inverse">审核不通过</button></li>
            </ul>
            </th></tr>
            <tr>
              <th width="15"></th>
              <th>#</th>
              <th>姓名</th>
              <th>别名</th>
              <th>用户名</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox"></td>
              <td >1</td>
              <td>张三</td>
              <td>张某某</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td><input type="checkbox"></td>
              <td>1.1</td>
              <td>张三</td>
              <td>张某某</td>
              <td>@TwBootstrap</td>
            </tr>
            <tr>
               <td><input type="checkbox"></td>
              <td>2</td>
              <td>李四</td>
              <td>李证明</td>
              <td>@fat</td>
            </tr>
            <tr>
               <td><input type="checkbox"></td>
              <td>3</td>
              <td colspan="2">王五 王明</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <div>
          <ul class="toolbar pull-left">
            <li><label class="checkbox"><input type="checkbox"><a href="#">全选</a></label></li>
            <li><button class="button button-danger"><i class="icon-white icon-trash"></i>批量删除</button></li>
            <li><button class="button button-success">审核通过</button></li>
            <li><button class="button button-inverse">审核不通过</button></li>
          </ul>
          <div class="pagination pull-right">
            <ul>
              <li class="disabled"><a href="#">« 上一页</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">下一页 »</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
<?php include("../../templates/control-footer.php"); ?>       