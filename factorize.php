<?php

function factorizeNumbers($number){
$less = range(1,$number);
$factors = [];

echo "The factors of $number must be among these numbers:[ ";
foreach ($less as $index => $individual) {
    if($index != count($less)-1){
    echo "$individual,";
    }else{
        echo "$individual";
    }
}
echo "]<br>";

for ($i=0; $i < count($less); $i++) { 
    if (($number % $less[$i])== 0) {
       array_push($factors, $less[$i]);
    }
}
echo "The factors of $number are: [";
foreach ($factors as $index => $factor) {
    if ($index != count($factors)-1) {
        echo "$factor,";
    }
    else {
       echo "$factor";
    }
}
echo "]";
}

factorizeNumbers(12);


?>