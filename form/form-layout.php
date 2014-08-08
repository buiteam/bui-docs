<?php $page="form"?>
<?php $title="表单"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>


  <div class="page-header">
    <h1>四种类型的表单 </h1>
    <p>DPL提供了简单的标签和样式来实现常见的四种表单。</p>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>名称</th>
        <th>样式</th>
        <th>描述</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>垂直表单</th>
        <td><code>.form-vertical</code></td>
        <td>垂直左对齐，标题和表单元素垂直排列。</td>
      </tr>
      <tr>
        <th>内联表单</th>
        <td><code>.form-inline</code></td>
        <td>居左的label和内联的元素组成的简洁的表单</td>
      </tr>
      <tr>
        <th>搜索表单</th>
        <td><code>.form-search</code></td>
        <td>简单的搜索表单</td>
      </tr>
      <tr>
        <th>水平表单</th>
        <td><code>.form-horizontal</code></td>
        <td>居左但内容右对齐的label和控件在一行</td>
      </tr>
    </tbody>
  </table>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'form-layout/form-vertical.php',
          text : '垂直表单 (默认)' 
        },{
          href : 'form-layout/form-inline.php',
          text : '内联表单' 
        },{
          href : 'form-layout/form-search.php',
          text : '搜索表单' 
        },{
          href : 'form-layout/form-horizontal.php',
          text : '水平表单' 
        },{
          href : 'form-layout/form-panel.php',
          text : '表单面板' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
