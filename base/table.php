<?php $page="base"?>
<?php $title="表格"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>


  <div class="page-header">
    <h1>静态表格 <small>展示大量静态数据</small></h1>
  </div>
  <table cellspacing="0" class="table table-bordered table-striped">
    <colgroup>
      <col class="span2">
      <col class="span14">
    </colgroup>
    <thead>
      <tr>
        <th>标签</th>
        <th>描述</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;table&gt;</code>
        </td>
        <td>
          包含格式化成表格的数据
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;thead&gt;</code>
        </td>
        <td>
          包含表头行(<code>&lt;tr&gt;</code>)，标示列
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;tbody&gt;</code>
        </td>
        <td>
          包含表的内容行(<code>&lt;tr&gt;</code>)
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;tr&gt;</code>
        </td>
        <td>
          表格的列，包含一个个单元格 (<code>&lt;td&gt;</code> 或者<code>&lt;th&gt;</code>)形成一行数据
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;td&gt;</code>
        </td>
        <td>
          表格的单元格
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;th&gt;</code>
        </td>
        <td>
          用于表头，标识列。必须用于<code>&lt;thead&gt;</code>中
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;标题&gt;</code>
        </td>
        <td>
          描述和总结表，对于屏幕阅读设备（screen readers） 特别有用
        </td>
      </tr>
    </tbody>
  </table>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'table/table.php',
          text : '默认表格' 
        },{
          href : 'table/table-striped.php',
          text : '奇偶相间的表格' 
        },{
          href : 'table/table-head-bordered.php',
          text : '表头有边框' 
        },{
          href : 'table/table-bordered.php',
          text : '表格整体有边框' 
        },{
          href : 'table/table-condensed.php',
          text : '压缩显示的表格' 
        },{
          href : 'table/table-combination.php',
          text : '组合使用样式' 
        },{
          href : 'table/toolbar.php',
          text : '使用工具栏' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
