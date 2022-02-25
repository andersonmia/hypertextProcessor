<?php
function removeDups($myArr){
$newArr = array_unique($myArr);
echo " The array with no duplicates is: [";
foreach ($newArr as $index => $value) {
    echo $value;
    if ($index != count($newArr)-1) {
        echo ",";
    }else{
        echo "";
    }      
}
echo "]";
}
removeDups(["alice","naomi",1,5,1,"alice"]);
?>