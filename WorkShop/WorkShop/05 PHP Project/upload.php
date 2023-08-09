<?php 

	require("classes/dbo.class.php");

	$cat_q = "Select * from categories";

	$cat_res = $db->get($cat_q);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php require_once('inc/head.inc.php') ?>	
</head>
<body>
<div id="wrapper" class="container">
	<div id="header">
		<div id="logo">
			<?php require_once('inc/logo.inc.php') ?>
		</div>
		<div id="menu">
			<?php require_once('inc/menu.inc.php') ?>
		</div>
		</div>
	<div id="page">

	<div id="sidebar">
		<?php require_once("inc/sidebar.inc.php") ?>
	</div>
		
	<div id="content">
		<div id="cbox1">
			<h2 class="title">Upload</h2>
			<form action="process_upload.php" method="post" enctype="multipart/form-data">
				
				Category <br>
				<select name="cat">
					<?php
						while($cat_row = mysqli_fetch_assoc($cat_res)) {
							echo '<option value="'.$cat_row["c_id"].'">'.$cat_row["c_name"].'</option>';
						}
					?>
				</select>
				<br><br>

				Title <br>
				<input type="text" name="title">
				<br><br>

				Description <br>
				<textarea name="desc"></textarea>
				<br><br>

				Thumb <br>
				<input type="file" name="thumb">
				<br><br>
				
				File <br>
				<input type="file" name="video_file">
				<br><br>

				<input type="submit" value="Upload Video">


			</form>
		</div>
	</div>
		
	</div>
	<div id="footer">
		<?php require_once("inc/footer.inc.php") ?>	
	</div>
</div>
</body>
</html>
