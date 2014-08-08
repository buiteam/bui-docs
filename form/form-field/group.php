<?php $title="表单分组"?>
<?php include("../../templates/control-header.php"); ?>
  <div class="doc-content">
    <form class="form-horizontal">
      <div class="row">
        <div class="control-group span12">
            <label class="control-label">宝贝属性：</label>
            <div class="controls control-row-auto span9 span-width">
                <div class="well well-small">
                    <div class="row control-row1">
                        <span class="auxiliary-text offset1">
                            填错宝贝属性，可能会引起宝贝下架，影响正常销售。
                        </span>
                    </div>
                    <div class="row">
                        <div class="control-group span7">
                            <label for="" class="control-label">品牌:<s>*</s></label>
                            <div class="controls">
                                <select name="" id="">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group span7">
                            <label for="" class="control-label">品牌:<s>*</s></label>
                            <div class="controls">
                                <select name="" id="">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="control-group span7">
                            <label for="" class="control-label">货号</label>
                            <div class="controls">
                                <input type="text" class="control-text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="control-group span12">
            <label class="control-label">运费模板：</label>
            <div class="controls control-row-auto span9 span-width">
                <div class="well well-small">
                    <div class="row">
                        <div class="control-group span7">
                            <label for="" class="control-label">物流体积(立方米):</label>
                            <div class="controls">
                                <input type="text" class="control-text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="control-group span7">
                            <label for="" class="control-label">物流重量(千克):</label>
                            <div class="controls">
                                <input type="text" class="control-text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </form>
  </div>
<?php include("../../templates/control-footer.php"); ?>
