<?php

$mysqli = new mysqli('localhost','root','');

if($mysqli){
	echo "connection succes";
}else{
	die(mysqli_error($mysqli));
}

?>