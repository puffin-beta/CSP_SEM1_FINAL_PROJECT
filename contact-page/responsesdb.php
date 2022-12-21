<?php
	// SQL for creating response log
	$com = " ";
	$com = "create database if not exists response;";
	$com .= "use response;";
	$com .= "create table if not exists response_table(
		subName varchar(50),
		email varchar(200),
		feedback varchar(1000)
	);";
?>