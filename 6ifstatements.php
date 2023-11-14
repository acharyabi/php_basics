<!-- If statements. -->
<?php
   $age = 101;
   $adult = true;

    if($age>=100){
        echo"You are too old to enter.";
    } 
   elseif($age >=18){
        echo"You may enter this site.";
    }
    elseif($age == 0){
        echo"You were just born.";
    }
    elseif($age <=0){
        echo"That wasn't a valid age.";
    }
    else{
        echo"You must be above 18 to enter this site.";
   }

   if($adult==true){
    echo"<br>You may enter the site.";
   }
   else{
    echo"<br>You must be an adult to enter the site.";
   }
   
?>