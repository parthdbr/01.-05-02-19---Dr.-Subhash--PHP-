<?php 

	//Todo: form validation

	//Data Insert

	require_once("classes/dbo.class.php");

	$q = "insert into feedbacks (f_name, f_email, f_sub, f_msg) values('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["subject"]."', '".$_POST["msg"]."')";

	$db->dml($q);

	echo "Done!";
	

?>