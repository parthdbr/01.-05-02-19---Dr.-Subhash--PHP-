<?php

	$link = mysqli_connect("localhost", "root", "", "video_site") or die (mysqli_connect_error());

	$q ="select * from feedbacks order by f_id desc";

	$res = mysqli_query($link, $q) or die( mysqli_error($link) );

?><!DOCTYPE html>
<html>
<body>
	Select Item <br>


	<select>
		<?php 
			while($row = mysqli_fetch_assoc($res)) {
				echo '<option value="'.$row['f_id'].'">'.$row["f_name"].'</option>';
			}
		?>
		
	</select>
</body>
</html>