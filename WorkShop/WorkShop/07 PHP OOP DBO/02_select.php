<?php 
	
	require_once('classes/dbo.class.php');

	$q = "select * from feedbacks";

	$res = $db->get($q);

	while($row = mysqli_fetch_assoc($res)) {

		echo $row["f_name"]."<br>";

	}

?>