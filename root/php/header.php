<?php
session_start();
?>

<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--says edge of website should follow edge of device, initial scale means the site should scale the content -->
</head>

<body>
	<div class="page">
		<nav class="menu">

			<a href='index.php'>
				<img class="logo" src="images/logo.png" alt="logo">
			</a>
			<ul class="menu__list">
				<li class="menu__group"><a href="index.php">Home</a></li>
				<li class="menu__group"><a href="Products.php" class="menu__link">Products</a></li>
				<li class="menu__group"><a href="Checkout.php" class="menu__link">Checkout</a></li>
				<li class="menu__group"><a href="Signup.php" class="menu__link">Login/Signup</a></li>

				<div class="login-container">

					<?php
					if (isset($_SESSION['userId'])) {
						echo '<form action="includes/logout.inc.php" method="post">	
						<button type="submit" name ="logout-submit">Logout </button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="post">
						<input type ="text" name="mailuid" placeholder="Username">
						<input type ="password" name="pwd" placeholder="Password">

					  	<button type="submit" name="login-submit">login</button>
						  
						  <a href="signup.php" class="signupbutton">Signup</a>
				  		</form>';
					}
					?>
				</div>




			</ul>

		</nav>
	</div>
</body>