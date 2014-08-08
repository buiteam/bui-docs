<?php
$param = $_POST['suggest'];
$array = array($param.'1',$param.'测试',$param.'继续');
echo $_GET['callback'].'('.json_encode($array).')';
?>