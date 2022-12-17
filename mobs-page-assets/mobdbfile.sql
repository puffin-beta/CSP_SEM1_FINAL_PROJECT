drop table if exists mobtable;
drop database if exists mobdata;
create database mobdata;
use mobdata;
create table mobtable(
	ID int not null auto_increment primary key,
    mobName varchar(40),
    Health int,
    Spawn varchar(100),
    AvgDmg int,
    Loot varchar(70)
);
insert into mobtable(mobName,Health,Spawn,AvgDmg,Loot) 
values 
	(
		"Zombie",
        20,
        "In Dark Areas in Overworld",
        3.5,
        "Rotten Flesh, Carrots"
    ),
	(
		"Wither Skeleton",
        20,
        "Nether Fortress",
        8.33,
        "Wither skulls, bones, stone swords"
    ),
    (
		"Skeleton",
        20,
        "Dark Areas in Overworld",
        4,
        "Bones, arrows, bow"
    );
select * from mobtable;