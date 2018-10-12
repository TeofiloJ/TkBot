# TkBot

TkBot is an application based on data from the game TEKKEN 7 with multiple features such as :

- Look for specific movements and informations about a character in the game
- Compare different moves and abilities
- Provide an API allowing developpers to use the data.

#Install the app

Requirements :
-WebServer PHP 7
-MySQL Database 5+

Clone the repo into your Webserver folders
Make sure all of the services are ON.

#Other

You can find 2 SQL files which allow you to initialize the DB.
[Your folder]/assets/sql/

The initial JSON files used to gather the Data are also in the projet.
[Your folder]/assets/json/

#How to use the API

The API return JSON formated data.

[URL]/index.php/api/characters/
[URL]/index.php/api/characters/[name]

[URL]/index.php/api/movesets/
[URL]/index.php/api/movesets/[input]*

[URL]/index.php/api/movesets/[name]
[URL]/index.php/api/movesets/[name]/[input]*

* use the standard FGC notation (1, 2, 3, 4)


