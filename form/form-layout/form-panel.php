<?php $title="表单面板"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span20 doc-content">
          <form class="form-panel" action="post">
            <div class="panel-title">
              <span>
                <label>报名日期：</label><input type="text" class="calendar" > <label>至</label> <input type="text" class="calendar ">
              </span>
              <span>
                <label>上阶段审核日期：</label><input type="text" class="calendar"> <label>至</label> <input type="text" class="calendar">
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
              </li>
              <li>
                <select name="">
                  <option>一级类目</option>
                </select>
                <input type="text">
                <button type="submit" class="button button-primary">查询&gt;&gt;</button>
              </li>
            </ul>
          </form>   
      </div>
    </div>
<?php include("../../templates/control-footer.php"); ?>
