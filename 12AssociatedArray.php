<?php
// associative array =An array made of key => value pairs.
// countries => capitals
// id => username 
// item => price
    $capitals = array(  "USA"=>"Washington D.C.",
                        "Japan"=>"Kyoto",
                        "South Korea"=>"Seoul",
                        "India"=>"New Delhi");

    $capitals["USA"]="Las Vegas";
    // Adding the pair.
    $capitals["China"]="Bejing";
    // Removing the last pair.
    // array_pop($capitals);
    array_shift($capitals);
    $keys = array_keys($capitals);
    $values = array_values($capitals);


    foreach($capitals as $key=>$value){
        echo"{$key} = {$value} <br>";
    }
    foreach($keys as $keyys){
        echo"{$keyys} <br>";
    }
    foreach($values as $valuess){
        echo"{$valuess} <br>";
    }
    // Flipping the array key value pair.
    $capitalsss=array_flip($capitals);
    foreach($capitalsss as $key=>$value){
        echo"{$key} = {$value} <br>";
    }                   
    echo count($capitals);
?>
