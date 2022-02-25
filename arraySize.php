<?php
function calculateArraySize($collection){
    $count = 0;
    for ($i=0; $i < count($collection); $i++) { 
        if ($collection[$i] != "") {
            $count++;
        }
        
    }
    echo "The size of the array is ".$count;
}

calculateArraySize([]);