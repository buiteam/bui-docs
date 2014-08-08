<?php $page="scaffolding"?>
<?php $title="框架"?>
<?php $wangwang = 'dxq613' ?>
<?php include("../templates/header.php"); ?>
<?php  include("../templates/wangwang.php"); ?>
<?php include("nav.php"); ?>

 <div class="page-header">
    <h2>  全局样式设置 </h2>
	<p>在less文件中，我们对全局显示、字体、链接做了设置。你可以通过修改variables.less中相关的值来改变这些设置。相关的设置：</p>
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
          <code>@bodyBackground</code>
        </td>
        <td>
          全局背景颜色
        </td>
      </tr>
      <tr>
        <td>
          <code>@baseFontFamily</code>
        </td>
        <td>
          全局字体类型
        </td>
      </tr>
	  <tr>
        <td>
          <code>@baseFontSize</code>
        </td>
        <td>
          全局字体大小
        </td>
      </tr>
	   <tr>
        <td>
          <code>@baseLineHeight</code>
        </td>
        <td>
          全局字体行高
        </td>
      </tr>
      <tr>
        <td>
          <code>@textColor	</code>
        </td>
        <td>
         全局字体颜色
        </td>
      </tr>
      <tr>
        <td>
          <code>@linkColor、@linkColorHover</code>
        </td>
        <td>
			全局链接颜色
        </td>
      </tr>
	  <tr>
        <td>
          <code>@borderColor</code>
        </td>
        <td>
			全局边框颜色
        </td>
      </tr>
	  <tr>
        <td>
          <code>@backColor</code>
        </td>
        <td>
			全局控件背景色
        </td>
      </tr>
	  <tr>
        <td>
          <code>@radius</code>
        </td>
        <td>
			全局圆角
        </td>
      </tr>
   
    </tbody>
  </table>


  <div class="page-header">
    <h2> 工具class </h2>
	<p>在less文件中，我们对常用的工具class进行了设置。你可以通过修改utilities.less中相关的值来改变这些设置。相关的设置：</p>
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
          <code>
		  .pull-right{float: right;}
		</code>
        </td>
        <td>
          右浮动
        </td>
      </tr>
      <tr>
        <td>
          <code>
		  .pull-left{float: left;}
		</code>
        </td>
        <td>
          左浮动
        </td>
      </tr>
	  <tr>
        <td>
          <code>
		  .pull-none{float: none;}
		</code>
        </td>
        <td>
          无浮动
        </td>
      </tr>
	   <tr>
        <td>
          <code>
		  .hide{display: none;}
		</code>
        </td>
        <td>
          隐藏元素
        </td>
      </tr>
      <tr>
        <td>
          <code>
		  .show{display: block;}
		</code>
        </td>
        <td>
         显示元素
        </td>
      </tr>
      <tr>
        <td>
          <code>
		  .invisible{visibility: hidden;}
		</code>
        </td>
        <td>
			占位隐藏
        </td>
      </tr>
	  <tr>
        <td>
          <code>
		.bordered{border:1px solid @borderColor;.border-radius(@radius);}
		</code>
        </td>
        <td>
			设置圆角边框
        </td>
      </tr>
	  <tr>
        <td>
          <code>
		  .centered{text-align:center;}
		  </code>
        </td>
        <td>
			元素居中
        </td>
      </tr>
    </tbody>
  </table>

<?php  include("../templates/footer.php"); ?>
