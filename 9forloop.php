<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9forloop.php" method="post">
        <label>Enter a number to count to: </label><br>
        <input type="text" name="counter"><br>
        <input type="submit"value="start"><br>
</body>
</html>
<?php
// for loop = repeat some code a certain # of times.
// for (variable; condition ; steps){}
$counter = $_POST["counter"];
for ($i =0; $i<= $counter;$i++ ){
        echo"{$i}<br>";
    }
/*
// For decrement logic.
$counter = $_POST["counter"];
for ($i =$counter; $i>= 0;$i-- ){
        echo"{$i}<br>";
    }
*/

?>