<?php 
//define array
$cities=array("India"=>"Delhi",
			 "United States"=>"Washington",
			 "United Kingdom"=>"London");

//create an ArrayIterator Object
$iterator= new ArrayIterator($cities);
print_r($iterator)
?>