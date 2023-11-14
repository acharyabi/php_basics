<?php
    $foods= array("apple","orange","banana","coconut");
    $foods[0]="pineapple"; 
    // Adding more elements in the array.
    array_push($foods,"pineapple","kiwi");
    // Removes last element.
    array_pop($foods);
    // Shifts the array.
    array_shift($foods);
    // For reversing array.
    $reversed_foods = array_reverse($foods);
    
    foreach ($foods as $food){
        echo "$food <br>";
    }
    foreach ($reversed_foods as $foody){
        echo "$foody <br>";
    }
    // Counting elements in the array.
    echo count($foods);
?>