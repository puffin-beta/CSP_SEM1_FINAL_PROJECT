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
			
			// SQL database commands
			include("responsesdb.php");
			
			/* This code is cpoied from w3schools. This chunk of code allows our
				website to process multiple SQL commands without creating numerous 
				$conn->query() statements one after the other. 
			Link to code: https://www.w3schools.com/php/func_mysqli_multi_query.asp*/
			if ($conn -> multi_query($cmd)) {
				do {
					// Store first result set
					if ($result = $conn -> store_result()) {
						while ($row = $result -> fetch_row()) {
							printf("%s\n", $row[0]);
						}
						$result -> free_result();
					}
					// if there are more result-sets, the print a divider
					if ($conn -> more_results()) {
						//printf("-------------\n");
					}
					//Prepare next result set
				} while ($conn -> next_result());
			}
			
			// Retrieve data from database
			$show = "select * from response_table";
			$results = mysqli_query($conn,$show);
			$row = mysqli_fetch_row($results);
		?>
	</body>
	<p><?php 
			// Show results
			echo $row;
		?></p>
	<!--message for email page-->
</html>