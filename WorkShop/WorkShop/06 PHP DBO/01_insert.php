<?php 

	$link = mysqli_connect("localhost", "root", "", "video_site") or die( mysqli_connect_error() );


	$q = "insert into feedbacks (f_name, f_email, f_sub, f_msg) values('Sunil', 'sunil@rajni.com', 'Hey!', 'How are you')";

	mysqli_query($link, $q) or die( mysqli_error($link) );

	echo "Done!";
?>