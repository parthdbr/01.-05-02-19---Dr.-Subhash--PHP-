<?php

	$link = mysqli_connect("localhost", "root", "", "video_site") or die (mysqli_connect_error());

	$q ="select * from feedbacks order by f_id desc";

	$res = mysqli_query($link, $q) or die( mysqli_error($link) );

?><!DOCTYPE html>
<html>
<body>

	<center><h1>Feedbacks</h1></center>

	<table width="600" border="0" align="center" cellpadding="5">
		
		<tr>
			
			<td width="25%">Name</td>
			<td width="25%">Email</td>
			<td width="25%">Subject</td>
			<td width="25%">Message</td>

		</tr>

		<tr>
			
			<td colspan="4"><hr color="black" size="2"></td>

		</tr>
		
		<?php

			while($row = mysqli_fetch_assoc($res)) {

				echo '
					<tr>
			
						<td align="center">'.$row["f_name"].'</td>
						<td>'.$row["f_email"].'</td>
						<td>'.$row["f_sub"].'</td>
						<td>'.$row["f_msg"].'</td>
					

					</tr>
				';

			}

		?>

		<tr>
			
			<td colspan="4"><hr color="black" size="1"></td>

		</tr>

	</table>

</body>
</html>