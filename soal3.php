<?php

$length = 4;


$list = createArray($length);

$result = printArray($list);

print_r($result);





function createArray($length){
    $arr = array();
    $el = 0;
    for($i = 0; $i< $length; $i++){
        $tmpArr = array();
        for($j = 0; $j<$length; $j++){
            array_push($tmpArr,$el);
            $el+=1;
        }
        array_push($arr,$tmpArr);
    }

    return $arr;
}

function printArray($arr){
    $result = array();
    for($i = 0; $i<sizeof($arr); $i++){
        // echo $i;
        if($i%2!=0){
            for($j=sizeof($arr[$i])-1; $j>=0; $j--){
                array_push($result,$arr[$i][$j]);
            }
        }else{
            for($j=0; $j<sizeof($arr[$i]);$j++){
                array_push($result,$arr[$i][$j]);
            }
        }
    }
    return $result;
}