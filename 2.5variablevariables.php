<?php
// Variable Variables.

$foo = 'bar';

$$foo = 'baz';
//Similar to, $bar = 'baz' as in C.
echo "{$foo} , {$$foo}";
?>