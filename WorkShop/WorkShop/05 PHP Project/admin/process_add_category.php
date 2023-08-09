<?php 

	require_once('../classes/dbo.class.php');

	$q = "insert into categories (c_name) values ('".$_POST["name"]."')";

	$db->dml($q);

	header("location: categories.php");

?>