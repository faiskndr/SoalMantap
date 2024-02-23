<?php

$routes = array([1,2,7],[3,6,7]);
$source = 1;
$target =2;
$bus= 1;
for($i=1; $i<sizeof($routes); $i++){
    for($j=0; $j<sizeof($routes[$i-1]); $j++){
        if(!in_array($target,$routes[$i-1])){
            if(!in_array($target,$routes[$i])){
                $bus=-1;
                break;
            }
            if(in_array($routes[$i-1][$j],$routes[$i])){
                $bus+=1;
            }
        }
    }
}

print_r($bus);