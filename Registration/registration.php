

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'phpcon.php';
if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']); 


// Encrpting password 

$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

// email query to see data is not available
$emailquery = "select * from registration where email ='$email'";
$query = mysqli_query($con,$emailquery);

//check if mail exist more than 1 time
$emailcount = mysqli_num_rows($query);

//insert query and validation

if($emailcount > 0){
    echo "email already exists";
}else{
    if($password == $cpassword){
        $insertquery = "insert into registration (username,email,mobile,password,cpassword) value ('$username','$email','$mobile','$pass','$cpass')";
        $iquery = mysqli_query($con,$insertquery);
        if($con){
            ?>
            <script>
                alert("inserted Succesfully..");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("failed")
            </script>
            <?php
        }
    }else {
        ?>
         <script>
            alert("passowrd not matched")
        </script>
        <?php 
    }
}
}

?>


    <div class="container">
        <form class="signup-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <h2>Sign Up</h2>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="mobile" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Re-enter Password</label>
                <input type="password" id="confirm-password" name="cpassword" required>
            </div>
            <button type="submit" name="submit">Sign Up</button>
            <p>Already have an account?<a href="login.php">Login here</a></p>
        </form>
    </div>
</body>
</html>
