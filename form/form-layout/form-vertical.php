<?php $title="垂直表单"?>
<?php include("../../templates/control-header.php"); ?>
  <div class="doc-content">
    <form class="well form-vertical">
      <fieldset>
        <legend>垂直表单</legend>
        <label>Label name</label>
        <input type="text" class="control-text span-width span6" placeholder="Type something…"> 
        <span class="auxiliary-text">Associated help text!</span>
        <p class="auxiliary-text">Example block-level help text here.</p>
        <label class="checkbox">
          <input type="checkbox"> Check me out
        </label>
        <button type="submit" class="button">Submit</button>
      </fieldset>
    </form>
  </div>
<?php include("../../templates/control-footer.php"); ?>
