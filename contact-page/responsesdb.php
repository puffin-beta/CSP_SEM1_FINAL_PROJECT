<?php
	include("contact.php");
	$com = " ";
	$com = "create database if not exists response;";
	$com .= "use response;";
	$com .= "create table if not exists response_table(
		subName varchar(50),
		email varchar(200),
		feedback varchar(1000)
	);";
	$com .= "insert into response_table(subName,email,feedback)
			values(
				$name,
				$email,Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', , )' at line 3 in C:\xampp\htdocs\dashboard\2022\P3\CSP_SEM1_FINAL_PROJECT\contact-page\action.php:32 Stack trace: #0 C:\xampp\htdocs\dashboard\2022\P3\CSP_SEM1_FINAL_PROJECT\contact-page\action.php(32): mysqli->next_result() #1 {main} thrown in C:\xampp\htdocs\dashboard\2022\P3\CSP_SEM1_FINAL_PROJECT\contact-page\action.php on line 32
				$concern
			);";
?>