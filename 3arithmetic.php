<!-- Arithmetic Operators -->
<?php
  //+- * / ** %
    $x =10;
    $y=2;
    $z=null;

    //$z=$x + $y;
    //$z= $x % $y;
    $z = $x ** 2;
    echo "{$z}<br>";

  //Increment/decrement operators
  //++, +=2 , --, -=
  $counter1=0;
  $counter2=0;
  $counter1-=3;
  $counter2 ++;
  echo "{$counter1} <br> {$counter2}";

  //Operator Precedence
  // ()
  //**
  // * / %
  // + - 
  //Left to right.

?> 