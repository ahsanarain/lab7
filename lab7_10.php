<?php
$a=array("a"=>1,"b"=>"green","c"=>"red");
$a1=array("a"=>"red","b"=>6,"c"=>"red");
$c=array_unique($a);
$b=array_unique($a1);
foreach ($c as $value) {
	echo $value."<br>";
}
foreach ($b as $value) {
	echo $value."<br>";
}

?>