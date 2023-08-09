<?php
	
	$s = [];

	$s["name"] = "Raj";
	$s["phone"] = "9898989898";
	$s["city"] = "Mars";

	foreach($s as $id=>$info) {
		echo $id. " " . $info ."<br>";
	}

?>