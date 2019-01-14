<?php
$num=range(1, 200);
shuffle($num);
print_r($num);
if($num[array_search(16, $num)]==16){
	echo array_search(16, $num)."found";
}
?>