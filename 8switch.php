<!-- This is an in efficient approach
/*
//switch = replacement to using many elseif statements.
$grade = "A";
if($grade =="A"){
    echo"You did great.";
}
elseif($grade == "B"){
    echo"You did good.";
}
elseif($grade == "C"){
    echo"You did okay.";
}
elseif($grade == "D"){
    echo"You did poorly.";
}
elseif($grade == "F"){
    echo"You did failed.";
}
else{
    echo"{$grade}is not a valid grade.";
}*/
-->
<!-- Using Switch. -->
<?php
    $grade = "B";
    switch($grade){
        // Don't forget the break statement.
        case "A":
            echo"You did great.";
            break;
        case "B":
            echo"You did good.";
            break;
        case "C":
            echo"You did okay.";
            break;
        case "D":
            echo"You did poorly.";
            break;
        case "F":
            echo"You did failed.";
            break;
        default:
            echo"{$grade}is not a valid grade.";
    }
?>