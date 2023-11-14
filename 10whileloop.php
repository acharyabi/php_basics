Example:1
<?php
    // while loop = do some code infinitely while
    // some condition remains true.
    $counter=0;
    
    while($counter <= 10){
        $counter++;
        echo $counter . "<br>";
    }
?>

Example:2
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type = "submit" name="start" value="start">    
        <input type = "submit" name="stop" value="stop">
        
</form>
</body>
</html>

<?php
    // while loop = do some code infinitely while
    // some condition remains true.
    $seconds =0;
    $running= true;

    
    while($running){
        if  (isset($_POST["stop"])){
            $running=false;
        }
        elseif(isset($_POST["start"])){
            $running=true;
       
            // Wait 1 seconds.
            $seconds++;
            echo "{$seconds}<br>";
        }
    }

?>