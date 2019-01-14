<?php
$arr=array(1,2,3,4);
array_push($arr, "$");
array_shift($arr);
for ($i=0; $i <sizeof($arr) ; $i++) { 
	echo $arr[$i]."<br>";
}
?>