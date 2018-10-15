<?php
	require "menu.php";
?>

	<main>
		<h1>Signup</h1>
		<?php
			if (isset($_GET["error"])) {
				if (isset($_GET["error"]) == "emptyfields") {
					echo '<p>Fill in all the fields!</php>';
				}
				else if (isset($_GET["error"]) == "invaliduidemail") {
					echo '<p>Invalid username and e-mail!</php>';
				}
				else if (isset($_GET["error"]) == "invaliduid") {
					echo '<p>Invalid username!</php>';
				}
				else if (isset($_GET["error"]) == "invalidmail") {
					echo '<p>Invalid e-mail!</php>';
				}
				else if (isset($_GET["error"]) == "passwordcheck") {
					echo '<p>Your passwords do not match!</php>';
				}
				else if (isset($_GET["error"]) == "useremailtaken") {
					echo '<p>Username/Email is already taken!</php>';
				}
			}
			else if (isset($_GET["signup"]) == "success") {
				echo '<p>Signup successfull!</php>';
			}
		?>
		<form action="../php/login/signup.inc.php" method="post">
			<input type="text" name="uid" placeholder="Username">
			<input type="text" name="mail" placeholder="E-Mail">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Repeat password">
			<button type="submit" name="signup-submit">Signup</button>
		</form>
	</main>

<?php
	require "footer.php";
?>