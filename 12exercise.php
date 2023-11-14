<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country:</label><br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
</body>
</html>
<?php
// associative array =An array made of key => value pairs.
// countries => capitals
// id => username 
// item => price
    $capitals = array(  "USA"=>"Washington D.C.",
                        "Japan"=>"Kyoto",
                        "South Korea"=>"Seoul",
                        "India"=>"New Delhi",
                        "Nepal"=>"Kathmandu",
                        "China"=>"Bejing"
                    );
    $country = $_POST["country"];             
    $capital=$capitals[$_POST["country"]];
    echo"The capital of {$country} is {$capital}.";
   ?>
