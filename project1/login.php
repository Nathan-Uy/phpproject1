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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pics\styles.css">
</head>
<body>

<section class="home">
	<div class="wrapper-login">
		<form method="post">
			<div class="input-box">
				<span class="icon">
					<ion-icon name="person"></ion-icon>
				</span>
				<input type="text" name="user_name" required>
				<label>Enter your username</label>
			</div>

			<div class="input-box">
				<span class="icon">
					<ion-icon name="lock-closed"></ion-icon>
				</span>
				<input type="password" name="password" required>
				<label>Enter your password</label>
			</div>

			<div class="remember-forgot">
                <label>
                    <input type="checkbox">
                    Keep me signed in
                </label>
                <a href="#">Forgot Password?</a>
            </div>
			
			<button type="submit" class="btn" value="Login">
                    Login
            </button>
                <div class="register-link">
                    <p>Not yet a member? <a href="signup.php">Sign Up Here!</a></p>
                </div>
		</form>
	</div>
	<div class="content">
            <h2>Welcome to the Kopilo Club</h2>
            <p>The home of coffee conoissures and enthusiasts of Iloilo
			have gathered in this exclusive Club. <br>
			Kindly enter your credentials to enjoy.
            </p>
        </div>
</section>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>