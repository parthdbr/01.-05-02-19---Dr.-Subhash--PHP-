<?php 

	require_once("classes/dbo.class.php");

	$q = "insert into users (u_name, u_email, u_pwd, u_phone) values ('".$_POST["name"]."','".$_POST["email"]."','".md5($_POST["pwd"])."','".$_POST["phone"]."')";


	$db->dml($q);

	header("location: register.php");
?>