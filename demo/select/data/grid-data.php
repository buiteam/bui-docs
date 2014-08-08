<?php
$param = $_POST['suggest'];
$array = '[{"a":"'.$param.'1","b":"选择文本","text" : "文本"}]';
echo $_GET['callback'].'('.$array.')';
?>