<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Using the same file name as we have php in same file.Trying get/post. -->
    <!-- Get gives out user name and password while post doesn't -->
    <form action="index.php" method="post">    
        <label>username</label><br>
        <input type="text" name="username"><br>
        <label>password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
    echo "{$_POST["username"]}<br>";
    echo "{$_POST["password"]}<br>";
    // Acts like array.
    //$_GET, $_POST = special variables used to collect data 
    //                from an HTML form data is sent to the file
    //                in the action attribute of <form>
    //                <form action="some_file.php" method="get">
?>