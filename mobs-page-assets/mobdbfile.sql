CREATE DATABASE MOB_DATA;
USE MOB_DATA;
CREATE TABLE mob_data(
	mobId int,
    mobName varchar(255),
    mobHealth varchar(255),
    mobSpawn varchar(255),
    mobDamage varchar(255),
    mobLootDrops varchar(255),
    mobSpecialNotes varchar(255)
);
LOAD DATA INFILE "/path/to/MOB_DATA-Sheet1.csv" INTO TABLE mob_data;