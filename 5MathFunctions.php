<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Using the same file name as we have php in same file.Trying get. -->
    <form action="index.php" method="post">    
        <label>x: </label><br>
        <input type="text" name="x"><br>
        <label>y: </label><br>
        <input type="text" name="y"><br>
        <label>z: </label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x= $_POST["x"];
    $y= $_POST["y"];
    $z= $_POST["z"];
    $total = null;
    
    
    //$total= abs($x);
    // $total = round($x);
    // Lowest round off no.
    // $total = floor($x);
    // Highest round off no.
    // $total = ceil($x);
    // $total = sqrt($x);
    // $total= pow($x, $y);
    //min,pi(),rand()
    // $total = max($x, $y, $z);
    // Random number between the range.
    $total = rand(1,6);
    
    echo $total;
?>