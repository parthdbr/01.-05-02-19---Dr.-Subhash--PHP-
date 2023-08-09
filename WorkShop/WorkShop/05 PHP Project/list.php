<?php

	if( ! isset($_GET["cid"]) || ! ctype_digit($_GET["cid"]) ) {

		header("location: index.php");
		exit;

	}

	require_once("classes/dbo.class.php");
	$vq = "select * from videos, users where v_u_id = u_id and v_c_id = '".$_GET["cid"]."'";
	$vres = $db->get($vq);


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
			<h2 class="title">List of Videos</h2>
			
			<?php 

				if( mysqli_num_rows($vres) == 0 ) {
					echo '<b>Sorry!</b><br>No videos found!';
				}

			?>

			<table width="100%" border="0" cellspacing="5">
				
				<?php 

					while($vrow = mysqli_fetch_assoc($vres)) {
						echo '

							<tr>
								
								<td valign="top" width="80">
									<img src="'.$vrow['v_thumb'].'" height="60" width="60">
								</td>

								<td valign="top">
									<b>'.$vrow["v_title"].'</b> <br>
									'.substr($vrow['v_desc'], 0, 20).'... <br>
									<i>Uploaded by '.$vrow['u_name'].' | <a href="details.php?vid='.$vrow['v_id'].'">More...</a> </i>

								</td>

							</tr>

							<tr>
								
								<td colspan="2"><hr size="1" color=""></td>

							</tr>

						';
					}

				?>

				

			</table>

		</div>
	</div>
		
	</div>
	<div id="footer">
		<?php require_once("inc/footer.inc.php") ?>	
	</div>
</div>	
</body>
</html>
