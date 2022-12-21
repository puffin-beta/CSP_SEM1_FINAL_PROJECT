<!DOCTYPE html>
<html>
	<head></head>
	<style>
		/* Makes the span element red, showing that it is required
		for form submission */
		span{
			color: red;
		}
	</style>
	<script src="contact.js" type="text/javascript"></script><!-- for the back_to_home() function -->
	<body>
		<?php
			/* most form functionality (test_input function, filter_var function)
			taken from w3schools. Link: https://www.w3schools.com/php/php_form_validation.asp */
			
			// Removes any special characters like < and > to avoid php and js exploits
			function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			//Boolean to see if form is submittable (default is False)
			$isValid = False;
			
			// If the form is submitted
			if ($_SERVER["REQUEST_METHOD"] == 'POST'){
				// Gather form input
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				//Prepares error message
				$emailErr = "";
				// check if e-mail address is well-formatted
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format";
					$isValid = False;
				}
				else{
					// Everything is typed properly
					$isValid = True;
				}
				$concern = test_input($_POST["concern"]);
				if ($isValid == True){
					// Redirects to thank you page.
					header("Location: action.php");
				}
				
			}
			else{
				$emailErr = '';
			}
		?>
		<!-- Feedback form. Span element used to highligh certain text red (like the required message and aterisk -->
		<!-- "required" attribute used to make certain fields required for submission -->
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