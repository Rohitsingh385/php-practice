<?php

$mysqli = new mysqli('localhost','root','');

if($mysqli){
	$sql = "create database `phptutorial`";
	$queryexecute=mysqli_query($mysqli,$sql);
	if($queryexecute){
		echo "successfully create db";
	}
}else{
	die(mysqli_error($mysqli));
}

?>