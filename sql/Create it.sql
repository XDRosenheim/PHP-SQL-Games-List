CREATE DATABASE IF NOT EXISTS php_site;

USE php_site;

CREATE TABLE gamesList ( 
  id INT NOT NULL AUTO_INCREMENT,
  appName VARCHAR(100) NOT NULL,
  steam_id INT,
  steam_workshop BOOL,
  wiki_link VARCHAR(200) NOT NULL,
  sub_reddit VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO gamesList ( appName, steam_id, steam_workshop, wiki_link, sub_reddit ) VALUES
  ('Rust', 252490, true, 'https://rust.wikia.com/wiki/Rust_Wiki', 'playrust'),
  ('Terraria', 105600, false, 'https://terraria.gamepedia.com/Terraria_Wiki', 'Terraria'),
  ('Warframe', 230410, false, 'https://warframe.wikia.com/wiki/WARFRAME_Wiki', 'Warframe'),
  ('7 Days to Die', 251570, false, 'https://7daystodie.gamepedia.com/7_Days_to_Die_Wiki', '7daystodie'),
  ('Speace Engineers', 244850, true, 'https://www.spaceengineerswiki.com/Main_Page', 'spaceengineers'),
  ('Cities: Skyline', 255710, true, 'http://www.skylineswiki.com/Cities:_Skylines_Wiki', 'citiesskylines'),
  ('ARK: Survival', 346110, true, 'https://ark.gamepedia.com/ARK:_Survival_Evolved_Wiki', 'playark'),
  ('TrackMania&#178; Stadium', 232910, true, '', 'TrackMania');
