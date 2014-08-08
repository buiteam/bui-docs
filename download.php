<?php include("./download/count.php"); ?>
<?php
  if(empty($_GET['filename']) && empty($_GET['fileid'])){
      header("Content-Type: text/html; charset=utf-8");
      echo'location.replace ("./download/not-found.php") </script>'; 
      exit();
  }
  $file_name=$_GET['filename'];
  $file_id = $_GET['fileid'];
  if(isset($_GET['FileDir'])){
    $file_dir=$_GET['FileDir'];
  }else{
    $file_dir=".";
  }

  $files = array("bui"=>"bui", "default"=>"bui-default", "imageview"=>"imageview");
  $log = './download/count.json';
  if(!empty($files[$file_id])){
    $url = "https://git.oschina.net/bui/".$files[$file_id]."/repository/archive?ref=master";
    addCount($log,$file_id);
    Header("HTTP/1.1 303 See Other"); 
    Header("Location: $url"); 
    exit;
  }
  
  $file_dir = $file_dir."/";
  if(!file_exists($file_dir.$file_name))   {   //检查文件是否存在  
    header("Content-Type: text/html; charset=utf-8");
    echo   $file_dir.$file_name;  
    echo   "文件找不到";  
    exit;    
  }else{     
    
    addCount($log,$file_id);
    $file = fopen($file_dir . $file_name,"r"); // 打开文件
    // 输入文件标签
    Header("Content-type: application/octet-stream");
    Header("Accept-Ranges: bytes");
    Header("Accept-Length: ".filesize($file_dir . $file_name));
    Header("Content-Disposition: attachment; filename=" . $file_name);
    // 输出文件内容
    echo fread($file,filesize($file_dir . $file_name));
    fclose($file);
    exit();
  }
?>
