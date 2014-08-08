<?php $title="使用工具栏"?>
<?php include("../../templates/control-header.php"); ?>

<div class="row">
  <div class="offset1 span20 doc-content">
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
            <td rowspan="2">1</td>
            <td>张三</td>
            <td>张某某</td>
            <td>@mdo</td>
          </tr>
          <tr>
             <td><input type="checkbox"></td>
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
 

<?php include("../../templates/control-footer.php"); ?>
