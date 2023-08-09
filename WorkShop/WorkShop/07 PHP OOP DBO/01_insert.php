<?php 

	require_once('classes/dbo.class.php');

	$q = "insert into categories (c_name) value ('Funny')";

	$db->dml($q);	

?>