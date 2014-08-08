<?php $page="base"?>
<?php $title="日历"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>


<section id="typography">
  <div class="page-header">
    <h1>字体排版 <small>标题、段落、列表等等</small></h1>
  </div>
  <div class="row">
    <div class="span24">
       <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th></th>
            <th>一级标题</th>
            <th>二级标题</th>
            <th>三级标题</th>
            <th>通篇浏览文本</th>
            <th>辅助解说文本</th>
            <th>可链接的文本</th>
            <th>英文数字</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>字体</td>

              <td>宋体</td>
              <td>宋体</td>
              <td>宋体</td>
              <td>宋体</td>
              <td>宋体、Tahoma</td>
              <td>宋体</td>
              <td>Tahoma</td>
            </tr>
            <tr>
              <td>字号</td>

              <td>16px</td>
              <td>14px</td>
              <td>12px</td>
              <td>12px</td>
              <td>12px</td>
              <td>12px</td>
              <td>12px</td>
            </tr>
            <tr>
              <td>是否加粗</td>
            
              <td>Bold</td>
              <td>Bold</td>
              <td>Bold</td>
              <td>——</td>
              <td>——</td>
              <td>——</td>
              <td>——</td>
            </tr>
            <tr>
              <td>颜色</td>
              
              <td><div class="show-back" style="background-color:#333">#333333</div></td>
              <td><div class="show-back" style="background-color:#333">#333333</div></td>
              <td><div class="show-back" style="background-color:#333">#333333</div></td>
              <td><div class="show-back" style="background-color:#333">#333333</div></td>
              <td><div class="show-back" style="background-color:#999">#9999999</div></td>
              <td><div class="show-back" style="background-color:#3366CC">#3366CC</div></td>
              <td><div class="show-back" style="background-color:#333">#999999</div></td>
            </tr>
            <tr>
              <td>默认行高</td>

              <td colspan="7" style="text-align:center;">150%</td>
            </tr>
            <tr>
              <td>范例</td>

              <td><h1>一级标题规范</h1></td>
              <td><h2>二级标题规范</h2></td>
              <td><h3>三级标题规范</h3></td>
              <td><span>通篇浏览型中文</span></td>
              <td><span class="auxiliary-text">通篇辅助型中文</span></td>
              <td><a href="#">链接</a></td>
              <td><span class="letter-text">abc defg</span><span class="letter-text">122334</span></td>
            </tr>
            <tr>
              <td>应用样式或标签</td>

              <td><code>h1</code>标签</td>
              <td><code>h2</code>标签</td>
              <td><code>h3</code>标签</td>
              <td>——</td>
              <td><code>.auxiliary-text</code>样式</td>
              <td><code>a</code>标签</td>
              <td><code>letter-text</code></td>
            </tr>
        </tbody>
       </table>
    </div>
  </div>
</section>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          href : 'text/head.php',
          text : '标题' 
        },
        {
          href : 'text/body.php',
          text : '通篇文本'
        },
        {
          href : 'text/link.php',
          text : '链接'
        },
        {
          href : 'text/auxiliary.php',
          text : '辅助解说文本'
        },
        {
          href : 'text/letter.php',
          text : '数字、英文'
        }
    ];
</script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>
