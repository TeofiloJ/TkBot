DROP TABLE IF EXISTS movesets;
DROP TABLE IF EXISTS characters;

CREATE TABLE characters (
  name CHAR(30) NOT NULL,
  proper_name CHAR(30) NOT NULL,
  online_webpage TEXT(300) NOT NULL,
  portrait TEXT(300) NOT NULL,
  PRIMARY KEY (name)
);

CREATE TABLE movesets (
  id MEDIUMINT NOT NULL AUTO_INCREMENT,
  command TEXT(200) NOT NULL,
  hit_level CHAR(30) NOT NULL,
  damage CHAR(30) NOT NULL,
  start_up_frame CHAR(30) NOT NULL,
  block_frame CHAR(30) NOT NULL,
  hit_frame CHAR(30) NOT NULL,
  counter_hit_frame CHAR(30) NOT NULL,
  notes CHAR(30),
  character_name CHAR(30) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (character_name) REFERENCES characters(name)
);
