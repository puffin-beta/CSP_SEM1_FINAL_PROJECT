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
		.resultalert{
			text-align: center;
			font-size: 20px;
		}
	</style>
	<body>
		<?php
			$server = $username = $password = $conn = "";
			$active = [];
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$server = "localhost"; $username = "root"; $password = "CSP4oi%Iamgod";
				$conn = mysqli_connect($server,$username,$password);
				if(!$conn){
					die("Could not connect to ".mysqli_connect_error());
				}
				include("searchengine.php");
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
				$input = $_POST["search"];
				$search = "select * from mobtable where mobName='$input'";
				$results = mysqli_query($conn,$search);
				$row = mysqli_fetch_row($results);
			}
			else{
				$server = $username = $password = $conn = "";
				$active = NULL;
			}
		?>
		<img src="background.png" class="bg">
		<h1>The various mobs in minecraft</h1>
		<p style="text-align:center">Note that this is only about hostile mobs.</p>
		<div class="search-container">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
				<input type="text" placeholder="Search For a Mob.." name="search" style="color:black;" required>
				<button type="submit" style="color:black"><i class="fa fa-search"></i>Search</button><br/>
			</form><br/>
		</div>
		<p class="resultalert">
			<?php 
				if ($_SERVER["REQUEST_METHOD"] == "POST"){
					if ($row == NULL){
						echo "No results were found for '$input'";
					}
					else{
						$disrow = implode(" ",$row);
						echo "Search results for '$input': $disrow";
					}
				}
				else{
					echo " ";
				}
			?>
		</p>
	</body>
</html>