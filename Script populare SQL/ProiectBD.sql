-- Crearea 

  -- set serveroutput on;

drop table Players;  -- V
drop table Obstacles;  --V
drop table Terrain;  -- V
drop table Team; -- V
drop table Robots;  -- V
drop table Resources;  -- V
drop table Games;  -- V

CREATE TABLE Players(
  ID number NOT NULL, 
  Username varchar2(50) NOT NULL,
  First_Name varchar2(50) NOT NULL,
  Last_Name varchar2(50) NOT NULL,
  Password varchar2(50) NOT NULL,
  Rank number DEFAULT 0,
  Team varchar2(50),
  Veteran varchar2(1) DEFAULT 'N',  -- sau 'Y' pt da
  RobotID number,
  GamesNo number DEFAULT 0,
  Victories number DEFAULT 0,
  Loses number DEFAULT 0,
  Createdat date  DEFAULT sysdate NOT NULL,
  Logged int,
  CONSTRAINT Players_pk PRIMARY KEY (ID)
  );
  
CREATE TABLE Games (
  gameid number NOT NULL,
  type varchar2(5),
  ID1 number NOT NULL,
  ID2 number NOT NULL,
  ID3 number DEFAULT 0,
  ID4 number DEFAULT 0,
  ID5 number DEFAULT 0,
  ID6 number DEFAULT 0,
  ID7 number DEFAULT 0,
  ID8 number DEFAULT 0,
  ID9 number DEFAULT 0,
  ID10 number DEFAULT 0,
  StartDate date,
  Duration number,
  Result number,
  CONSTRAINT Games_pk PRIMARY KEY (gameID)
);
  
CREATE TABLE Obstacles (
    ID integer  NOT NULL,
    Type varchar2(50)  NOT NULL,
    Destroyable integer  NOT NULL,
    Terrain_id int,
    CONSTRAINT Obstacles_pk PRIMARY KEY (ID)
);

CREATE TABLE Terrain (
    ID integer  NOT NULL,
    Name varchar2(50)  NULL,
    Type varchar2(50)  NOT NULL,
   -- ObstacleID integer  NOT NULL,
    "Size" integer  NOT NULL,
    Effect varchar2(50)  DEFAULT NULL,
    Created_On date  NOT NULL,
    CONSTRAINT Terrain_pk PRIMARY KEY (ID)
);

CREATE TABLE Team (
    ID number  NOT NULL,
    CaptainID integer  NOT NULL,
    NrMembri integer  NOT NULL,
    Victorii integer  DEFAULT 0,
    Infrangeri integer  DEFAULT 0,
    IDmembri varchar2(300)  NOT NULL,
    CONSTRAINT Team_pk PRIMARY KEY (ID)
);

CREATE TABLE Robots(
  ID number NOT NULL, 
  RobotName varchar2(50) NOT NULL,
  Material varchar2(50) NOT NULL,
  Weapon varchar2(50) NOT NULL,
  Tool varchar2(50) NOT NULL,
  Random char NOT NULL,
  CONSTRAINT Robots_pk PRIMARY KEY (ID)
  );

CREATE TABLE Resources(
  ID number NOT NULL, 
  Category varchar2(50) NOT NULL,
  Name varchar2(50) NOT NULL,
  Price number NOT NULL,
  CONSTRAINT Resources_pk PRIMARY KEY (ID)
);

DROP INDEX IDX1;
DROP INDEX IDX2;
DROP INDEX IDX3;
drop table nume;
drop table prenume;
drop table caracter;
drop table numeRoboti;
drop table atributRoboti;
drop table arme;
drop table abilitati;
drop table materiale;
drop table i_nume;
drop table i_prenume;
drop table i_abilitati;
drop table i_caracter;
drop table i_numeRoboti;
drop table i_arme;
DROP TABLE i_materiale;
DROP TABLE i_atributRoboti;


create table nume(nume varchar2(25));
create table prenume(prenume varchar2(25));
create table caracter(caracter varchar2(1));
create table numeRoboti(nume varchar2(25));
create table atributRoboti(nume varchar2(25));
create table arme(nume varchar2(20));
create table abilitati(nume varchar2(20));
create table materiale(nume varchar2(20));

INSERT INTO nume VALUES ('Varlan');
INSERT INTO nume VALUES ('Popa');
INSERT INTO nume VALUES ('Spiridonica');
INSERT INTO nume VALUES ('Iftene');
INSERT INTO nume VALUES ('Asaftei');
INSERT INTO nume VALUES ('Stavarache');
INSERT INTO nume VALUES ('Petrescu');
INSERT INTO nume VALUES ('Baltag');
INSERT INTO nume VALUES ('Mazilu');
INSERT INTO nume VALUES ('Ispirescu');
INSERT INTO nume VALUES ('Ichim');
INSERT INTO nume VALUES ('Macovei');
INSERT INTO nume VALUES ('Ignat');
INSERT INTO nume VALUES ('Dudau');
INSERT INTO nume VALUES ('Baciu');
INSERT INTO nume VALUES ('Boistean');
INSERT INTO nume VALUES ('Harabula');
INSERT INTO nume VALUES ('Moraru');
INSERT INTO nume VALUES ('Morariu');
INSERT INTO nume VALUES ('Amariei');
INSERT INTO nume VALUES ('Bumbaru');
INSERT INTO nume VALUES ('Balan');
INSERT INTO nume VALUES ('Minuti');
INSERT INTO nume VALUES ('Cena');
INSERT INTO nume VALUES ('Cage');
INSERT INTO nume VALUES ('Orton');
INSERT INTO nume VALUES ('Bryan');
INSERT INTO nume VALUES ('Nadal');
INSERT INTO nume VALUES ('Ionescu');
INSERT INTO nume VALUES ('Obama');
INSERT INTO nume VALUES ('Dragnea');
INSERT INTO nume VALUES ('Basescu');
INSERT INTO nume VALUES ('Trump');
INSERT INTO nume VALUES ('Olariu');
INSERT INTO nume VALUES ('Pit');
INSERT INTO nume VALUES ('Jolie');
INSERT INTO nume VALUES ('Escu');
INSERT INTO nume VALUES ('Petru');
INSERT INTO nume VALUES ('Bran');
INSERT INTO nume VALUES ('Cristea');
INSERT INTO nume VALUES ('Farcas');
INSERT INTO nume VALUES ('Ossas');

INSERT INTO prenume VALUES ('Adrian');
INSERT INTO prenume VALUES ('Elisa');
INSERT INTO prenume VALUES ('John');
INSERT INTO prenume VALUES ('Donald');
INSERT INTO prenume VALUES ('Smith');
INSERT INTO prenume VALUES ('Andra');
INSERT INTO prenume VALUES ('Vlad');
INSERT INTO prenume VALUES ('Cosmin');
INSERT INTO prenume VALUES ('Alexandru');
INSERT INTO prenume VALUES ('George');
INSERT INTO prenume VALUES ('Larisa');
INSERT INTO prenume VALUES ('Robert');
INSERT INTO prenume VALUES ('Razvan');
INSERT INTO prenume VALUES ('Silviu');
INSERT INTO prenume VALUES ('Andreea');
INSERT INTO prenume VALUES ('Bianca');
INSERT INTO prenume VALUES ('Mihai');
INSERT INTO prenume VALUES ('Alexandra');
INSERT INTO prenume VALUES ('Andrei');
INSERT INTO prenume VALUES ('Uvuvwevwevwe');

INSERT INTO caracter VALUES ('a');
INSERT INTO caracter VALUES ('b');
INSERT INTO caracter VALUES ('c');
INSERT INTO caracter VALUES ('d');
INSERT INTO caracter VALUES ('e');
INSERT INTO caracter VALUES ('f');
INSERT INTO caracter VALUES ('g');
INSERT INTO caracter VALUES ('h');
INSERT INTO caracter VALUES ('i');
INSERT INTO caracter VALUES ('j');
INSERT INTO caracter VALUES ('k');
INSERT INTO caracter VALUES ('l');
INSERT INTO caracter VALUES ('m');
INSERT INTO caracter VALUES ('n');
INSERT INTO caracter VALUES ('o');
INSERT INTO caracter VALUES ('p');
INSERT INTO caracter VALUES ('q');
INSERT INTO caracter VALUES ('r');
INSERT INTO caracter VALUES ('s');
INSERT INTO caracter VALUES ('t');
INSERT INTO caracter VALUES ('u');
INSERT INTO caracter VALUES ('v');
INSERT INTO caracter VALUES ('w');
INSERT INTO caracter VALUES ('x');
INSERT INTO caracter VALUES ('y');
INSERT INTO caracter VALUES ('z');
INSERT INTO caracter VALUES ('0');
INSERT INTO caracter VALUES ('1');
INSERT INTO caracter VALUES ('2');
INSERT INTO caracter VALUES ('3');
INSERT INTO caracter VALUES ('4');
INSERT INTO caracter VALUES ('5');
INSERT INTO caracter VALUES ('6');
INSERT INTO caracter VALUES ('7');
INSERT INTO caracter VALUES ('8');
INSERT INTO caracter VALUES ('9');

INSERT INTO numeRoboti VALUES ('ROBO');
INSERT INTO numeRoboti VALUES ('JOHN');
INSERT INTO numeRoboti VALUES ('SMITH');
INSERT INTO numeRoboti VALUES ('MO');
INSERT INTO numeRoboti VALUES ('FOCA');
INSERT INTO numeRoboti VALUES ('PUFI');
INSERT INTO numeRoboti VALUES ('CENA');
INSERT INTO numeRoboti VALUES ('ALEXANDER');
INSERT INTO numeRoboti VALUES ('SORIN');
INSERT INTO numeRoboti VALUES ('SEAN');
INSERT INTO numeRoboti VALUES ('ANDREW');
INSERT INTO numeRoboti VALUES ('CLAUS');
INSERT INTO numeRoboti VALUES ('DONALD');
INSERT INTO numeRoboti VALUES ('TROY');
INSERT INTO numeRoboti VALUES ('JUSTIN');
INSERT INTO numeRoboti VALUES ('ANDROID');
INSERT INTO numeRoboti VALUES ('ROBOCOP');
INSERT INTO numeRoboti VALUES ('SIRI');
INSERT INTO numeRoboti VALUES ('PRIME');

CREATE TABLE i_numeRoboti(id integer, nume varchar2(25));
INSERT INTO i_numeRoboti SELECT ROWNUM, nume FROM numeRoboti;

INSERT INTO atributRoboti VALUES ('the Familiar');
INSERT INTO atributRoboti VALUES ('the Hell Hound');
INSERT INTO atributRoboti VALUES ('the Cerberus');
INSERT INTO atributRoboti VALUES ('the Bieber');
INSERT INTO atributRoboti VALUES ('the Pit Lord');
INSERT INTO atributRoboti VALUES ('the Killer');
INSERT INTO atributRoboti VALUES ('the Efreet Sultan');
INSERT INTO atributRoboti VALUES ('the Reaper');
INSERT INTO atributRoboti VALUES ('the Arch Devil');
INSERT INTO atributRoboti VALUES ('the Master Genie');
INSERT INTO atributRoboti VALUES ('the Naga King');
INSERT INTO atributRoboti VALUES ('the Titan');
INSERT INTO atributRoboti VALUES ('the Shogun');
INSERT INTO atributRoboti VALUES ('the Striker');
INSERT INTO atributRoboti VALUES ('the Stone Golem');
INSERT INTO atributRoboti VALUES ('the Iron Golem');
INSERT INTO atributRoboti VALUES ('the Kamikaze');
INSERT INTO atributRoboti VALUES ('the Obsidian Gargoyle');
INSERT INTO atributRoboti VALUES ('the Wizard');
INSERT INTO atributRoboti VALUES ('the Lizard Bot');
INSERT INTO atributRoboti VALUES ('the Dragon');
INSERT INTO atributRoboti VALUES ('the Chaos Bazilisk');
INSERT INTO atributRoboti VALUES ('the Archangel');
INSERT INTO atributRoboti VALUES ('the Royal Troglodyte');
INSERT INTO atributRoboti VALUES ('the Beholder');
INSERT INTO atributRoboti VALUES ('the Cyclop');
INSERT INTO atributRoboti VALUES ('the Walking Dead');
INSERT INTO atributRoboti VALUES ('the Arrow');
INSERT INTO atributRoboti VALUES ('the Soul Stealer');
INSERT INTO atributRoboti VALUES ('the King');

CREATE TABLE i_atributRoboti(id integer, nume varchar2(25));
INSERT INTO i_atributRoboti SELECT ROWNUM, nume FROM atributRoboti;

INSERT INTO arme VALUES ('Bomb');
INSERT INTO arme VALUES ('Bow');
INSERT INTO arme VALUES ('Baseball Bat');
INSERT INTO arme VALUES ('Sword');
INSERT INTO arme VALUES ('Laser');
INSERT INTO arme VALUES ('Shotgun');
INSERT INTO arme VALUES ('Negev');
INSERT INTO arme VALUES ('AWP');
INSERT INTO arme VALUES ('AK47');
INSERT INTO arme VALUES ('M4A1');
INSERT INTO arme VALUES('Plebeus Bomb');
INSERT INTO arme VALUES('Proximity Mines ');
INSERT INTO arme VALUES('Poison Bombs');
INSERT INTO arme VALUES('PRocket Launcher');
INSERT INTO arme VALUES ('Flashbang');
INSERT INTO arme VALUES ('Frag Grende');
INSERT INTO arme VALUES ('HE Grenade');
INSERT INTO arme VALUES ('Smoke Grenade');
INSERT INTO arme VALUES ('Katana');
INSERT INTO arme VALUES ('Chuck Norris');
INSERT INTO arme VALUES ('Deagle');
INSERT INTO arme VALUES ('Criptonyte');
INSERT INTO arme VALUES ('Rock');
INSERT INTO arme VALUES ('Knife');


CREATE TABLE i_arme(id integer, nume varchar2(25));
INSERT INTO i_arme SELECT ROWNUM, nume FROM arme;

INSERT INTO abilitati VALUES ('JetPack');
INSERT INTO abilitati VALUES ('Shield');
INSERT INTO abilitati VALUES ('Detonator');
INSERT INTO abilitati VALUES ('Kick');
INSERT INTO abilitati VALUES ('Slide');
INSERT INTO abilitati VALUES ('Invisibility');
INSERT INTO abilitati VALUES ('Guardian');
INSERT INTO abilitati VALUES ('Redbull');

CREATE  TABLE i_abilitati(id integer, nume varchar2(25));
INSERT INTO i_abilitati SELECT ROWNUM, nume FROM abilitati;

INSERT INTO materiale VALUES ('WOOD');
INSERT INTO materiale VALUES ('STEEL');
INSERT INTO materiale VALUES ('SILVER');
INSERT INTO materiale VALUES ('GOLD');
INSERT INTO materiale VALUES ('DIAMOND');
INSERT INTO materiale VALUES ('STONE');
INSERT INTO materiale VALUES ('PLATINUM');
INSERT INTO materiale VALUES ('OBSIDIAN');

CREATE TABLE i_materiale(id integer, nume varchar2(20));
INSERT INTO i_materiale SELECT ROWNUM, nume FROM materiale;


CREATE TABLE i_nume(id integer, nume varchar2(25));
INSERT INTO i_nume SELECT ROWNUM, nume FROM nume;

CREATE TABLE i_prenume(id integer, prenume varchar2(25));
INSERT INTO i_prenume SELECT ROWNUM, prenume FROM prenume;

CREATE TABLE i_caracter(id integer, caracter varchar2(1));
INSERT INTO i_caracter SELECT ROWNUM, caracter FROM caracter;

CREATE INDEX IDX1 ON i_nume(id,nume);
CREATE INDEX IDX2 ON i_prenume(id,prenume);
CREATE INDEX IDX3 ON i_caracter(id,caracter);
/*
select * from nume;
select * from prenume;
select * from caracter;
select * from i_nume;
select * from i_prenume;
select * from i_caracter;
*/
declare
  v_id1 NUMBER := 0;
  v_id2 NUMBER := 0;
  v_durata NUMBER := 0;
  v_result NUMBER := 0;
  
  v_count NUMBER := 1;
  v_nr_nume NUMBER;
  v_nr_prenume NUMBER;
  v_nr_caracter NUMBER;
  v_temp NUMBER :=0;
  v_temp1 NUMBER :=0;
  v_count1 NUMBER := 0;
  v_nume varchar2(25);
  v_prenume varchar2(25);
  v_username varchar2(50);
  v_caracter varchar2(1);
  v_password varchar2(50);
  v_aux varchar2(50);
  v_puncte NUMBER;
  v_RName varchar2(50);
  v_RAtr varchar2(50);
  v_Material varchar2(20);
  v_Wp varchar2(20); 
  v_tool varchar2(20);
  v_Rd char;
  v_nr_Roboti number;
  v_nr_Atribute number;
  v_nr_arme number;
  v_nr_abilitati number;
  v_nr_materiale number;
  v_Veteran varchar2(1);
begin
  
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (1,'tree',1,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (2,'rock',1,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (3,'wood',1,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (4,'steel',0,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (5,'lava',0,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (6,'lego brick',1,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (7,'Grimm',0,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (8,'dust',1,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (9,'water',0,10);
  insert into Obstacles(iD,type,destroyable,terrain_ID) values (10,'iceblock',1,10);
  
  insert into Terrain(ID,NAME,TYPE,"Size",effect,created_on) values (1,'RumbleInTheJungle','Forest',20,'Shadowy','3-jan-2017');
  insert into Terrain(ID,NAME,TYPE,"Size",effect,created_on) values (2,'Woods','Forest',15,'Rainy','5-feb-2017');
  insert into Terrain(ID,NAME,TYPE,"Size",effect,created_on) values (3,'Glacier','Frozenland',20,'Slippery','21-jan-2017');
  insert into Terrain(ID,NAME,TYPE,"Size",effect,created_on) values (4,'Magma','Vulcano',20,'ItBurns','3-jul-2016');
  insert into Terrain(ID,NAME,TYPE,"Size",effect,created_on) values (5,'Swamp','Forest',20,'Dirty','8-feb-2017');
  insert into Terrain(ID,NAME,TYPE,"Size",effect,created_on) values (6,'City','Civilization',20,'Poisoned','18-mar-2017');
  insert into Terrain(ID,NAME,TYPE,"Size",effect,created_on) values (7,'Space','Civilization',25,'Gravity0','21-dec-2016');
  
  
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (1,1,5,10,5,'1,2,3,4,5');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (2,6,3,4,7,'6,9,654');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (3,7,2,7,2,'7,89');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (4,785,4,0,0,'785,1807,57,234');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (5,8,2,1,1,'8,69');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (6,10,2,10,7,'10,110');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (7,11,2,19,13,'11,111');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (8,12,2,12,11,'12,112');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (9,13,2,21,17,'13,113');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (10,14,2,1,2,'14,114');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (11,15,2,4,3,'15,115');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (12,16,2,8,12,'16,116');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (13,17,2,14,13,'17,117');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (14,18,2,7,3,'18,118');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (15,19,2,9,4,'19,119');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (16,20,2,0,0,'20,120');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (17,22,2,0,1,'22,121');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (18,25,2,0,9,'25,122');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (19,27,2,8,13,'27,123');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (20,33,2,17,13,'33,124');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (21,34,2,11,3,'34,125');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (22,31,2,13,9,'31,126');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (23,38,2,0,4,'38,127');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (24,41,2,1,3,'41,128');
  insert into Team (ID,captainID,NrMembri,Victorii,Infrangeri,IDmembri) values (25,49,2,9,3,'49,239');
  
  insert into Resources(ID,category,Name,Price) values (1, 'Weapon', 'Bomb', 0);
  insert into Resources(ID,category,Name,Price) values (2, 'Weapon', 'Rocket Launcher', 300);
  insert into Resources(ID,category,Name,Price) values (3, 'Weapon', 'Bow', 100);
  insert into Resources(ID,category,Name,Price) values (4, 'Weapon', 'Baseball Bat', 50);
  insert into Resources(ID,category,Name,Price) values (5, 'Weapon', 'Sword', 100);
  insert into Resources(ID,category,Name,Price) values (6, 'Weapon', 'Laser', 200);
  insert into Resources(ID,category,Name,Price) values (7, 'Weapon', 'Shotgun', 250);
  insert into Resources(ID,category,Name,Price) values (8, 'Weapon', 'Negev', 500);
  insert into Resources(ID,category,Name,Price) values (9, 'Weapon', 'AWP', 475);
  insert into Resources(ID,category,Name,Price) values (10, 'Weapon', 'AK47', 200);
  insert into Resources(ID,category,Name,Price) values (11, 'Weapon', 'M4A1', 200);
  insert into Resources(ID,category,Name,Price) values (12, 'Weapon', 'Plebeus Bomb', 50);
  insert into Resources(ID,category,Name,Price) values (13, 'Weapon', 'Proximity Mines ', 25);
  insert into Resources(ID,category,Name,Price) values (14, 'Weapon', 'Poison Bombs', 75);
  -- si inca 16 de la arme
  insert into Resources(ID,category,Name,Price) values (15, 'Tool', 'Shield', 500);
  insert into Resources(ID,category,Name,Price) values (16, 'Tool', 'JetPack', 750);
  insert into Resources(ID,category,Name,Price) values (17, 'Tool', 'Detonator', 300);
  insert into Resources(ID,category,Name,Price) values (18, 'Tool', 'Kick', 250);
  insert into Resources(ID,category,Name,Price) values (19, 'Tool', 'Slide', 350);
  insert into Resources(ID,category,Name,Price) values (20, 'Tool', 'Invisibility', 800);
  insert into Resources(ID,category,Name,Price) values (21, 'Tool', 'Guardian', 900);
  insert into Resources(ID,category,Name,Price) values (22, 'Tool', 'Redbull', 250);
  insert into Resources(ID,category,Name,Price) values (23, 'Material', 'WOOD', 0);
  insert into Resources(ID,category,Name,Price) values (24, 'Material', 'STEEL', 250);
  insert into Resources(ID,category,Name,Price) values (25, 'Material', 'SILVER', 200);
  insert into Resources(ID,category,Name,Price) values (26, 'Material', 'GOLD', 450);
  insert into Resources(ID,category,Name,Price) values (27, 'Material', 'DIAMOND', 450);
  insert into Resources(ID,category,Name,Price) values (28, 'Material', 'STONE', 0);
  insert into Resources(ID,category,Name,Price) values (29, 'Material', 'PLATINUM',450);
  insert into Resources(ID,category,Name,Price) values (30, 'Material', 'OBSIDIAN', 450);
   
  select count(*)
  into v_nr_nume
  from i_nume;

  select count(*)
  into v_nr_prenume
  from i_prenume;
  --
  select count(*)
  into v_nr_caracter
  from i_caracter;
  
  select count(*)
  into v_nr_Roboti
  from i_numeRoboti;
  
  select count(*)
  into v_nr_Atribute
  from i_atributRoboti;
  
  select count(*)
  into v_nr_arme
  from i_arme;
  
  select count(*)
  into v_nr_abilitati
  from i_abilitati;
  
  select count(*)
  into v_nr_materiale
  from i_materiale;
  
  --dbms_output.put_line(v_nr_caracter);
  
  loop
    v_temp := trunc(dbms_random.value(1,v_nr_nume+1));
    select nume
    into v_nume
    from i_nume
    where id = v_temp;
         
    v_temp := trunc(dbms_random.value(1,v_nr_prenume+1));      
    select prenume
    into v_prenume 
    from i_prenume 
    where id = v_temp;
    
    v_temp := trunc(dbms_random.value(3,49));
    v_count1 := 0;
    
   /* v_temp1 := trunc(dbms_random.value(1,v_nr_caracter));
      
      select caracter
      into v_username
      from i_caracter
      where id = v_temp1;
    
    loop
      v_count1 := v_count1+1;
      
      v_temp1 := trunc(dbms_random.value(1,v_nr_caracter));
      
      select caracter
      into v_caracter
      from i_caracter
      where id = v_temp1;
      
     -- v_username := 'aaa';
      v_aux := v_username;
      v_username := v_aux||v_caracter;
      
      exit when v_count1 = v_temp;
    end loop;*/
    v_username:=v_prenume||'.'||v_nume;
    
   -- dbms_output.put_line(v_username);
    
    v_temp := trunc(dbms_random.value(5,10));
    v_count1 := 0;
    
     v_temp1 := trunc(dbms_random.value(1,v_nr_caracter));
      
      select caracter
      into v_password
      from i_caracter
      where id = v_temp1;
    
    loop
      v_count1 := v_count1+1;
      
      v_temp1 := trunc(dbms_random.value(1,v_nr_caracter));
      
      select caracter
      into v_caracter
      from i_caracter
      where id = v_temp1;
      
     -- dbms_output.put_line(v_caracter);
      
      --v_password := 'aaa';
      v_aux := v_password;
      v_password := v_aux||v_caracter;
     
      exit when v_count1 = v_temp-1;
    end loop;
    
    v_id1 := trunc(dbms_random.value(0,51)); -- victoies
    v_id2 := trunc(dbms_random.value(0,51)); -- loosess
    
    if(v_id1+v_id2=100)
      then v_Veteran := 'Y';
      else v_Veteran := 'N';
    end if;
    
    v_puncte := v_id1 * 25 - v_id2 * 25;
    
    if(v_puncte<0) 
      then v_puncte:=0; 
    end if;
    
    insert into Players(id,username,first_name,last_name,password,rank,team,veteran,robotID,gamesNo,Victories,Loses,createdAt,Logged) values
      (v_count,v_username,v_nume,v_prenume,v_password,v_puncte,null,v_Veteran,v_count,(v_id1+v_id2),v_id1,v_id2,SYSDATE,0);
      
    v_count := v_count + 1;
    exit when v_count = 10000;
  end loop;
  
  v_count := 1;
  loop
    v_id1 := trunc(dbms_random.value(1,10001));
    v_id2 := v_id1;
    loop
      v_id2 := trunc(dbms_random.value(1,10001));
      exit when v_id1<>v_id2;
    end loop;
      
       v_durata := trunc(dbms_random.value(1,180));      
      
      if(v_durata=180) then v_result := 0;
      else v_result := trunc(dbms_random.value(0,2));
            if(v_result=1) then v_result:=v_id1;
            else if(v_result=2) then v_result:=v_id2;
                 end if;
            end if;
      end if;
   
    insert into Games(gameid,type,ID1,ID2,ID3,ID4,ID5,ID6,ID7,ID8,ID9,ID10,StartDate,duration,result) values
      (v_count,'1vs1',v_id1,v_id2,0,0,0,0,0,0,0,0,SYSDATE,v_durata,v_result);
    v_count := v_count + 1;
    exit when v_count = 10000;
  end loop;
  
  -- Robot
  
  
  v_count := 1;
  
  loop
    v_id1 := trunc(dbms_random.value(1,v_nr_Roboti));
    v_id2 := trunc(dbms_random.value(1,v_nr_Atribute));
    
    select nume
    into v_Rname
    from i_numeRoboti
    where id=v_id1;
    
    select nume
    into v_RAtr
    from i_atributRoboti
    where id=v_id2;
    
    v_Rname := v_Rname || ' ' || v_RAtr;
   
    v_id1 := trunc(dbms_random.value(1,v_nr_arme));
   
    select nume
    into v_Wp
    from i_arme
    where id=v_id1;
    
    v_id1 := trunc(dbms_random.value(1,v_nr_abilitati));
   
    select nume
    into v_tool
    from i_abilitati
    where id=v_id1;
    
    
    v_id1 := trunc(dbms_random.value(1,v_nr_materiale));
   
    select nume
    into v_Material
    from i_materiale
    where id=v_id1;
    
    v_id1 := trunc(dbms_random.value(0,1));
   
    if(v_id1 = 1)
      then v_Rd := 'Y';
      else v_Rd := 'N';
    end if;
   
    insert into Robots(ID,Robotname,material,weapon,tool,random) values
      (v_count, v_RName, v_Material, v_Wp, v_tool, v_Rd);
    v_count := v_count + 1;
    exit when v_count = 10000;
  end loop;
end;

/*
select * from Players;
select * from Team;
select * from Games;
select * from Resources;
select * from Robots;
select * from Terrain;
select * from Obstacles;
*/
--insert into Players(id,username,first_name,last_name,password,rank,team,veteran,robotID,gamesNo,Victories,Loses,createdAt) values (10001,'Gica.Hagi','Gica','Hagi','qwerty',0,null,'N',10001,0,0,0,SYSDATE);
--select * from players where id>10000;

/
CREATE OR REPLACE PACKAGE Func is
    function GetRank(p_player_id number) return int;
    procedure FindOpponents(p_player_id int,p_nr_jucatori int);
    function GetMembers(p_team_id number) return Team.idmembri%type;
    Procedure FindTeam (p_player_id number);
end Func;
/

CREATE OR REPLACE PACKAGE BODY func is  
  
  function GetRank(p_player_id number) 
  return int 
  IS
    v_rank int;
  Begin
    select rank into v_rank from Players where id = p_player_id;  
    return v_rank;
  End GetRank;
  
  Procedure FindOpponents(p_player_id int, p_nr_jucatori int) AS
    v_jucatori_gasiti int := 1;
    v_id_oponent int;
    v_username Players.username%TYPE;
    v_robot Robots.Robotname%type;
    v_random integer ;
    cursor oponenti is select id from players  where rank = GetRank(p_player_id) ;
  Begin
    Open oponenti;
    Loop
      fetch oponenti into v_id_oponent;
      v_random := dbms_random.value(0,1);
      if v_random = 1
        then select username into v_username from Players where id = v_id_oponent;
        select Robotname into v_robot from Robots where id = v_id_oponent; 
        dbms_output.put_line(v_jucatori_gasiti || ': ' || v_username || ': $ '  || v_robot ||' $' );
        v_jucatori_gasiti := v_jucatori_gasiti + 1;
      end if;
      exit when v_jucatori_gasiti = p_nr_jucatori OR oponenti%notfound ;
    end Loop;
    CLOSE oponenti;
    End FindOpponents;
      
  function GetMembers(p_team_id number) 
  return Team.idmembri%type
  IS
    v_membrii Team.idmembri%type;
  Begin
    select idmembri into v_membrii from Team where id = p_team_id;
    return v_membrii;
  End GetMembers;
  
       -- select * from players where id=1247;
      --  select 'yes' from dual
      --  select nvl2(replace(rank,'0',''),1,2) from players
        
  Procedure FindTeam (p_player_id number)
  AS
    v_player_rank number := GetRank(p_player_id);
    v_team_rank Players.rank%type;
    v_diferenta Players.rank%type := 10000;
    v_team_id Team.id%type; 
    v_teamString Team.idmembri%type;
    v_bestChoice Team.id%type;
    v_id number;
    v_rank number;
    v_nr number;
    cursor Echipe  is select id from TEAM  where  nrmembri < 5 ;
    cursor membrii is   select regexp_substr(v_teamString,'[^,]+', 1, level) from dual
    connect by regexp_substr(v_teamString, '[^,]+', 1, level) is not null;  -- liniile astea 2 dau o multime de rows care contin numerele alea
  begin
    Open Echipe;
    LOOP
      fetch Echipe into v_team_id;
      exit when Echipe%notfound;
      dbms_output.put_line(v_team_id);
      select idmembri into v_teamString from Team where id = v_team_id;
      v_team_rank := 0;
      open membrii;
      loop
        fetch membrii into v_id;
        exit when membrii%notfound;
        v_team_rank := v_team_rank + GetRank(v_id);
        dbms_output.put_line(v_team_id|| '-' || v_id || '=' || GetRank(v_id) || '#' || v_team_rank);          
      end loop;
      close membrii;    
      select nrmembri into v_nr from Team where id = v_team_id;
      v_team_rank := v_team_rank / v_nr;
      if v_diferenta > abs(v_team_rank - v_player_rank) then
        v_diferenta := abs(v_team_rank - v_player_rank); v_bestChoice := v_team_id; 
      end if; 
    end LOOP;
    dbms_output.put_line(v_bestChoice);
    select idmembri into v_teamString from Team where id = v_bestChoice; 
    select nrmembri into v_nr from Team where id = v_bestChoice;          
    v_teamString := v_teamString || ',' || p_player_id;
    v_nr := v_nr + 1;
    UPDATE Team SET NRMembri = v_nr, IDmembri = v_teamString WHERE id = v_bestChoice;
    Update Players Set Team = to_char(v_bestChoice) where id = p_player_id;
  end FindTeam;

end Func;
        
        --set SERVEROUTPUT ON
        --------------
--Begin
--Func.FindOpponents(229,2);
--FindTeam()
--end;
/*
CREATE OR REPLACE PACKAGE F7 is
    function Decide(a int, b int) return int;
    function Paging(pg int,nrpepagina int) return varchar2;
end F7;
/
CREATE OR REPLACE PACKAGE BODY F7 is  
 
  function Decide(a int, b int) return int as
    v_r int;
    dec int;
  begin
    dec := dbms_random.value(1,100);
    if (dec<8)
      then return 3;
    else if(a<=b)
           then if(a+75>=b)
                  then if(dec<=50)
                         then return 1;
                       else return 2;
                       end if;
                  else if(a+175>=b)
                         then if(dec<=30)
                                then return 1;
                                else return 2;
                               end if;
                         else if(dec<=15)
                                then return 1;
                                else return 2;
                              end if;
                        end if;
                end if;
          end if;
    end if;
    
    if(a>b)
      then if(b+75>=a)
             then if(dec<=50)
                    then return 1;
                    else return 2;
                  end if;
             else if(b+175>=a)
                    then if(dec<=30)
                           then return 2;
                           else return 1;
                         end if;
                    else if(dec<=15)
                           then return 2;
                           else return 1;
                        end if;
                   end if;  
            end if;
    end if;
    return -1;
  end Decide; */
  
  /*function Paging(nrPlayers int) return int as
  nrPag int;
  begin
  
  select count(*)
  into nrPag
  from Players;
  
  nrPlayers:=100;
  
  return ceil(nrPag/nrPlayers);
  end Paging;*/
  
  /*function Paging(pg int,nrpepagina int) return varchar2
  is
    v_nume Players.username%type;
    v_string varchar2(32767);
    v_rank int;
    v_nr int := 0;
    v_total int;
    cursor c is 
    select username,rank from  players order by rank desc;
    begin
      open c;
      Loop
        fetch c into v_nume,v_rank;
        exit when
        c%NOTFOUND;
        v_nr := v_nr+1;
        if (v_nr between ((pg-1)*nrpepagina+1) AND pg*nrpepagina) then 
            v_string := v_string || '#' || v_nume || ' ' || v_rank ;
        end if;
      end loop;
    close c;
    return v_string;
    end Paging;
    
end F7;*/
  --begin
  --dbms_output.put_line(F7.Paging(1,5));
  --end;
  --select * from( select Decide(p1.id,p2.id) from players p1 join players p2 on p2.id=p1.id+1);
/
create or replace function checklogg(vusername varchar2, vpass varchar2) return int as
  rez int;
begin
  select count(*)
  into rez
  from players
  where username=vusername
  and password=vpass;
  
  return rez;
end;
/
create or replace function getFN(UID int) return varchar2 as
  rez varchar2(50);
begin
  select first_name
  into rez
  from players
  where id = UID;
  
  return rez;
end;
/
create or replace function getLN(UID int) return varchar2 as
  rez varchar2(50);
begin
  select last_name
  into rez
  from players
  where id = UID;
  
  return rez;
end;
/
create or replace function getNrOfPlayers return int as
  rez int;
begin
  select count(*)
  into rez
  from players;
  
  return rez;
end;
/
create or replace function getPass(UID int) return varchar2 as
  rez varchar2(50);
begin
  select password
  into rez
  from players
  where id = UID;
  
  return rez;
end;
/
create or replace function getRank(usid int) return int as
  rez int;
begin
  select rank
  into rez
  from players
  where id = usid;
  
  return rez;
end;
/
create or replace function getUN(UID int) return varchar2 as
  rez varchar2(50);
begin
  select username
  into rez
  from players
  where id = UID;
  
  return rez;
end;
/
create or replace function returnID(usern varchar2, passn varchar2) return int as
  rez int;
begin
  select ID
  into rez
  from players
  where username = usern
  and password = passn;
  
  return rez;
end;
/
create or replace function getNrOfSameUsers(usern varchar2) return int as
  rez int;
begin
  select count(*) 
  into rez
  from players 
  where username = usern;
  
  return rez;
end;
/
create or replace trigger AddBot
after insert on players
referencing new as new old as old
  for each row
begin
  insert into robots values ( :new.ID, 'Robo', 'STONE', 'Bomb', 'Slide', 'N');
end;
/
create or replace trigger deleteRobot
after delete on players
referencing new as new old as old
for each row
begin
  delete from robots where ID = :old.ID;
end;

/
/*
CREATE MATERIALIZED VIEW Top50
BUILD IMMEDIATE
REFRESH COMPLETE ON DEMAND AS
  SELECT * FROM ( SELECT * 
                 FROM players
                 ORDER BY Rank DESC
                 )
  WHERE rownum<51;
/
CREATE MATERIALIZED VIEW Last500
BUILD IMMEDIATE
REFRESH COMPLETE ON DEMAND AS
  SELECT * FROM ( SELECT * 
                 FROM players
                 ORDER BY ID DESC
                 )
  WHERE rownum<501; 

drop MATERIALIZED VIEW Top50;
drop MATERIALIZED VIEW Last500;
*/
/*
declare
  Fisier UTL_FILE.FILE_TYPE;
  v_nr_of_columns int;
  v_col varchar2(400);
  v_linii int;
  cur_hdl int;
  rows_processed int;
  st varchar2(4000);
begin
  Fisier := UTL_FILE.FOPEN('USER_DIR','ReturnPartea3Proiect.sql','W');
 -- UTL_FILE.PUT_LINE(Fisier,'dada');
  
  for obj in ( select OBJECT_TYPE, OBJECT_NAME
               from USER_OBJECTS 
               where OBJECT_TYPE in ('TABLE','FUNCTION','PROCEDURE','VIEW','TRIGGER','PACKAGE')
               order by OBJECT_NAME asc
              )
  loop
     UTL_FILE.PUT_LINE(Fisier, DBMS_METADATA.GET_DDL(obj.OBJECT_TYPE,obj.OBJECT_NAME));
      
     if(obj.OBJECT_TYPE = 'TABLE') 
     then 
     
          if(obj.OBJECT_NAME='PLAYERS')
            then
              for obiect in(select ID, Username, First_Name, Last_Name, Password, Rank, Team, Veteran, RobotID, GamesNo, Victories, Loses, CreatedAt, Logged from PLAYERS)
              loop
                 UTL_FILE.PUT_LINE(Fisier, 'insert into '||obj.OBJECT_NAME||' values('||obiect.ID||', '||obiect.Username||', '||obiect.First_Name||', '||obiect.Last_Name||', '||obiect.Password||', '||obiect.Rank||', '||obiect.Team||', '||obiect.Veteran||', '||obiect.RobotID||', '||obiect.GamesNo||', '||obiect.Victories||', '||obiect.Loses||', '||obiect.CreatedAt||', '||obiect.Logged||');');
              end loop;
          end if;
          
          if(obj.OBJECT_NAME='OBSTACLES')
            then
              for obiect in(select ID, Type, Destroyable, Terrain_ID from Obstacles)
              loop
                 UTL_FILE.PUT_LINE(Fisier, 'insert into '||obj.OBJECT_NAME||' values('||obiect.ID||', '||obiect.Type||', '||obiect.Destroyable||', '||obiect.Terrain_ID||');');
              end loop;
          end if;
          
          if(obj.OBJECT_NAME='GAMES')
            then
              for obiect in(select g.GAMEID, TYPE, g.ID1, g.ID2, g.ID3, g.ID4, g.ID5, g.ID6, g.ID7, g.ID8, g.ID9, g.ID10, g.STARTDATE, g.DURATION, g.RESULT from Games g)
              loop
                 UTL_FILE.PUT_LINE(Fisier, 'insert into '||obj.OBJECT_NAME||' values('||obiect.GameID||', '||obiect.Type||', '||obiect.ID1||', '||obiect.ID2||', '||obiect.ID3||', '||obiect.ID4||', '||obiect.ID5||', '||obiect.ID6||', '||obiect.ID7||', '||obiect.ID8||', '||obiect.ID9||', '||obiect.ID10||', '||obiect.StartDate||', '||obiect.Duration||', '||obiect.Result||');');
              end loop;
          end if;
          
          if(obj.OBJECT_NAME='RESOURCES')
            then
              for obiect in(select ID, Category, Name, Price from Resources)
              loop
                 UTL_FILE.PUT_LINE(Fisier, 'insert into '||obj.OBJECT_NAME||' values('||obiect.ID||', '||obiect.Category||', '||obiect.Name||', '||obiect.Price||');');
              end loop;
          end if;
          
          if(obj.OBJECT_NAME='ROBOTS')
            then
              for obiect in(select ID, RobotName, Material, Weapon, Tool, Random from Robots)
              loop
                 UTL_FILE.PUT_LINE(Fisier, 'insert into '||obj.OBJECT_NAME||' values('||obiect.ID||', '||obiect.RobotName||', '||obiect.Material||', '||obiect.Weapon||', '||obiect.Tool||', '||obiect.Random||');');
              end loop;
          end if;
          
          if(obj.OBJECT_NAME='TEAM')
            then
              for obiect in(select ID, CaptainID, NrMembri, Victorii, Infrangeri, IDMembri from Team)
              loop
                 UTL_FILE.PUT_LINE(Fisier, 'insert into '||obj.OBJECT_NAME||' values('||obiect.ID||', '||obiect.CaptainID||', '||obiect.NrMembri||', '||obiect.Victorii||', '||obiect.Infrangeri||', '||obiect.IDMembri||');');
              end loop;
          end if;
          
          if(obj.OBJECT_NAME='TERRAIN')
            then
              for obiect in(select tr.ID, tr.Name, tr.Type, tr."Size", tr.Effect, tr.Created_ON from Terrain tr)
              loop
                 UTL_FILE.PUT_LINE(Fisier, 'insert into '||obj.OBJECT_NAME||' values('||obiect.ID||', '||obiect.Name||', '||obiect.Type||', '||obiect."Size"||', '||obiect.Effect||', '||obiect.Created_ON||');');
              end loop;
          end if;
        
      end if;
  end loop;
  
  UTL_FILE.FCLOSE(Fisier);
end;
*/
/

DROP INDEX IDX1;
DROP INDEX IDX2;
DROP INDEX IDX3;
drop table nume;
drop table prenume;
drop table caracter;
drop table numeRoboti;
drop table atributRoboti;
drop table arme;
drop table abilitati;
drop table materiale;
drop table i_nume;
drop table i_prenume;
drop table i_abilitati;
drop table i_caracter;
drop table i_numeRoboti;
drop table i_arme;
DROP TABLE i_materiale;
DROP TABLE i_atributRoboti;