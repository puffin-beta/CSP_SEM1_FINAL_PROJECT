<?php
	$cmd = "";
	$cmd .= "create database if not exists mobdata;";
	$cmd .= "use mobdata;";
	$cmd .= "create table if not exists mobtable(
		mobid int,
		mobName varchar(40),
		Health int,
		Spawn varchar(100),
		AvgDmg int,
		Loot varchar(1000),
		primary key (mobid)
		);";
	$cmd .= "delete from mobtable;";
	$cmd .= "insert into mobtable(mobid,mobName,Health,Spawn,AvgDmg,Loot) 
			values 
			(
				1,
				\"Zombie\",
				20,
				\"In Dark Areas in Overworld\",
				3.5,
				\"Rotten Flesh, Carrots\"
			),
			(
				2,
				\"Wither Skeleton\",
				20,
				\"Nether Fortress\",
				8.33,
				\"Wither skulls, bones, stone swords\"
			),
			(
				3,
				\"Skeleton\",
				20,
				\"Dark Areas in Overworld\",
				4,
				\"Bones, arrows, bow\"
			),
			(
				4,
				\"Spider\",
				16,
				\"Dark Areas in Overworld\",
				3,
				\"String, Spider Eyes\"
			),
			(
				5,
				\"Witch\",
				26,
				\"Swamp Huts\",
				6,
				\"glass bottle, spider eyes, gunpowder, sugar\"
			),
			(
				6,
				\"Blaze\",
				20,
				\"Nether Fortress\",
				5,
				\"Blaze Rod\"
			),
			(
				7,
				\"Drowned\",
				20,
				\"Water Biomes\",
				8,
				\"Rotten Flesh, Trident\"
			),
			(
				8,
				\"Pillager\",
				24,
				\"Pillager Outpost\",
				4,
				\"Emeralds, Iron Weapons/tools/armor, Enchanted Book\"
			),
			(
				9,
				\"Ghast\",
				10,
				\"Nether\",
				17,
				\"Gunpowder, Ghast Tear\"
			),
			(
				10,
				\"Creeper\",
				20,
				\"Dark areas in overworld (light level = 0)\",
				43,
				\"Gunpowder\"
			),
			(
				11,
				\"Slime\",
				16,
				\"Overword y = 40\",
				2,
				\"Slime ball\"
			),
			(
				12,
				\"Enderman\",
				40,
				\"Overworld, Nether, and The End\",
				7,
				\"Ender Pearl\"
			),
			(
				13,
				\"Ender Dragon\",
				200,
				\"The End\",
				10,
				\"Dragon Egg, 12000 XP orbs\"
			),
			(
				14,
				\"Wither\",
				300,
				\"Spawned By Player\",
				68,
				\"Nether Star, 50 XP orbs\"
			),
			(
				15,
				\"Warden\",
				500,
				\"Ancient City\",
				30,
				\"Sculk Catalyst and 5 XP orbs\"
			);";
?>