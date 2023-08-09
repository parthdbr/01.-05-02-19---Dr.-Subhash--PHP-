<?php 
	
	//Validation


	//File Upload
	
	$thumb_path = "uploads/".rand(111111111,999999999)."_".$_FILES["thumb"]["name"];
	move_uploaded_file($_FILES["thumb"]["tmp_name"], $thumb_path);
	
	$video_file_path = "uploads/".rand(111111111,999999999)."_".$_FILES["video_file"]["name"];
	move_uploaded_file($_FILES["video_file"]["tmp_name"], $video_file_path);


	//Data Entry
	
	require_once('classes/dbo.class.php');

	$q = "insert into videos (
			v_c_id,
			v_u_id,
			v_title,
			v_desc,
			v_thumb,
			v_file
		) values (
			'".$_POST["cat"]."',
			'1',
			'".$_POST["title"]."',
			'".$_POST["desc"]."',
			'".$thumb_path."',
			'".$video_file_path."'
		)";

	$db->dml($q);

	header("location: upload.php");


?>