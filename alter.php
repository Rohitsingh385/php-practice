<?php

$mysqli = new mysqli('localhost','root','','phptutorial');

if($mysqli){
	$sql = "alter table `data` add email VARCHAR(100)";
	$queryexecute = mysqli_query($mysqli, $sql);
	if($queryexecute){
		echo "column drop";
	}else{
		die(mysqli_error($mysqli));
	}
}else{
		die(mysqli_error($mysqli));
	}
?>