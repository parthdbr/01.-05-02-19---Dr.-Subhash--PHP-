<?php 

	$link = mysqli_connect("localhost", "root", "", "video_site") or die( mysqli_connect_error() );

	$q = "select * from feedbacks order by f_name";

	$res = mysqli_query($link, $q) or die(mysqli_error($link));


	while ( $row = mysqli_fetch_assoc($res) )
	{

		echo "Name: " . $row["f_name"]."<br>";
		echo "Email: " . $row["f_email"]."<br>";
		echo "Sub: " . $row["f_sub"]."<br>";
		echo "<hr>";

	}


?>