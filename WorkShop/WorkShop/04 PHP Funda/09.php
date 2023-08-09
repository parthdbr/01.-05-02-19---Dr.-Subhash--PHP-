<?php
	
	$a = [];

	$a[0] = 2;
	$a[1] = "Hello";
	$a[2] = 3.3;
	$a[4] = 55;

	//Direct Acess
	echo $a[2]." ".$a[4];
	echo "<hr>";

	//For Loop
	for($i=0; $i<5; $i++) {
		echo $a[$i]."<br>";
	}
	echo "<hr>";

	//Foreach
	foreach($a as $x) {
		echo $x. "<br>";
	}
	echo "<hr>";

	//Foreach with ID
	foreach($a as $x=>$y) {
		echo $x. " " . $y . "<br>";
	}
	echo "<hr>";

	//Quick Print
	print_r($a);

?>