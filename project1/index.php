<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

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
<header class="header">
        <a href="#" class="logo">
            <ion-icon name="cafe"></ion-icon>Kopilo
        </a>
    <nav class="nav">
        <a href="index.php">Home</a>
        <a href="abouts.php">About</a>
        <a href="#">Menu</a>
        <a href="#">Contact Us</a>
        <a href="#">My Account</a>
		<a href="logout.php">Logout</a>
    </nav>
    </header>

	<section class="home">
    <div class="content">
	Hello, <?php echo $user_data['user_name']; ?>
        <h2>Start your day with a cup of the Illest Coffee of Iloilo</h2>
        <p>The rich aroma fills the air, instantly perking up the senses, while the first sip brings a gentle jolt of energy,
        coaxing the mind out of its slumber. As the warmth spreads, it's as though the world gradually comes into focus, and the
        day's possibilities begin to take shape. The ritualistic act of brewing and savoring that first sip allows for a moment
        of stillness amidst the impending hustle, a tranquil pause to gather one's thoughts before diving into the day ahead.</p>
    </div>
	</section>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>