<?php
    $x  =   1;
    $y  =  &$x;
    // With changes in the value of x after this also it will change.
    $x  =   3;
    /*
    This was a new concept for me and was fascinating.
    */
    echo "{$y}";
?>