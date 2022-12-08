<!DOCTYPE html>
<html>
	<head></head>
	<style>
		form{
			background-color: green;
		}
		span{
			color: red;
		}
	</style>
	<body>
		<form action="action.php" method="POST">
			<h1>Contact Form</h1>
			<span>* required</span>
			<p>Name: <span>*</span></p><input type="text" name="name" required></input>
			<p>Email: <span>*</span></p><input type="text" name="email" required></input>
			<p>Concern/Feedback: <span>*</span></p><textarea name="concern" rows="10" cols="25"></textarea><br/>
			<input type="submit" value="submit"></input>
		</form>
	</body>
</html>