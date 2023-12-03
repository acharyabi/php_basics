<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo 'Hello World';?>
        <?= 'It\'s the same Hello World';?>
    </h1>
    <p>
        My first paragraph.
    </p>
    <?php
        // Seeing dynamic changes in paragraph.
        // But we generally diffrentiate business and visuals logic.
        $x = 10;
        $y = 5;

        echo '<p>' . $x .','.$y.'</p>';
        // Don't use nested multiline cmn't this will create error.
    #comment wouldnot comments the closing?>
</body>
</html>