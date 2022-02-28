<?php

    function addElement($myarray, $index, $element){
        $array = array();
        
        for($i = 0; $i < count($myarray); $i++){
            if($i == $index){
                break;
            }
            $array[] = $myarray[$i];
        }
        $array[] = $element;
        for($i = $index+1; $i <= count($myarray); $i++){
            $array[] = $myarray[$i-1];
        }
    
        for($i = 0; $i < count($array); $i++){
        echo " $array[$i]";
            if($i != count($array)-1)
                echo ", ";
            
        }
    }
    $array =  [2,3,4,5,6,7,8,9];
    addElement($array,0,1);
?>