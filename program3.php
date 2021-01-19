<?php
$odd = 1;
$sum =0;
$sum_of_square = 0;

for($i=0;$i<6;$i++)
{
    echo "odd numbers is $odd <br>";
    $sum += $odd;
    $sum_of_square += ($odd * $odd);
    $odd += 2;   
}
echo "<br> sum of odd number is $sum <br>";
echo "sum of square of odd number is $sum_of_square <br>";
?>