<!DOCTYPE html>
<html>
	<head>
		<title>Mobs In Minecraft</title>
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
		@font-face{
			font-family: Minecraft;
			src: url("custom-font.ttf");
		}
		* :not(.bg){
			z-index: 1;
			color: white;
		}
		h1{
			font-family: Minecraft;
			font-size: calc(50px + 6 * ((100vw - 420px) / 680));
			font-weight: lighter;
			text-align: center;
			color: white;
		}
		.mobs-container, .mobs-row, .icon{
			border: 1px solid white;
		}
	</style>
	<body>
		<img src="background.png" class="bg">
		<h1>The various mobs in minecraft</h1>
		<p style="text-align:center">Note that this is only about hostile mobs.</p>
		<table class="mobs-container">
			<tr class="mobs-row">
				<td class="icon">Lorem</td>
				<td class="icon">Lorem</td>
			</tr>
			<tr class="mobs-row">
				<td class="icon">Ipsum</td>
				<td class="icon">Ipsum</td>
			</tr>
		</table>
	</body>
</html>