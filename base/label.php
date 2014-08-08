<?php $page="base"?>
<?php $title="标签和标记"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
  <div class="page-header">
    <h1>
      标签 <small>标签和注释文字</small>
      <?php include("../templates/wangwang.php"); ?>
    </h1>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>标签</th>
        <th>代码</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><span class="label">Default</span>
        </td>
        <td><code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td><span class="label label-success">Success</span>
        </td>
        <td><code>&lt;span class="label
            label-success"&gt;Success&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td><span class="label label-warning">Warning</span>
        </td>
        <td><code>&lt;span class="label
            label-warning"&gt;Warning&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td><span class="label label-important">Important</span>
        </td>
        <td><code>&lt;span class="label
            label-important"&gt;Important&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td><span class="label label-info">Info</span>
        </td>
        <td><code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td><span class="label label-inverse">Inverse</span>
        </td>
        <td><code>&lt;span class="label
            label-inverse"&gt;Inverse&lt;/span&gt;</code>
        </td>
      </tr>
    </tbody>
  </table>


  <div class="page-header">
    <h1>
      标记 <small>指示信息、未完成任务等</small>
    </h1>
  </div>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>类别</th>
        <th>样例</th>
        <th>代码</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td><span class="badge">1</span>
        </td>
        <td><code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>Success</td>
        <td><span class="badge badge-success">2</span>
        </td>
        <td><code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>Warning</td>
        <td><span class="badge badge-warning">4</span>
        </td>
        <td><code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>Error</td>
        <td><span class="badge badge-error">6</span>
        </td>
        <td><code>&lt;span class="badge badge-error"&gt;6&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>Info</td>
        <td><span class="badge badge-info">8</span>
        </td>
        <td><code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>Inverse</td>
        <td><span class="badge badge-inverse">10</span>
        </td>
        <td><code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
        </td>
      </tr>
    </tbody>
  </table>


<?php  include("../templates/footer.php"); ?>
