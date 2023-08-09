<?php
	
	$s = [];

	$s["name"] = "Raj";

	$s["phone"] = [];
	$s["phone"][0] = "989898"; 
	$s["phone"][1] = "897777"; 

	$s["city"] = "Mars";

	//$s["marks"] = ["p"=>33, "c"=>44, "m"=>55];
	$s["marks"]["prelim"]["p"] = 44;
	$s["marks"]["prelim"]["c"] = 45;
	$s["marks"]["prelim"]["m"] = 46;
	$s["marks"]["final"]["p"] = 47;
	$s["marks"]["final"]["c"] = 48;
	$s["marks"]["final"]["m"] = 49;


	print_r($s);

?>