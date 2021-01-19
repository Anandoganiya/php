<?php
//for Indexed array
$cars_name = array("Volvo", "BMW", "Toyota");
//for Associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//for multidimensional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

print_r($cars_name);
echo "<br><br>";
print_r($age);
echo "<br><br>";
print_r($cars);
?>