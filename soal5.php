<?php

$nums = array(10,9,2,5,3,7,101,18);
$longestIncrement = 0;

for($i=1; $i<sizeof($nums); $i++){
    if($nums[$i-1]<$nums[$i]){
        $longestIncrement+=1;
    }
}

echo $longestIncrement;