<?php
declare(strict_types=1);
/* Data Types & Type Casting*/
// Scalar: int,float,string,bool
$price =10;
echo gettype($price);
echo var_dump($price);

// Compound: array, object, callable, iterable.
$companies = [1,2,3,'A',true];
print_r($companies);

// Special Type: resource, null.

function sum(int $x,int $y){
    return $x + $y;
}
$sum1   =   sum(2,3);

var_dump($sum1);

// Type casting:Changing string into int in the example.
$x = (int) '5';
var_dump($x);
?>