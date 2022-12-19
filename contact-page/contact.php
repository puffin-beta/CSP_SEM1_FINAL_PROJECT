<!DOCTYPE html>
<html>
	<head></head>
	<style>
		span{
			color: red;
		}
	</style>
	<script src="contact.js" type="text/javascript"></script>
	<body>
		<?php
			function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			$isValid = False;
			if ($_SERVER["REQUEST_METHOD"] == 'POST'){
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$emailErr = "";
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format";
					$isValid = False;
				}
				else{
					$isValid = True;
				}
				$concern = test_input($_POST["concern"]);
				if ($isValid == True){
					header("Location: action.php");
				}
				
			}
			else{
				$emailErr = '';
			}
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
			<h1>Contact Form</h1>
			<span>* required</span>
			<p>Name: <span>*</span></p><input type="text" name="name" required></input>
			<p>Email: <span>* <?php echo $emailErr; ?></span></p><input type="text" name="email" required></input>
			<p>Concern/Feedback: <span>*</span></p><textarea name="concern" rows="10" cols="25"></textarea><br/>
			<input type="submit" value="submit"></input>
		</form>
		<button type="button" onclick="back_to_home()">Back to Home >>></button>
	</body>
</html>