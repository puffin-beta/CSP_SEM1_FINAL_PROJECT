<?php
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$name = test_input($_GET['name']);
	$pattern = "/^[a-zA-Z-' ]*$/";
	if (!preg_match($pattern,$name)) {
		$nameErr = "Only letters and white space allowed";
		sleep(2);
		set_time_limit(3);
			echo "$nameErr";
		header("Location: contact.php");
	}
	else{
		echo "Thank you for sharing! Your response will be acknowledged soon.\n";
	}
?>