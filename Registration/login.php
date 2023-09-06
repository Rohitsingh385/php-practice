<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

include 'phpcon.php';
if(isset($_POST['submit'])){
    //storing the var
    $email = $_POST['email'];
    $password = $_POST['password'];

    // a query to search email from db
    $email_search = "select * from registration where email = '$email'";
    $query = mysqli_query($con,$email_search);

    //counting the email to check if user exists or not user >0
    $email_count = mysqli_num_rows($query);   

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];

        /* using the password_verify function to check if user enter pswd match the hash pswd store in db */
        $pass_decode = password_verify($password,$db_pass);

        if($pass_decode){
            ?>
            <script>
                location.replace("home.php");
            </script>
            <?php
        }else{
            echo "Incorrect password";
        }

    }else{
        echo "Inccorect email";
    }
}
?>

<div class="container">
        <form class="signup-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <h2>Login In</h2>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">LOGIN IN</button>
            <p>don't have account?<a href="registration.php">Register here</a></p>
        </form>
    </div>
    
</body>
</html>