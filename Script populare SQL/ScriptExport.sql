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
