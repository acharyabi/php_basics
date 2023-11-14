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
        <label>radius: </label><br>
        <input type="text" name="r"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $r= $_POST["r"];
    $circumference = null;
    $area= null;
    $volume = null;

    //Circumference:
    $circumference= 2 * pi() * $r;
    $circumference= round($circumference,2);
    // Area:
    $area= pi()* pow($r,2);
    $area= round($area,2);
    
    // Volume
    $volume= 4/3 * pi() * pow($r, 3);
    $volume = round($volume, 2);

    echo "The radius is: {$r}.<br>";
    echo "The circumference is: {$circumference} cm.<br>";
    echo "The area is: {$area} sq.cm.<br>";
    echo "The volume is: {$volume} cubic.cm.<br>";
?>