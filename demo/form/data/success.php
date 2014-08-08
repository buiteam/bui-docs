<?php 
if(isset($_POST['isNew'])){
  $isNew = $_POST['isNew']; 
}else{
  $isNew = false;
}

if($isNew){
  $id = rand(10,1000);
 ?>
  {"success" : true,"isNew" : true,"id" : "<?php echo $id;?>"}
<?php }else{?>
  {"success" : true}
<?php } ?>