<?php 

	require_once("../classes/dbo.class.php");

	$q = "delete from categories where c_id = '".$_GET["cid"]."'";

	$db->dml($q);

	header("location: categories.php");


?>