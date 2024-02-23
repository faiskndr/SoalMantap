<?php

$arr = array(1,2,3,4,5,6,7);
$k = 3;

for($i = 0; $i<$k; $i++){
    $tmp = $arr[0];
    array_splice($arr,0,1);
    array_push($arr,$tmp);
    var_dump($arr);
}

