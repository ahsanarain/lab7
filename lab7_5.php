<?php
for ($i=0; $i <=20 ; $i++) { 
	
	if ($i==12) goto odd;
echo "even".$i."<br>";
	$i++;	
}
odd:
for ($j=1; $j<=9 ; $j++) { 

	echo "odd".$j."<br>";
	$j++;
}
?>
