<!-- Over time gets 1.5 the total pay and the weekly pay for 40 hrs is $50 -->
<?php
    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <=0){
        $weekly_pay=0;
    }
    elseif($hours <=40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40)+($hours-40)*($rate*1.5);
    }
    echo "You made \${$weekly_pay} this week.";
?>