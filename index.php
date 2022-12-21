<!DOCTYPE html>
<!--Ranjith Saravanan, Rajveer Kharod, Bruce Rili
	Website
	Period 3
	Our website is a encyclopedia for the video game Minecraft, mainly focusing on the combat aspect of the game.-->
<html>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
	<link href="index.css" rel="stylesheet">
	<head>
		<title>Minecraft Combat Guide</title>
	</head>
	<header>
		<img src="background.png" class="bg">
		<h1>Minecraft Combat Guide</h1>
		<p style="color:white; text-align:center;">This is the Minecraft Combat guide. It contains information about the armors, weapons, mobs, and enchantments of Minecraft.</p>
	</header>
	<body>
		<?php include("menu.php"); ?><br/>
		<button type="button" onclick="loadpage()">Click ME</button>
	</body>
	<script type="text/javascript">
		function loadpage(){
			location.replace("contact-page/contact.php");
		}
	</script>
</html>
