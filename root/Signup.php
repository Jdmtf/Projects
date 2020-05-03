<?php include('php/header.php'); ?>


<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--says edge of website should follow edge of device, initial scale means the site should scale the content -->
</head>

<main>



</main>


<body>
	<div class="login-form" align="center">
		<section class="section-defult">
			<h1>Signup</h1>
			<?php
			if (isset($_GET['error'])) {
				if ($_GET['error'] == "emptyfields") {
					echo '<p class="signuperror">Fill in all fields!</p>';
				} else if ($_GET['error'] == "invaliduidmail") {
					echo '<p class="signuperror">Invalid username and email!</p>';
				} else if ($_GET["error"] == "invaliduid") {
					echo '<p class="signuperror">Invalid username!</p>';
				} else if ($_GET["error"] == "invalidmail") {
					echo '<p class="signuperror">Invalid email!</p>';
				} else if ($_GET["error"] == "passwordcheck") {
					echo '<p class="signuperror">Passwords do not match!</p>';
				} else if ($_GET["error"] == "usernametaken") {
					echo '<p class="signuperror">Username in user!</p>';
				}
			}

			?>
			<form action="includes/signup.inc.php" method="post">
				<div class=form>
					<input type="text" name="uid" placeholder="Username">

					<input type="text" name="mail" placeholder="E-mail">

					<input type="password" name="pwd" placeholder="Password">

					<input type="password" name="pwd-repeat" placeholder="Repeat password">
					<br>
					<button type="submit" name="signup-submit">Signup</button>
				</div>
			</form>

		</section>
	</div>
</body>

</html>