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
		.search-container{
			display: flex;
			justify-content: center;
		}
	</style>
	<body>
		<?php
			$database = '';
			$input = '';
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$database = get_file_contents("../sample.csv");
				$input = $_POST["search"];
				if(preg_match($input,$database)){
					echo "Item found in database!\n";
				}
				else{
					echo "Item not found in database :(\n";
				}
			}
			else{
				$database = '';
				$input = '';
			}
		?>
		<img src="background.png" class="bg">
		<h1>The various mobs in minecraft</h1>
		<p style="text-align:center">Note that this is only about hostile mobs.</p>
		<div class="search-container">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit" style="color:black"><i class="fa fa-search"></i>Search</button>
			</form>
		</div>
	</body>
</html>