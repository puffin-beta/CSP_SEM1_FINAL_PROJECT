<!DOCTYPE html>
<!--this is the page for the -->
<html>
	<head></head>
	<style>
		span{
			color: red;
		}
		body{
			background-color: #333333;
			transition: all 0.3s;
		}
		body.lightMode {
			background-color: #fff;
			transition: all 0.3s;
		}
		#modeswitch {
			margin-left: 0%;
			background-color: white;
			box-shadow: inset 0 0 5px #f7f7f7;
			outline: none;
		}
		#modeswitch.lightMode {
			background-color: #333333;
			color: white;
		}
	</style>
	<body id="body">
		<?php
			// Remove special characters for security
			function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			// Gather input, establish connection, and run SQL commands
			$name = $email = $emailErr = $concern = '';
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
		<!-- The form for feedback -->
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
			<h1>Contact Form</h1>
			<span>* required</span>
			<p>Name: <span>*</span></p><input type="text" name="name" required></input>
			<p>Email: <span>* <?php echo $emailErr; ?></span></p><input type="text" name="email" required></input>
			<p>Concern/Feedback: <span>*</span></p><textarea name="concern" rows="10" cols="25"></textarea><br/>
			<input type="submit" value="submit"></input>
		</form>
		<!-- back to home button and light/dark mode button using external js -->
		<button type="button" onclick="back_to_home()">Back to Home >>></button>
		<button type="button" id="modeswitch" onclick="changetheme()">Light Mode</button>
	</body>
	<script src="contact.js" type="text/javascript"></script><!-- link to external js -->
</html>