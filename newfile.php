<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
	<head>
		<title>Minecraft Combat Guide</title>
	</head>
	<style>
		body{
			margin: 0;
			padding: 0;
			overflow-x: hidden;
		}
		.bg{
			position: fixed;
			top: 0;
			left: 0;
			margin: auto;
			min-width: 100%;
			min-height: 100%;
			opacity: 1;
			z-index: -1;
		}
		@media screen and (max-width: 1050px) { /* Specific to this particular image */
			.bg {
				left: 50%;
				margin-left: -500px;
			}
		}
		.table-container{
			position: static;
			max-width: 1275px;
			max-height: 280px;
			/*border: 1px solid white;*/
			display: flex;
			justify-content: center;
			margin: 0 auto;
		}
		.table-item{
			position: relative;
			display: inline-block;
			width: 25%;
			max-height: 100%;
			/*border: 1px solid white;*/
		}
		.icon-container{
			margin: 0 auto;
			width: 50%;
			/*border: 1px solid red;*/
			height: 100%;
		}
		@media screen and (max-width: 500px){
			.table-container, .table-item, .icon-container{
				display: block;
				margin: 0 auto;
			}
		}
		@font-face{
			font-family: Minecraft;
			src: url("custom-font.ttf");
		}
		* :not(.bg){
			z-index: 1;
		}
		h1{
			text-align: center;
			color: white;
			/*font-size: 3.5em;*/
			font-size: calc(64px + 6 * ((100vw - 420px) / 680));
			font-family: Minecraft;
			font-weight: lighter;
		}
		h2{
			text-align: center;
			color: white;
			font-family: Minecraft;
			font-weight: lighter;
		}
		.icon{
			display: inline-block;
			position: relative;
			width: 100%;
			height: 100%;
			opacity: 0.7;
		}
		.icon:hover{
			opacity: 1.0;
			cursor: pointer;
		}
		.contact-prompt{
			background-color: #a6a6a6;
			display: flex;
			margin: 0 auto;
			opacity: 0.5;
			width: 50%;
			position: fixed;
			bottom: 0;
		}
		button{
			margin: 0 auto;	
			position: fixed;
			bottom: 10px;
			right: auto;
			width: 75px;
			height: 75px;
			font-size: 10px;
			background: url("Minecraft-creeper-face.jpg")
			background-size: 75px;
		}
		button:hover{
			cursor: pointer;
		}
	</style>
	<header>
		<img src="background.png" class="bg">
		<h1>Minecraft Combat Guide</h1>
		<p style="color:white; text-align:center;">This is the Minecraft Combat guide. It contains information about the armors, weapons, mobs, and enchantments of Minecraft.</p>
	</header>
	<body>
		<div class="table-container">
			<div class="table-item">
				<div class="icon-container">
					<a href="weapons-page-assets/weapons.php">
						<img class="icon" src="weapons-icon.png" alt="Weapons">
					</a>
				</div>
			</div>
			<div class="table-item">
				<div class="icon-container"><img class="icon" src="armor-icon.png" alt="Armor"></div>
			</div>
			<div class="table-item">
				<div class="icon-container">
					<a href="mobs-page-assets/mobs.php">
						<img class="icon" src="mobs-icon.png" alt="Mobs">
					</a>
				</div>
			</div>
			<div class="table-item">
				<div class="icon-container"><img class="icon" src="enchantments-icon.png" alt="Enchantments"></div>
			</div>
		</div><br/>
		<button id="contact-prompt"><a href="contact-page/contact.php">CLICK HERE TO SUBMIT QUESTIONS AND/OR FEEDBACK!</a></button>
	</body>
</html>
