<?php

$chocolate = 40;

$get = freeChocolate($chocolate);

echo $get;

function freeChocolate($chocolate){
    $n= 5;
    $result =floor($chocolate/$n); 
    if($result < 5){
        return $chocolate +$result;
    }
    
    if($result%$n==0){
        $result += $result/$n;
    }else{
        $result +=1;
    }
    return $chocolate +$result;
}