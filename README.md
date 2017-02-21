# Discord Bot

Small bot prototype for a Discord

## Installation

Clone the repository:

    git clone https://github.com/EvilFreelancer/discord-bot.git

Change direcotory to bot root:

    cd discord-bot

Execute the composer:

    composer update

## Token

You need obtain the token from the discord developers portal, for this you need:

* Open this page https://discordapp.com/developers/applications/me
* Click on **New App** button
* Write the bot name
* Save
* Now we need click to **Create new bot user**
* In line **Token: click to reveal** you need **click to reveal** this is your bot token
    * To this token need replace the **TOKEN** into `run.php` 
* Also you need the **Client ID** for next step

Ok, bot is ready, now we need add into our Discord group:

https://discordapp.com/oauth2/authorize?&client_id=CLIENT_ID&scope=bot&permissions=0

After this you should saw your bot in your group.
