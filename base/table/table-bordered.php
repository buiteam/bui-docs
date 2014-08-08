<?php $title="表格整体有边框"?>
<?php include("../../templates/control-header.php"); ?>

<div class="row">
  <div class="span12 offset3 doc-content">
      <table cellspacing="0" class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>姓名</th>
            <th>别名</th>
            <th>用户名</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">1</td>
            <td>张三</td>
            <td>张某某</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>张三</td>
            <td>张某某</td>
            <td>@TwBootstrap</td>
          </tr>
          <tr>
            <td>2</td>
            <td>李四</td>
            <td>李证明</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">王五 王明</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
  </div>
</div>
 

<?php include("../../templates/control-footer.php"); ?>
