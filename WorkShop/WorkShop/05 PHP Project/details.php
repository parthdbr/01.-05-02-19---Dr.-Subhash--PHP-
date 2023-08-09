<?php 
	
	if( ! isset($_GET["vid"]) || ! ctype_digit($_GET["vid"]) ) {
		header("location: index.php"); exit;
	}

	require_once('classes/dbo.class.php');

	$vq = "select * from videos, categories, users where v_u_id = u_id and v_c_id = c_id and v_id = '".$_GET["vid"]."'";

	$vres = $db->get($vq);

	if( mysqli_num_rows($vres) == 0 ) {
		header("location: index.php"); exit;
	}

	$vrow = mysqli_fetch_assoc($vres);


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
			<h2 class="title"><?php echo $vrow ["v_title"] ?></h2>
			
			 <video width="100%" height="240" controls>
				<source src="<?php echo $vrow["v_file"] ?>" type="video/mp4">
			
			</video> 

			<?php echo $vrow["v_desc"] ?>

			<hr size="1" color="#e1e1e1">

			Uploaded by <b><?php echo $vrow["u_name"] ?></b> in <b><?php echo $vrow["c_name"] ?></b>

		</div>
	</div>
		
	</div>
	<div id="footer">
		<?php require_once("inc/footer.inc.php") ?>	
	</div>
</div>
</body>
</html>
