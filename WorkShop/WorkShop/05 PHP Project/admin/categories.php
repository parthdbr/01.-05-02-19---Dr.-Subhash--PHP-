<?php

	require_once("../classes/dbo.class.php");
	$cat_q = "select * from categories";
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
		
	<div id="content">
		<div id="cbox1">
			<h2 class="title">Add Category</h2>
			
			<form action="process_add_category.php" method="post"> 

				Name <br>
				<input type="text" name="name">
				<input type="submit" value="save">

			</form>

		</div>

		<div id="cbox1">
			<h2 class="title">Browse Categories</h2>
		
			<?php

				while($cat_row = mysqli_fetch_assoc($cat_res)){
					echo '
						<a href="process_del_category.php?cid='.$cat_row["c_id"].'"><img src="images/cross.png"></a> '.$cat_row["c_name"].'
						<hr size="1" color="#e1e1e1">
					';
				}

			?>

		</div>
	</div>
		
	</div>
	<div id="footer">
		<?php require_once("inc/footer.inc.php") ?>	
	</div>
</div>
</body>
</html>
