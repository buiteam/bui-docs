<?php global $newId; 
if(isset($_POST['saveType']) && $_POST['saveType'] == 'add'){
	session_start(); 
	if(!isset($_SESSION['newId'])){
		$newId = $_SESSION['newId'] = 4;
	}else{
		$newId = $_SESSION['newId'] = $_SESSION['newId'] + 1;
	}
	echo '{"id" : '.$newId.'}';
} else if(isset($_POST['a']) && $_POST['a'] == '1'){?>
  {"hasError" : true,"field" : "a","error" : "这是字段a的错误信息！！"}
<?php }else{?>
	{"hasError" : false}
<?php }?>
	

