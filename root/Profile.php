<?php include('php/header.php');

?>

<body>
	
<br>
<br>
<br>

<br>
	<article class="profile">

		<?php

		if (isset($_SESSION['userUId'])) {
			echo '<h1> Welcome to your profile page ', $_SESSION['userUId'], '</h1>';
			
			echo '<p> Here are you recent purchases';
		} else {
			echo '<p class="login-status">You are logged out!</p>';
		}

		if (isset($_GET['logout=success'])) {
			echo '<script>alert("Logout was successful")</script>';
		}
		
	

		?>

	</article>


</body>

</html>