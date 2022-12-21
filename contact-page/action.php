<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php
			// Set up connection
			$server = "localhost"; $username = "root"; $password = "CSP4oi%Iamgod"; //Password for school computer: "CSP401" Password for my home computer: "CSP4oi%Iamgod"
			$conn = mysqli_connect($server,$username,$password);
			if(!$conn){
				die("Could not connect to ".mysqli_connect_error());
			}
			echo "Thanks for submitting!";
			
			// Retrieve data from database
			$use = "use response;";
			$results = mysqli_query($conn,$use);
			$show = "select subName from response_table;";
			$results = mysqli_query($conn,$show);
			$row = mysqli_fetch_row($results);
		?>
	</body>
	
</html>