<?php

	require_once("classes/dbo.class.php");
	$inc_cat_q = "select * from categories";
	$inc_cat_res = $db->get($inc_cat_q);

?><div id="box1">
			<h2 class="title">Categories</h2>
			<ul class="style1">
				<?php 

					while($inc_cat_row = mysqli_fetch_assoc($inc_cat_res)){

						echo '<li><a href="list.php?cid='.$inc_cat_row["c_id"].'">'.$inc_cat_row["c_name"].'</a></li>';

					}

				?>
		
			</ul>
		</div>