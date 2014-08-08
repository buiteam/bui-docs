<?php $page="base"?>
<?php $title="按钮"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>按钮</th>
        <th>应用的样式（class=""）</th>
        <th>描述</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button class="button" href="#">默认按钮</button></td>
        <td><code>button</code></td>
        <td>默认的灰色按钮，并带有渐变色</td>
      </tr>
      <tr>
        <td><button class="button button-primary" href="#">重要按钮</button></td>
        <td><code>button button-primary</code></td>
        <td>提供更深的色度来表明在按钮组中是最重要的行为</td>
      </tr>
      <tr>
        <td><button class="button button-info" href="#">提示按钮</button></td>
        <td><code>button button-info</code></td>
        <td>默认样式的一种替代方案</td>
      </tr>
      <tr>
        <td><button class="button button-success" href="#">成功按钮</button></td>
        <td><code>button button-success</code></td>
        <td>表示一个成功的或者有积极意义的行为</td>
      </tr>
      <tr>
        <td><button class="button button-warning" href="#">警告按钮</button></td>
        <td><code>button button-warning</code></td>
        <td>表明警告，并需要采取这种行为的操作</td>
      </tr>
      <tr>
        <td><button class="button button-danger" href="#">危险按钮</button></td>
        <td><code>button button-danger</code></td>
        <td>表明一个危险的或者潜在的有消极意义的行为</td>
      </tr>
      <tr>
        <td><button class="button button-inverse" href="#">替代按钮</button></td>
        <td><code>button button-inverse</code></td>
        <td>深灰色的按钮，默认按钮的一种替代按钮，跟语义无关的操作</td>
      </tr>
    </tbody>
  </table>
  <?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'button/button.php',
          text : '按钮类型' 
        },{
          href : 'button/size.php',
          text : '按钮大小' 
        },
        {
          href : 'button/status.php',
          text : '按钮状态' 
        },
        {
          href : 'button/tag.php',
          text : '使用不同的标签' 
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
