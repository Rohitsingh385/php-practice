<?php

$mysqli = new mysqli('localhost','root','','phptutorial');

if($mysqli){
	$sql = "update `data` set `username`='goblin' where `username`='rohit1'";
	$executequery = mysqli_query($mysqli, $sql);
	if($executequery){
		echo "updation success";
	}else{
		die(mysqli_error($mysqli));
	}
}else{
		die(mysqli_error($mysqli));
	}

?>