# PZ-Web_Interface
Putting together a web interface to manage settings for the popular Zombie Survival game, Project Zomboid

For now, the working file is in a subdirectory within the document root (/var/www/html/ini)
It needs to be in that location so that Apache can access it. 

I'm going to be creating some BASH to handel that file if there have been any changes to it so that it can implement those changes and reboot the server if req uired.

Next step:
Build a mod/workshop display page that has <items> to disaply all the enabled mods
A look-up is performed to fetch all the required data

| Item to be displayed | Example                                                                                                                                                                     |
|----------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
|  name              | diZcord                                                                                                                                                                     |
|  id                | 3126850418                                                                                                                                                                  |
|  screenshot        | ![preview](https://github.com/Blyzz616/PZ-Web_Interface/assets/19424317/a58b3972-4f39-4b3f-ab91-9c0f1ce76205)                                                            |
|  stars             | ![not-yet_large](https://github.com/Blyzz616/PZ-Web_Interface/assets/19424317/16b30cf5-e123-4a51-9ba1-bf5ff84e45b9)                                                      |
|  mods              | Build 41, Framework, Misc                                                                                                                                                   |
|  file size         | 66.326 KB                                                                                                                                                                   |
|  posted            | 30 Dec, 2023 @ 11:00am                                                                                                                                                      |
|  subscribe         | 131,089                                                                                                                                                                     |
|  creator           | &lt;a class="friendBlockLinkOverlay" href="https://steamcommunity.com/id/blyzz"&gt;&lt;/a&gt;                                                                                         |

To Do:
[] Group relevant items
  [] voice
  [] radio
  [] anti-cheat
  [] anti-cheat multiplier
