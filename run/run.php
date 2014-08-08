<?php $title="标准列表"?>
<?php include("../templates/control-header.php"); ?>
<?php 
  if(isset($_POST['html'])){
    $html = $_POST['html'];
    echo stripslashes($html);
  }
?>
<?php include("../templates/script.php"); ?>
<script class="" type="text/javascript">
<?php 
  if(isset( $_POST['script'])){
    $script = $_POST['script'];
    echo stripslashes($script);
  }
?>
</script>
<?php include("../templates/control-footer.php"); ?>