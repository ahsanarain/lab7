<?php
$a="A00";
$arr=str_split($a);
for ($i=1; $i <=5 ; $i++) { 
	$b=$arr[2]+$i;
	echo $arr[0].$arr[1].$b."<br>";
}
?>