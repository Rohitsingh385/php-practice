<?php

$mysqli = new mysqli('localhost','root','','phptutorial');

if($mysqli){
	$sql = "select * from `data`";
	$queryexecute = mysqli_query($mysqli, $sql);

	if($queryexecute){
		$numRow = mysqli_num_rows($queryexecute);
		if($numRow>0){
			while($row = mysqli_fetch_assoc($queryexecute)){

				?>
				<table>
					<tr>
						<th>
							id
						</th>
						<th>
							username
						</th>
						<th>
							email
						</th>
					</tr>

					<tr>
						<td><?php echo $row['id'];?> </td>
						<td><?php echo $row['username'];?> </td>
						<td><?php echo $row['email'];?> </td>
					</tr>
				</table>
				<?php
			}
		}
	}
}

?>