<?php include("./count.php"); ?>

<?php 
  $count = getCount("./count.json","a");
  echo $count;
  addCount("./count.json","b");
  echo getCount("count.json","b");
?>
