<?php
	
	$a = [];
	$a[0] = 11;
	$a[1] = 22;
	$a[2] = 33;
	print_r($a);
	echo "<hr>";

	$b = [ 33, 44, 55 ];
	print_r($b);
	echo "<hr>";

	$c = [ 1 => 33, 4 => 44, 2=>55 ];
	$c[0] = "kaka";
	$c[4] = 77;
	print_r($c);
	echo "<hr>";

?>