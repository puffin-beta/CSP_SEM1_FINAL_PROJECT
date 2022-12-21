<?php
	include("contact.php");
	$cmd = "";
	$cmd .= "create database if not exists response;";
	$cmd .= "use response;";
	$cmd .= "create table if not exists response_table(
		subName varchar(50),
		email varchar(200),
		feedback varchar(1000)
	);";
	$cmd .= "insert into response_table(subName,email,feedback)
			values(
				$name,
				$email,
				$concern
			);";
?>