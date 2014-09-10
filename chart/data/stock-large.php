<?php

    $startTime = $_GET['startTime'];
    $endTime = $_GET['endTime'];
    $arr = array();

    $add = ($startTime - $endTime)/1000;

    for($i = 0; $i<100; $i++){
        $data = array();
        $data[] = $startTime + $add;
        $data[] = rand(1,200);
        $arr[] = $data;

        $startTime = $startTime + $add;
    }

    sleep(1);

    $str = json_encode($arr);
    echo ($str);
?>  