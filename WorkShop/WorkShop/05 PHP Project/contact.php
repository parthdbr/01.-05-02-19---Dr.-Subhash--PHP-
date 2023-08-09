<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
			<h2 class="title">Contact</h2>

			<form action="process_contact.php" method="post">
				
				Name <br>
				<input type="text" name="name">
				<br><br>

				Email <br>
				<input type="text" name="email">
				<br><br>

				Subject <br>
				<input type="text" name="subject">
				<br><br>

				Message <br>
				<textarea name="msg"></textarea>
				<br><br>

				<input type="submit" value="Send Feedback">


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
