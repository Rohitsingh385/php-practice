<?php

$mysqli = new mysqli('localhost', 'root','','phptutorial');

if($mysqli){
	$sql = "CREATE TABLE `data`(`id` INT(100) NOT NULL AUTO_INCREMENT,`username` VARCHAR (100) NOT NULL, `email` VARCHAR(100) NOT NULL,PRIMARY KEY(`id`))";
	$executequery = mysqli_query($mysqli,$sql);
	if($executequery){
		echo "table creation successfully";
	}else{
		die(mysqli_error($mysqli));
	}
}
else{
		die(mysqli_error($mysqli));
	}
?>