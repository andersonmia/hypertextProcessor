<?php

$i = 98;
switch ($i) {
    case ($i>=75):
        echo "This is the First Class";
        break;
    case ($i>=65 && $i<=74):
        echo "This is the Second Class";
        break;
    case ($i>=60 && $i<=64):
        echo "This is the Third Class";
        break;    
    default:
        echo "Undefined class";
        break;
}
?>