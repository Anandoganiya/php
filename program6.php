<?php
function reference(&$var){ //passing by reference
    $var++;
}
$number = 5;
reference($number);
echo "Number is incremented to $number";

?>