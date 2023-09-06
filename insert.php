<?php

$mysqli = new mysqli('localhost', 'root','','phptutorial');

if($mysqli){
	$sql = "insert into `data`(username,email) values ('rohit1','rk200@gmail.com')";

	$executequery = mysqli_query($mysqli,$sql);
	if($executequery){
		echo "successfully inserted data";
	}else{
		die(mysqli_error($mysqli));
	}

}
else{
		die(mysqli_error($mysqli));
	}
?>