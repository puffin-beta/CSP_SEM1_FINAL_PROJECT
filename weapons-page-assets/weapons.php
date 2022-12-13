<!DOCTYPE html>
<html>
<style>
body {
	background-image: url('besttoolsweapons.png');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
}
* :not(img){
	z-index: 1;
}
img
</style>
<body>
<h1 style="color:White; font-family: courier; font size: 150%;">Weapons of Minecraft</h1>
<hr>
<p style="color:White; z-index:1">The following page has information on the weapons of Minecraft.</p>
<<<<<<< HEAD
<<<<<<< HEAD
<a href="swordsubpage/swordsubpage.php">
<!--img src="weaponsswordlink.png" alt="SWORDS" style="width:200px;height:200px;"></a>
=======

=======
<a href="swordsubpage/swordsubpage.php">
>>>>>>> 68e5b98fc41647d00c84c88675020261de741156
<img src="weaponsswordlink.png" alt="SWORDS" style="width:200px;height:200px;"></a>
>>>>>>> 8b989a7799becc5bd914f6d35eadcfac3d0044ae
<a href="bowsubpage/bowsubpage.php">
<img src="bowsubpageicon.png" alt="BOWS" style="width:200px;height:200px;"></a>
<a href="tridentsubpage/tridentsubpage.php">
<img src="tridenthomepageweapon.png" alt="TRIDENT" style="width:200px;height:200px;"></a-->
<?php 
	include("../menu.php");
	$images = ["bowsubpageicon.png","tridenthomepage.png","weaponsswordlink.png"];
	echo "<div class=\"table-container\">
			<div class=\"table-item\">
				<div class=\"icon-container\">
					<a href=\"swordsubpage/swordsubpage.php\">
						<img class=\"icon\" src=\"$images[2]\" alt=\"Swords\">
					</a>
				</div>
			</div>
		  </div>
		  <div class=\"table-container\">
			<div class=\"table-item\">
				<div class=\"icon-container\">
					<a href=\"bowsubpage/bowsubpage.php\">
						<img class=\"icon\" src=\"$images[0]\" alt=\"Bows\">
					</a>
				</div>
			</div>
		  </div>
		  ";
?>
</body>
</html>