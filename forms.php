<form action="forms.php" method="post">
	<div>
		<input type="text" name="username" placeholder="Enter your username">
	</div>
	<br><br>
	<div>
		<input type="email" name="email" placeholder="Enter your email">
	</div>
	<br><br>
	<button type="submit">Button</button>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$username = $_POST['username'];
	$email = $_POST['email'];

	$mysqli = new mysqli('localhost','root','','phptutorial');

	if($mysqli){
		$sql = "insert into `data` (username,email) values ('$username','$email')";
		$executequery = mysqli_query($mysqli,$sql);
		if($executequery){
			echo "success";
		}else{
			die(mysqli_error($mysqli));
		}
	}else{
			die(mysqli_error($mysqli));
		}
}

?>