<?php
$a;
for($a=1;$a<=50;$a++){
	if($a%3==0 && $a%5==0){
		echo "struck star <br>";
	}
	else if($a%3==0){
	echo "star <br>";
	}
	else if($a%5==0){
    echo"struck <br>";
	}
	else{
		echo $a ."<br>";
	}
}


?>