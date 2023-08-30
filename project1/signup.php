<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="pics\styles.css">
</head>
<body>


	<header class="header">
        <a href="index.php" class="logo">
            <ion-icon name="cafe"></ion-icon>Kopi
        </a>
    </header>

	<section class="home">
	<div class="wrapper-login">
		<form method="post">
			 <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="user_name" required>
                    <label>Enter your name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Enter your password</label>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox">
                        I agree to terms and conditions
                    </label>
                    <a href="#"> Terms and conditions</a>
                </div>
                <button type="submit" class="btn">
                    Sign Up
                </button>
                <div class="register-link">
                    <p>Already a member? <a href="login.php">Log In Here!</a></p>
                </div>
		</form>
	</div>
	<div class="content">
            <h2>Join us in our Kopi Ventures!</h2>
            <p>By joining our club, you will receive a monthly care package 
                from  our team which contains various coffee products.
            </p>
        </div>
</section>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>