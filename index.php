<?php
$start_date =   null;
$end_date   =   null;
$interval   =   null;
$format     =   null;

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo "{$cars[0][0]}: In stock: {$cars[0][1]}, sold: {$cars[1][2]}<br>";
echo "{$cars[1][0]}: In stock: {$cars[1][1]}, sold: {$cars[2][2]}<br>";
echo "{$cars[2][0]}: In stock: {$cars[2][1]}, sold: {$cars[3][2]}<br>";
echo "{$cars[3][0]}: In stock: {$cars[3][1]}, sold: {$cars[0][2]}<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>

<!-- Write a program that takes four arguments - 
startdate, 
enddate
and interval (n number of days)
such that it returns an array of dates separated by the internal in any format specified in the 4th arguments.
StartDate: 2023-01-01, EndDate: 2023-01-31, Interval: 2, format:"m/d/Y"
Results:
array( array(
"01/01/2023",
"01/03/2023" ),
array( "01/04/2023", "01/06/2023"
)
...
# till 2023-01-31
) -->