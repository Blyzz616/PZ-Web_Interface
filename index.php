<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Settings</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div id="content">
    <h1>Server Settings</h1>
    <form id="settingsForm" class="form">
        <div class="grid">
            <div class="column1">
                <label for="pvpCheckbox">PVP:</label>
            </div>
            <div class="column2">
                <label class="switch">
                <input type="checkbox" id="pvpCheckbox" name="pvp" value="true">
                <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="pauseEmptyCheckbox">Pause Empty:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="pauseEmptyCheckbox" name="pauseEmpty" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="globalChatCheckbox">Global Chat:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="globalChatCheckbox" name="globalChat" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="chatStreamsInput">Chat Streams:</label>
            </div>
             <div class="column2">
                <input type="text" id="chatStreamsInput" name="chatStreams">
            </div>
            <div class="column1">
                <label for="openCheckbox">Open:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="openCheckbox" name="open" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="serverWelcomeTextarea">Server Welcome Message:</label>
            </div>
             <div class="column2">
                <textarea id="serverWelcomeTextarea" name="serverWelcomeMessage"></textarea>
            </div>
            <div class="column1">
                <label for="autoCreateUserCheckbox">Auto Create User in WhiteList:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="autoCreateUserCheckbox" name="autoCreateUserInWhiteList" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="displayUserNameCheckbox">Display User Name:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="displayUserNameCheckbox" name="displayUserName" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="showFirstAndLastNameCheckbox">Show First and Last Name:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="showFirstAndLastNameCheckbox" name="showFirstAndLastName" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="spawnPointInput">Spawn Point:</label>
            </div>
             <div class="column2">
                <input type="text" id="spawnPointInput" name="spawnPoint">
            </div>
            <div class="column1">
                <label for="safetySystemCheckbox">Safety System:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="safetySystemCheckbox" name="safetySystem" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="showSafetyCheckbox">Show Safety:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="showSafetyCheckbox" name="showSafety" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="safetyToggleTimerInput">Safety Toggle Timer:</label>
            </div>
             <div class="column2">
                <input type="number" id="safetyToggleTimerInput" name="safetyToggleTimer" min="0" max="1000">
            </div>
            <div class="column1">
                <label for="safetyCooldownTimerInput">Safety Cooldown Timer:</label>
            </div>
             <div class="column2">
                <input type="number" id="safetyCooldownTimerInput" name="safetyCooldownTimer" min="0" max="1000">
            </div>
            <div class="column1">
                <label for="spawnItemsInput">Spawn Items:</label>
            </div>
             <div class="column2">
                <input type="text" id="spawnItemsInput" name="spawnItems">
            </div>
            <div class="column1">
                <label for="defaultPortInput">Default Port:</label>
            </div>
             <div class="column2">
                <input type="number" id="defaultPortInput" name="defaultPort" min="0" max="65535">
            </div>
            <div class="column1">
                <label for="udpPortInput">UDP Port:</label>
            </div>
             <div class="column2">
                <input type="number" id="udpPortInput" name="udpPort" min="0" max="65535">
            </div>
            <div class="column1">
                <label for="resetIDInput">Reset ID:</label>
            </div>
             <div class="column2">
                <input type="number" id="resetIDInput" name="resetID" min="0" max="2147483647">
            </div>
            <div class="column1">
                <label for="modsInput">Mods:</label>
            </div>
             <div class="column2">
                <input type="text" id="modsInput" name="mods">
            </div>
            <div class="column1">
                <label for="mapInput">Map:</label>
            </div>
             <div class="column2">
                <input type="text" id="mapInput" name="map">
            </div>
            <div class="column1">
                <label for="doLuaChecksumCheckbox">Do Lua Checksum:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="doLuaChecksumCheckbox" name="doLuaChecksum" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="denyLoginCheckbox">Deny Login On Overloaded Server:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="denyLoginCheckbox" name="denyLoginOnOverloadedServer" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="publicCheckbox">Public:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="publicCheckbox" name="public" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="minPlayersInput">Min Players:</label>
            </div>
             <div class="column2">
                <input type="number" id="minPlayersInput" name="minPlayers" min="0" max="100">
            </div>
            <div class="column1">
                <label for="maxPlayersInput">Max Players:</label>
            </div>
             <div class="column2">
                <input type="number" id="maxPlayersInput" name="maxPlayers" min="0" max="100">
            </div>
            <div class="column1">
                <label for="maxNpcInput">Max NPC:</label>
            </div>
             <div class="column2">
                <input type="number" id="maxNpcInput" name="maxNpc" min="0" max="100">
            </div>
            <div class="column1">
                <label for="playerIdleKickTimeInput">Player Idle Kick Time:</label>
            </div>
             <div class="column2">
                <input type="number" id="playerIdleKickTimeInput" name="playerIdleKickTime" min="0" max="1000">
            </div>
            <div class="column1">
                <label for="lanOnlyCheckbox">LAN Only:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="lanOnlyCheckbox" name="lanOnly" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="checksumCheckbox">Checksum:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="checksumCheckbox" name="checksum" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="publicNameInput">Public Name:</label>
            </div>
             <div class="column2">
                <input type="text" id="publicNameInput" name="publicName" value="Prince Edward Island">
            </div>
            <div class="column1">
                <label for="pingLimitInput">Ping Limit:</label>
            </div>
             <div class="column2">
                <input type="number" id="pingLimitInput" name="pingLimit" min="100" max="2147483647" value="400">
            </div>
            <div class="column1">
                <label for="hoursForLootRespawnInput">Hours For Loot Respawn:</label>
            </div>
             <div class="column2">
                <input type="number" id="hoursForLootRespawnInput" name="hoursForLootRespawn" min="0" max="2147483647" value="0">
            </div>
            <div class="column1">
                <label for="maxItemsForLootRespawnInput">Max Items For Loot Respawn:</label>
            </div>
             <div class="column2">
                <input type="number" id="maxItemsForLootRespawnInput" name="maxItemsForLootRespawn" min="1" max="2147483647" value="4">
            </div>
            <div class="column1">
                <label for="constructionPreventsLootRespawnCheckbox">Construction Prevents Loot Respawn:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="constructionPreventsLootRespawnCheckbox" name="constructionPreventsLootRespawn" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="dropOffWhiteListAfterDeathCheckbox">Drop Off White List After Death:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="dropOffWhiteListAfterDeathCheckbox" name="dropOffWhiteListAfterDeath" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="noFireCheckbox">No Fire:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="noFireCheckbox" name="noFire" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="announceDeathCheckbox">Announce Death:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="announceDeathCheckbox" name="announceDeath" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="minutesPerPageInput">Minutes Per Page:</label>
            </div>
             <div class="column2">
                <input type="number" id="minutesPerPageInput" name="minutesPerPage" min="0" max="60" step="0.01" value="0.1">
            </div>
            <div class="column1">
                <label for="saveWorldEveryMinutesInput">Save World Every Minutes:</label>
            </div>
             <div class="column2">
                <input type="number" id="saveWorldEveryMinutesInput" name="saveWorldEveryMinutes" min="0" max="2147483647" value="0">
            </div>
            <div class="column1">
                <label for="playerSafehouseCheckbox">Player Safehouse:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="playerSafehouseCheckbox" name="playerSafehouse" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="adminSafehouseCheckbox">Admin Safehouse:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="adminSafehouseCheckbox" name="adminSafehouse" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="safehouseAllowTrepassCheckbox">Safehouse Allow Trepass:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="safehouseAllowTrepassCheckbox" name="safehouseAllowTrepass" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="safehouseAllowFireCheckbox">Safehouse Allow Fire:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="safehouseAllowFireCheckbox" name="safehouseAllowFire" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="safehouseAllowLootCheckbox">Safehouse Allow Loot:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="safehouseAllowLootCheckbox" name="safehouseAllowLoot" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="safehouseAllowRespawnCheckbox">Safehouse Allow Respawn:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="safehouseAllowRespawnCheckbox" name="safehouseAllowRespawn" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="safehouseDaySurvivedToClaimInput">Safehouse Day Survived To Claim:</label>
            </div>
             <div class="column2">
                <input type="number" id="safehouseDaySurvivedToClaimInput" name="safehouseDaySurvivedToClaim" min="0" max="2147483647" value="0">
            </div>
            <div class="column1">
                <label for="safeHouseRemovalTimeInput">Safe House Removal Time:</label>
            </div>
             <div class="column2">
                <input type="number" id="safeHouseRemovalTimeInput" name="safeHouseRemovalTime" min="0" max="2147483647" value="144">
            </div>
            <div class="column1">
                <label for="safehouseAllowNonResidentialCheckbox">Safehouse Allow Non-Residential:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="safehouseAllowNonResidentialCheckbox" name="safehouseAllowNonResidential" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="allowDestructionBySledgehammerCheckbox">Allow Destruction By Sledgehammer:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="allowDestructionBySledgehammerCheckbox" name="allowDestructionBySledgehammer" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="sledgehammerOnlyInSafehouseCheckbox">Sledgehammer Only In Safehouse:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="sledgehammerOnlyInSafehouseCheckbox" name="sledgehammerOnlyInSafehouse" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="kickFastPlayersCheckbox">Kick Fast Players:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="kickFastPlayersCheckbox" name="kickFastPlayers" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="serverPlayerIDInput">Server Player ID:</label>
            </div>
             <div class="column2">
                <input type="number" id="serverPlayerIDInput" name="serverPlayerID" min="0" max="2147483647" value="1193795452">
            </div>
            <div class="column1">
                <label for="rconPortInput">RCON Port:</label>
            </div>
             <div class="column2">
                <input type="number" id="rconPortInput" name="rconPort" min="0" max="65535" value="27015">
            </div>
            <div class="column1">
                <label for="rconPasswordInput">RCON Password:</label>
            </div>
             <div class="column2">
                <input type="password" id="rconPasswordInput" name="rconPassword">
            </div>
            <div class="column1">
                <label for="discordEnableCheckbox">Discord Enable:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="discordEnableCheckbox" name="discordEnable" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="discordTokenInput">Discord Token:</label>
            </div>
             <div class="column2">
                <input type="text" id="discordTokenInput" name="discordToken">
            </div>
            <div class="column1">
                <label for="discordChannelInput">Discord Channel:</label>
            </div>
             <div class="column2">
                <input type="text" id="discordChannelInput" name="discordChannel">
            </div>
            <div class="column1">
                <label for="discordChannelIDInput">Discord Channel ID:</label>
            </div>
             <div class="column2">
                <input type="text" id="discordChannelIDInput" name="discordChannelID">
            </div>
            <div class="column1">
                <label for="passwordInput">Password:</label>
            </div>
             <div class="column2">
                <input type="password" id="passwordInput" name="password" value="prince">
            </div>
            <div class="column1">
                <label for="maxAccountsPerUserInput">Max Accounts Per User:</label>
            </div>
             <div class="column2">
                <input type="number" id="maxAccountsPerUserInput" name="maxAccountsPerUser" min="0" max="2147483647" value="0">
            </div>
            <div class="column1">
                <label for="allowCoopCheckbox">Allow Co-op:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="allowCoopCheckbox" name="allowCoop" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="sleepAllowedCheckbox">Sleep Allowed:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="sleepAllowedCheckbox" name="sleepAllowed" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="sleepNeededCheckbox">Sleep Needed:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="sleepNeededCheckbox" name="sleepNeeded" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="knockedDownAllowedCheckbox">Knocked Down Allowed:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="knockedDownAllowedCheckbox" name="knockedDownAllowed" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="sneakModeHideFromOtherPlayersCheckbox">Sneak Mode Hide From Other Players:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="sneakModeHideFromOtherPlayersCheckbox" name="sneakModeHideFromOtherPlayers" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="workshopItemsInput">Workshop Items:</label>
            </div>
             <div class="column2">
                <textarea rows="5" cols="77" id="workshopItemsInput" name="workshopItems" disabled></textarea>
            </div>
            <div class="column1">
                <label for="addNewWorkshopIDInput">Add Workshop ID (Then Hit Enter):</label>
            </div>
             <div class="column2">
                <input type="number" id="addNewWorkshopIDInput" name="addNewWorkshopIDInput" min="1000000000" max="9999999999" placeholder="3126850418">
            </div>
            <div class="column1">
                <label for="steamScoreboardInput">Steam Scoreboard:</label>
            </div>
             <div class="column2">
                <select id="steamScoreboardInput" name="steamScoreboard">
                    <option value="1">Hidden</option>
                    <option value="2">Friends</option>
                    <option value="3" selected>Everyone</option>
                </select>
            </div>
            <div class="column1">
                <label for="steamVACCheckbox">Steam VAC:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="steamVACCheckbox" name="steamVAC" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="upnpCheckbox">UPnP:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="upnpCheckbox" name="upnp" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="voiceEnableCheckbox">Voice Enable:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="voiceEnableCheckbox" name="voiceEnable" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="voiceMinDistanceInput">Voice Min Distance:</label>
            </div>
             <div class="column2">
                <input type="number" id="voiceMinDistanceInput" name="voiceMinDistance" min="0" max="100000" step="0.01" value="10.0">
            </div>
            <div class="column1">
                <label for="voiceMaxDistanceInput">Voice Max Distance:</label>
            </div>
             <div class="column2">
                <input type="number" id="voiceMaxDistanceInput" name="voiceMaxDistance" min="0" max="100000" step="0.01" value="100.0">
            </div>
            <div class="column1">
                <label for="voice3DCheckbox">Voice 3D:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="voice3DCheckbox" name="voice3D" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="speedLimitInput">Speed Limit:</label>
            </div>
             <div class="column2">
                <input type="number" id="speedLimitInput" name="speedLimit" min="10.0" max="150.0" step="0.01" value="70.03175484316">
            </div>
            <div class="column1">
                <label for="loginQueueEnabledCheckbox">Login Queue Enabled:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="loginQueueEnabledCheckbox" name="loginQueueEnabled" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="loginQueueConnectTimeoutInput">Login Queue Connect Timeout:</label>
            </div>
             <div class="column2">
                <input type="number" id="loginQueueConnectTimeoutInput" name="loginQueueConnectTimeout" min="20" max="1200" value="60">
            </div>
            <div class="column1">
                <label for="serverBrowserAnnouncedIPInput">Server Browser Announced IP:</label>
            </div>
             <div class="column2">
                <input type="text" id="serverBrowserAnnouncedIPInput" name="serverBrowserAnnouncedIP">
            </div>
            <div class="column1">
                <label for="playerRespawnWithSelfCheckbox">Player Respawn With Self:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="playerRespawnWithSelfCheckbox" name="playerRespawnWithSelf" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="playerRespawnWithOtherCheckbox">Player Respawn With Other:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="playerRespawnWithOtherCheckbox" name="playerRespawnWithOther" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="fastForwardMultiplierInput">Fast Forward Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="fastForwardMultiplierInput" name="fastForwardMultiplier" min="1.0" max="100.0" step="0.01" value="40.0">
            </div>
            <div class="column1">
                <label for="disableSafehouseWhenPlayerConnectedCheckbox">Disable Safehouse When Player Connected:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableSafehouseWhenPlayerConnectedCheckbox" name="disableSafehouseWhenPlayerConnected" value="false">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="factionCheckbox">Faction:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="factionCheckbox" name="faction" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="factionDaySurvivedToCreateInput">Faction Day Survived To Create:</label>
            </div>
             <div class="column2">
                <input type="number" id="factionDaySurvivedToCreateInput" name="factionDaySurvivedToCreate" min="0" max="2147483647" value="0">
            </div>
            <div class="column1">
                <label for="factionPlayersRequiredForTagInput">Faction Players Required For Tag:</label>
            </div>
             <div class="column2">
                <input type="number" id="factionPlayersRequiredForTagInput" name="factionPlayersRequiredForTag" min="1" max="2147483647" value="1">
            </div>
            <div class="column1">
                <label>Disable Radio</label>
            </div>
             <div class="column2">
            </div>
            <div class="column1">
                <label for="disableRadio">All:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableRadio" name="disableRadio" value="false"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="disableRadioStaffCheckbox">Staff:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableRadioStaffCheckbox" name="disableRadioStaff" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="disableRadioAdminCheckbox">Admin:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableRadioAdminCheckbox" name="disableRadioAdmin" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="disableRadioGMCheckbox">GM:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableRadioGMCheckbox" name="disableRadioGM" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="disableRadioOverseerCheckbox">Overseer:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableRadioOverseerCheckbox" name="disableRadioOverseer" value="false"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="disableRadioModeratorCheckbox">Moderator:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableRadioModeratorCheckbox" name="disableRadioModerator" value="false"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="disableRadioInvisibleCheckbox">Invisible:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="disableRadioInvisibleCheckbox" name="disableRadioInvisible" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="clientCommandFilterInput">Client Command Filter:</label>
            </div>
             <div class="column2">
                <input type="text" id="clientCommandFilterInput" name="clientCommandFilter" value="-vehicle.*;+vehicle.damageWindow;+vehicle.fixPart;+vehicle.installPart;+vehicle.uninstallPart">
            </div>
            <div class="column1">
                <label for="clientActionLogsInput">Client Action Logs:</label>
            </div>
             <div class="column2">
                <input type="text" id="clientActionLogsInput" name="clientActionLogs" value="ISEnterVehicle;ISExitVehicle;ISTakeEngineParts;">
            </div>
            <div class="column1">
                <label for="perkLogsCheckbox">Perk Logs:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="perkLogsCheckbox" name="perkLogs" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="itemNumbersLimitPerContainerInput">Item Numbers Limit Per Container:</label>
            </div>
             <div class="column2">
                <input type="number" id="itemNumbersLimitPerContainerInput" name="itemNumbersLimitPerContainer" min="0" max="9000" value="0">
            </div>
            <div class="column1">
                <label for="bloodSplatLifespanDaysInput">Blood Splat Lifespan Days:</label>
            </div>
             <div class="column2">
                <input type="number" id="bloodSplatLifespanDaysInput" name="bloodSplatLifespanDays" min="0" max="365" value="0">
            </div>
            <div class="column1">
                <label for="allowNonAsciiUsernameCheckbox">Allow Non-ASCII Username:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="allowNonAsciiUsernameCheckbox" name="allowNonAsciiUsername" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="banKickGlobalSoundCheckbox">Ban Kick Global Sound:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="banKickGlobalSoundCheckbox" name="banKickGlobalSound" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="removePlayerCorpsesOnCorpseRemovalCheckbox">Remove Player Corpses On Corpse Removal:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="removePlayerCorpsesOnCorpseRemovalCheckbox" name="removePlayerCorpsesOnCorpseRemoval" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="trashDeleteAllCheckbox">Trash Delete All:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="trashDeleteAllCheckbox" name="trashDeleteAll" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="pvpMeleeWhileHitReactionCheckbox">PVP Melee While Hit Reaction:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="pvpMeleeWhileHitReactionCheckbox" name="pvpMeleeWhileHitReaction" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="mouseOverToSeeDisplayNameCheckbox">Mouse Over To See Display Name:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="mouseOverToSeeDisplayNameCheckbox" name="mouseOverToSeeDisplayName" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="hidePlayersBehindYouCheckbox">Hide Players Behind You:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="hidePlayersBehindYouCheckbox" name="hidePlayersBehindYou" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="pvpMeleeDamageModifierInput">PVP Melee Damage Modifier:</label>
            </div>
             <div class="column2">
                <input type="number" id="pvpMeleeDamageModifierInput" name="pvpMeleeDamageModifier" min="0.00" max="500.00" step="0.01" value="30.0">
            </div>
            <div class="column1">
                <label for="pvpFirearmDamageModifierInput">PVP Firearm Damage Modifier:</label>
            </div>
             <div class="column2">
                <input type="number" id="pvpFirearmDamageModifierInput" name="pvpFirearmDamageModifier" min="0.00" max="500.00" step="0.01" value="50.0">
            </div>
            <div class="column1">
                <label for="carEngineAttractionModifierInput">Car Engine Attraction Modifier:</label>
            </div>
             <div class="column2">
                <input type="number" id="carEngineAttractionModifierInput" name="carEngineAttractionModifier" min="0.00" max="10.00" step="0.01" value="0.5">
            </div>
            <div class="column1">
                <label for="playerBumpPlayerCheckbox">Player Bump Player:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="playerBumpPlayerCheckbox" name="playerBumpPlayer" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="mapRemotePlayerVisibilityInput">Map Remote Player Visibility:</label>
            </div>
             <div class="column2">
                <select id="mapRemotePlayerVisibilityInput" name="mapRemotePlayerVisibility">
                    <option value="1">Hidden</option>
                    <option value="2">Friends</option>
                    <option value="3" selected>Everyone</option>
                </select>
            </div>
            <div class="column1">
                <label for="backupsCountInput">Backups Count:</label>
            </div>
             <div class="column2">
                <input type="number" id="backupsCountInput" name="backupsCount" min="1" max="300" value="1">
            </div>
            <div class="column1">
                <label for="backupsOnStartCheckbox">Backups On Start:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="backupsOnStartCheckbox" name="backupsOnStart" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="backupsOnVersionChangeCheckbox">Backups On Version Change:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="backupsOnVersionChangeCheckbox" name="backupsOnVersionChange" value="true">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="backupsPeriodInput">Backups Period:</label>
            </div>
             <div class="column2">
                <input type="number" id="backupsPeriodInput" name="backupsPeriod" min="0" max="1500" value="0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType1Checkbox">Anti-Cheat Protection Type 1:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType1Checkbox" name="antiCheatProtectionType1" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType2Checkbox">Anti-Cheat Protection Type 2:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType2Checkbox" name="antiCheatProtectionType2" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType3Checkbox">Anti-Cheat Protection Type 3:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType3Checkbox" name="antiCheatProtectionType3" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType4Checkbox">Anti-Cheat Protection Type 4:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType4Checkbox" name="antiCheatProtectionType4" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType5Checkbox">Anti-Cheat Protection Type 5:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType5Checkbox" name="antiCheatProtectionType5" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType6Checkbox">Anti-Cheat Protection Type 6:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType6Checkbox" name="antiCheatProtectionType6" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType7Checkbox">Anti-Cheat Protection Type 7:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType7Checkbox" name="antiCheatProtectionType7" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType8Checkbox">Anti-Cheat Protection Type 8:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType8Checkbox" name="antiCheatProtectionType8" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType9Checkbox">Anti-Cheat Protection Type 9:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType9Checkbox" name="antiCheatProtectionType9" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType10Checkbox">Anti-Cheat Protection Type 10:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType10Checkbox" name="antiCheatProtectionType10" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType11Checkbox">Anti-Cheat Protection Type 11:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType11Checkbox" name="antiCheatProtectionType11" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType12Checkbox">Anti-Cheat Protection Type 12:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType12Checkbox" name="antiCheatProtectionType12" value="false"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType13Checkbox">Anti-Cheat Protection Type 13:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType13Checkbox" name="antiCheatProtectionType13" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType14Checkbox">Anti-Cheat Protection Type 14:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType14Checkbox" name="antiCheatProtectionType14" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType15Checkbox">Anti-Cheat Protection Type 15:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType15Checkbox" name="antiCheatProtectionType15" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType16Checkbox">Anti-Cheat Protection Type 16:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType16Checkbox" name="antiCheatProtectionType16" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType17Checkbox">Anti-Cheat Protection Type 17:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType17Checkbox" name="antiCheatProtectionType17" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType18Checkbox">Anti-Cheat Protection Type 18:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType18Checkbox" name="antiCheatProtectionType18" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType19Checkbox">Anti-Cheat Protection Type 19:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType19Checkbox" name="antiCheatProtectionType19" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType20Checkbox">Anti-Cheat Protection Type 20:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType20Checkbox" name="antiCheatProtectionType20" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType21Checkbox">Anti-Cheat Protection Type 21:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType21Checkbox" name="antiCheatProtectionType21" value="false"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType22Checkbox">Anti-Cheat Protection Type 22:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType22Checkbox" name="antiCheatProtectionType22" value="false"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType23Checkbox">Anti-Cheat Protection Type 23:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType23Checkbox" name="antiCheatProtectionType23" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType24Checkbox">Anti-Cheat Protection Type 24:</label>
            </div>
             <div class="column2">
                <label class="switch">
                    <input type="checkbox" id="antiCheatProtectionType24Checkbox" name="antiCheatProtectionType24" value="true"><br />
                    <span class="slider round"></span>
                </label>
            </div>
             <div class="column1 heading">
                <label>Threshold value multipliers</label><br />
            </div>
             <div class="column2">
                &nbsp;
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType2ThresholdMultiplierInput">Anti-Cheat Protection Type 2 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType2ThresholdMultiplierInput" name="antiCheatProtectionType2ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="3.0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType3ThresholdMultiplierInput">Anti-Cheat Protection Type 3 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType3ThresholdMultiplierInput" name="antiCheatProtectionType3ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="1.0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType4ThresholdMultiplierInput">Anti-Cheat Protection Type 4 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType4ThresholdMultiplierInput" name="antiCheatProtectionType4ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="1.0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType9ThresholdMultiplierInput">Anti-Cheat Protection Type 9 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType9ThresholdMultiplierInput" name="antiCheatProtectionType9ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="1.0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType15ThresholdMultiplierInput">Anti-Cheat Protection Type 15 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType15ThresholdMultiplierInput" name="antiCheatProtectionType15ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="1.0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType20ThresholdMultiplierInput">Anti-Cheat Protection Type 20 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType20ThresholdMultiplierInput" name="antiCheatProtectionType20ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="1.0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType22ThresholdMultiplierInput">Anti-Cheat Protection Type 22 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType22ThresholdMultiplierInput" name="antiCheatProtectionType22ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="1.0">
            </div>
            <div class="column1">
                <label for="antiCheatProtectionType24ThresholdMultiplierInput">Anti-Cheat Protection Type 24 Threshold Multiplier:</label>
            </div>
             <div class="column2">
                <input type="number" id="antiCheatProtectionType24ThresholdMultiplierInput" name="antiCheatProtectionType24ThresholdMultiplier" min="1.00" max="10.00" step="0.01" value="6.0">
            </div>
        </div>
    </form>
  </div>

        <button id="saveChangesBtn" disabled>Save Changes</button>
        <button id="rebootServerBtn" disabled>Reboot Server to enable changes</button>

        <script src="js/chat.js"></script>
        <script src="js/radio.js"></script>
        <script src="js/checkbox.js"></script>
        <script src="js/textbox.js"></script>
</body>
</html>
