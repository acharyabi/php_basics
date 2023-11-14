<!-- Variables -->
<?php
    //Displaying the variable in the name format.
    //Strings.
    $name="Abinash Acharya";
    $food="Pizza";
    $email="fake123@gmail.com";
    echo "Hello {$name}.<br>{$name} likes {$food}.<br>";
    echo "Your email is {$email}<br>";

    //Integer
    $age=21;
    $users=2;
    $quantity=3;
    echo"You are {$age} years old.<br>";
    echo"There are {$users} online.<br>";
    echo"You would like to buy {$quantity} items. <br>";

    //Float
    $gpa=2.5;
    $price=5.99;
    $tax_rate=5.1;
    echo"Your GPA is {$gpa}.<br>";
    echo "Your pizza is \${$price}.<br>";
    echo "Your tax rate is: {$tax_rate}%.<br>";

    //Boolean
    $employed=false;
    $online=true;
    $for_sale=true;

    echo"Online status: {$online} <br>";
    //The false value isn't displayed.
    echo"Employed: {$employed} <br>";
    
    //Mixing variables.
    echo "You have ordered {$quantity} x {$food}s.<br>";
    $total= $quantity * $price;
    echo"Your total is \${$total}"; 
?> 