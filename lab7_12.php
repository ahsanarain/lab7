<?php
$arr=array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");
asort($arr);
foreach ($arr as $value) {
	echo $value."<br>";

}
echo "<br>";
ksort($arr);
foreach ($arr as $X => $value1) {
	echo "KEY=".$X."VALUE=".$value1."<br>";

}
echo "<br>";
arsort($arr);
foreach ($arr as  $value2) {
	echo "VALUE=".$value2."<br>";

}
echo "<br>";
krsort($arr);
foreach ($arr as $X => $value3) {
	echo "KEY=".$X."VALUE=".$value3."<br>";

}
?>