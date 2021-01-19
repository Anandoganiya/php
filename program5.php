<?php
$number = 5;

function fact($number){
	if($number == 0)
       return 1;
       else
       return $number*fact($number-1);
}
echo "factorial of $number is " ,fact($number);
?>