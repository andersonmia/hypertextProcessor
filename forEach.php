<?php

// single array


    // FOR EACH
$marks = [10,11,12,13,14,15];
echo "<h1>Printing an array using foreach</h1>";
foreach ($marks as $mark) {
    echo "The mark is ". $mark. "<br>";
}
echo "<br>";
    // FOR REACH WITH KEYS
echo "<h1>Printing an array using foreach with keys</h1>";
foreach ($marks as $index => $mark) {
    echo "The mark at index $index is ". $mark. "<br>";
}
echo "<br>";

// multi-dimensional 


$scores = array(
    array(10,11,12,13,14,15),
    array(20,21,22,23,24,25),
    array(30,31,32,33,34,35)
    );
    // FOR EACH
    foreach ($scores as $score) {
        foreach ($score as $sc) {
           echo "The score is $sc <br>";
        }
    }
    echo "<br>";
    // FOREACH WITH KEYS
    foreach ($scores as $key => $score) {
        foreach ($score as $k => $sc) {
            echo "The score at $key and $k is $sc <br>";
        }
    }

// associative arrays 


$population = array(
    "western"=>array("Nyabihu"=>500, "Karongi"=>300, "Rubavu"=>400, "Rusizi"=>100),
    "Northen"=>array("Musanze"=>700, "Gicumbi"=>500, "Gakenke"=>180, "Rulindo"=>340),
    "Kigali"=>array("Gasabo"=>1000, "Nyarugenge"=>470, "Kicukiro"=>200),
    "Eastern"=>array("Nyagatare"=>500, "Kayonza"=>600, "Rwamagana"=>700, "Ngoma"=>870)
);
echo "<br>";
    // foreach
    echo `<h1>Printing associative arrays with foreach</h1><br>`;
    foreach($population as $prkey=>$province){
        foreach($province as $district=>$pop){
            echo "The population at $district of $prkey is $pop <br>";
        }
    }
    echo "<br>";
    echo "<br>";
    $population = array(
        1=>array("Nyabihu"=>500, "Karongi"=>300,350,490),
        2=>array("Musanze"=>700, "Gicumbi"=>500, "Gakenke"=>180,),
        array(1000,470),
        array("Nyagatare"=>800,"Ngoma"=>870)
    );
    echo "<br>";
        // foreach
        echo `<h1>Printing associative arrays with foreach</h1><br>`;
        foreach($population as $prkey=>$province){
            foreach($province as $district=>$pop){
                echo "The population at $district of $prkey is $pop <br>";
            }
        }

    ?>