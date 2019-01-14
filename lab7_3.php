<?php
// PHP program to calculate the sum of digits 
function sum($num) { 
	$sum = 0; 
	for ($i = 0; $i < strlen($num); $i++){ 
		$sum += $num[$i]; 
	} 
	return $sum; 
} 

// Driver Code 
$num = "88";
if(sum($num)==16):
echo "it's your roll no"."<br>"; 
else:
echo sum($num)."<br>";
endif;
//second method
$arr=str_split($num);
$a=$arr[0]+$arr[1];
echo $a; 
?>