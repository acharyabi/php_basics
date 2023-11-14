<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Using the same file name as we have php in same file.Trying get. -->
    <form action="index.php" method="get">    
        <label>quantity: </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];
    $total = null;
    
    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";
    // Acts like array.
    //$_GET, $_POST = special variables used to collect data 
    //                from an HTML form data is sent to the file
    //                in the action attribute of <form>
    //                <form action="some_file.php" method="get">
?>
<!-- Using GET:http://localhost/learn_assement/index.php?quantity=30 -->